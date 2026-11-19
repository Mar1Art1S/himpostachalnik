<?php
header('Content-Type: text/plain');

$logFile = __DIR__ . '/../storage/logs/laravel.log';
if (file_exists($logFile)) {
    $content = file_get_contents($logFile);
    preg_match_all('/\[\d{4}-\d{2}-\d{2} [^\]]+\] local\.ERROR: [^\n]+/', $content, $matches);
    if (!empty($matches[0])) {
        $lastErrors = array_slice($matches[0], -5);
        foreach ($lastErrors as $err) {
            echo $err . "\n";
        }
    } else {
        echo "No errors found in log.";
    }
}
