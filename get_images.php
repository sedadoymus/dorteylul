<?php
header('Content-Type: application/json');

// Resimlerin bulunduğu klasör
$directory = 'images';

// Klasördeki tüm dosyaları al
$files = glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

if ($files === false) {
    echo json_encode([]);
    exit;
}

// Resim dosyalarını JSON formatında döndür
echo json_encode($files);
?>