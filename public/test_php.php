<?php
echo "PHP_VERSION: " . PHP_VERSION . "\n";
echo "SAPI: " . PHP_SAPI . "\n";
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$k = $app->make(Illuminate\Contracts\Console\Kernel::class);
$k->bootstrap();

$source = file_get_contents(__DIR__ . '/../storage/framework/views/7efa8d8730e6e64b895c482f47ff6151.blade.php');
echo "COMPILED BY WEB PHP:\n";
echo substr(app('blade.compiler')->compileString($source), 0, 300);
