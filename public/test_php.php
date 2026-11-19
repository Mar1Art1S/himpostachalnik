<?php
header('Content-Type: text/plain');

$logFile = __DIR__ . '/../storage/logs/laravel.log';
if (file_exists($logFile)) {
    $content = file_get_contents($logFile);
    preg_match_all('/local\.ERROR: ([^\n]+)/', $content, $matches);
    if (!empty($matches[1])) {
        $lastErrors = array_slice($matches[1], -10);
        foreach ($lastErrors as $err) {
            echo $err . "\n---\n";
        }
    } else {
        echo "No matches found.";
    }
}
