<?php

header('Content-Type: text/plain');

$htmlId = token_get_all('a')[0][0] ?? null;
echo 'T_INLINE_HTML: '.(defined('T_INLINE_HTML') ? T_INLINE_HTML : 'undefined')."\n";
echo 'Dynamic HTML Token: '.$htmlId."\n";

$logFile = __DIR__.'/../storage/logs/laravel.log';
if (file_exists($logFile)) {
    $content = file_get_contents($logFile);
    preg_match_all('/\[\d{4}-\d{2}-\d{2} [^\]]+\] local\.ERROR: [^\n]+/', $content, $matches);
    if (! empty($matches[0])) {
        echo "\nLAST 3 ERRORS:\n";
        foreach (array_slice($matches[0], -3) as $err) {
            echo $err."\n";
        }
    } else {
        echo "\nNo errors in log.\n";
    }
}
