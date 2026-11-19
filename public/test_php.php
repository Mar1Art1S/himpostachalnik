<?php
header('Content-Type: text/plain');
ini_set('display_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$k = $app->make(Illuminate\Contracts\Console\Kernel::class);
$k->bootstrap();

$compiler = app('blade.compiler');
$r = new ReflectionClass($compiler);

$testInput = "@props(['field'])\n<x-section />";

// Let's run compileComponentTags manually:
$mCompTags = $r->getMethod('compileComponentTags');
$mCompTags->setAccessible(true);
$step1 = $mCompTags->invoke($compiler, $testInput);
echo "AFTER compileComponentTags:\n$step1\n\n";

// Let's run precompilers:
$pPrecompilers = $r->getProperty('precompilers');
$pPrecompilers->setAccessible(true);
$precompilers = $pPrecompilers->getValue($compiler);

$step2 = $step1;
foreach ($precompilers as $idx => $precompiler) {
    $before = $step2;
    $step2 = $precompiler($step2);
    echo "PRECOMPILER $idx changed string? " . ($before !== $step2 ? 'YES' : 'NO') . "\n";
    if ($before !== $step2) {
        echo "RESULT OF PRECOMPILER $idx:\n$step2\n\n";
    }
}

// Now let's see what token_get_all($step2) produces:
echo "\nTOKENS OF step2:\n";
foreach (token_get_all($step2) as $idx => $t) {
    if (is_array($t)) {
        echo "$idx: " . token_name($t[0]) . " (" . $t[0] . ") => " . json_encode($t[1]) . "\n";
    } else {
        echo "$idx: LITERAL => " . json_encode($t) . "\n";
    }
}

// What does parseToken do on the token?
$mParse = $r->getMethod('parseToken');
$mParse->setAccessible(true);
echo "\nPARSED TOKENS:\n";
foreach (token_get_all($step2) as $idx => $t) {
    $parsed = is_array($t) ? $mParse->invoke($compiler, $t) : $t;
    if ($parsed !== (is_array($t) ? $t[1] : $t)) {
        echo "TOKEN $idx WAS MODIFIED BY parseToken TO:\n$parsed\n";
    }
}

// Test compileStatements directly:
echo "\nDIRECT compileStatements:\n";
$mCompStatements = $r->getMethod('compileStatements');
$mCompStatements->setAccessible(true);
echo $mCompStatements->invoke($compiler, "@props(['field'])\n@component('test')");
