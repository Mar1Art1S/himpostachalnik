<?php
header('Content-Type: text/plain');

$viewFile = __DIR__ . '/../storage/framework/views/6f9669da280078f7843b88c518a892d0.php';
if (file_exists($viewFile)) {
    $lines = file($viewFile);
    echo "Total lines: " . count($lines) . "\n";
    for ($i = max(0, 310); $i < min(count($lines), 340); $i++) {
        echo ($i + 1) . ": " . $lines[$i];
    }
} else {
    echo "File not found: " . $viewFile . "\n";
    $files = glob(__DIR__ . '/../storage/framework/views/*.php');
    echo "Found " . count($files) . " compiled view files.\n";
}
