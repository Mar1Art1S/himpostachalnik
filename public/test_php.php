<?php
header('Content-Type: text/plain');

$logFile = __DIR__ . '/../storage/logs/laravel.log';
if (file_exists($logFile)) {
    $lines = file($logFile);
    echo implode('', array_slice($lines, -100));
} else {
    echo "No log file found.";
}
