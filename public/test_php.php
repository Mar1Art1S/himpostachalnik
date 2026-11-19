<?php

use Illuminate\Contracts\Console\Kernel;

header('Content-Type: text/plain');

echo 'PHP_VERSION: '.PHP_VERSION."\n";
echo 'PHP_SAPI: '.PHP_SAPI."\n";
echo 'T_INLINE_HTML: '.T_INLINE_HTML.' (name: '.token_name(T_INLINE_HTML).")\n";
echo 'T_PRINT: '.(defined('T_PRINT') ? T_PRINT.' (name: '.token_name(T_PRINT).')' : 'undefined')."\n";

$tokens = token_get_all("@props(['field'])");
echo 'Token 0 ID: '.$tokens[0][0]."\n";
echo 'Token 0 name: '.token_name($tokens[0][0])."\n";
echo 'Token 0 == T_INLINE_HTML? '.($tokens[0][0] == T_INLINE_HTML ? 'YES' : 'NO')."\n";
echo 'Token 0 === T_INLINE_HTML? '.($tokens[0][0] === T_INLINE_HTML ? 'YES' : 'NO')."\n";

require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$k = $app->make(Kernel::class);
$k->bootstrap();

$bc = app('blade.compiler');
$ref = new ReflectionProperty($bc, 'compilers');
$ref->setAccessible(true);
echo 'BladeCompilers: '.json_encode($ref->getValue($bc))."\n";

$testStr = "@props(['field'])";
$step1 = $bc->compileString($testStr);
echo "compileString output:\n".$step1."\n";
