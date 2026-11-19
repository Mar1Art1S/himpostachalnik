<?php
header('Content-Type: text/plain');

echo "T_INLINE_HTML CONSTANT: " . T_INLINE_HTML . "\n";
$tokens = token_get_all("Hello");
echo "TOKEN 0 OF 'Hello': ID=" . $tokens[0][0] . ", NAME=" . token_name($tokens[0][0]) . "\n";
echo "DOES TOKEN 0 MATCH T_INLINE_HTML? " . ($tokens[0][0] === T_INLINE_HTML ? 'YES' : 'NO') . "\n";

$tokensBlade = token_get_all("@props(['field'])");
echo "TOKEN 0 OF Blade: ID=" . $tokensBlade[0][0] . ", NAME=" . token_name($tokensBlade[0][0]) . "\n";
echo "DOES Blade MATCH T_INLINE_HTML? " . ($tokensBlade[0][0] === T_INLINE_HTML ? 'YES' : 'NO') . "\n";

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$k = $app->make(Illuminate\Contracts\Console\Kernel::class);
$k->bootstrap();

$compiler = app('blade.compiler');
$r = new ReflectionClass($compiler);
$mParse = $r->getMethod('parseToken');
$mParse->setAccessible(true);

$res = $mParse->invoke($compiler, $tokensBlade[0]);
echo "RESULT OF parseToken: " . $res . "\n";
