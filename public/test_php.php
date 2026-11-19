<?php
header('Content-Type: text/plain');
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$k = $app->make(Illuminate\Contracts\Console\Kernel::class);
$k->bootstrap();

$source = file_get_contents(__DIR__ . '/../storage/framework/views/7efa8d8730e6e64b895c482f47ff6151.blade.php');

$compiler = app('blade.compiler');

// Let's inspect tokens of $source
$tokens = token_get_all($source);
echo "TOKEN COUNT: " . count($tokens) . "\n";
echo "TOKEN 0: " . token_name($tokens[0][0]) . " => " . json_encode($tokens[0][1]) . "\n";
if (isset($tokens[1])) echo "TOKEN 1: " . (is_array($tokens[1]) ? token_name($tokens[1][0]) : $tokens[1]) . "\n";
if (isset($tokens[2])) echo "TOKEN 2: " . (is_array($tokens[2]) ? token_name($tokens[2][0]) : $tokens[2]) . "\n";
// Find where T_CLOSE_TAG is
foreach ($tokens as $idx => $t) {
    if (is_array($t) && $t[0] === T_CLOSE_TAG) {
        echo "T_CLOSE_TAG at index $idx: " . json_encode($t[1]) . "\n";
        $next = $tokens[$idx + 1] ?? null;
        echo "NEXT TOKEN: " . (is_array($next) ? token_name($next[0]) . ' => ' . json_encode($next[1]) : json_encode($next)) . "\n";
        break;
    }
}

// Let's inspect compilers property
$r = new ReflectionClass($compiler);
$pCompilers = $r->getProperty('compilers');
$pCompilers->setAccessible(true);
echo "COMPILERS: " . json_encode($pCompilers->getValue($compiler)) . "\n";

$pPrecompilers = $r->getProperty('precompilers');
$pPrecompilers->setAccessible(true);
echo "PRECOMPILERS COUNT: " . count($pPrecompilers->getValue($compiler)) . "\n";

// Let's test compiling just "@props(['field'])" without the leading PHP tag:
echo "\nWITHOUT LEADING PHP TAG:\n";
echo substr($compiler->compileString("@props(['field'])\n<x-section />"), 0, 300) . "\n";

// Let's test compiling with short tags setting
echo "\nINI SHORT_OPEN_TAG: " . ini_get('short_open_tag') . "\n";
echo "INI PCRE_BACKTRACK_LIMIT: " . ini_get('pcre.backtrack_limit') . "\n";
