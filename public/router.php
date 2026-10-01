<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $path;

// Eğer dosya fiziksel olarak diskte varsa (CSS, JS, resimler vb.) doğrudan servis et
if ($path !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// Statik dosya değilse isteği app_dev.php'ye aktar
require __DIR__ . '/app_dev.php';