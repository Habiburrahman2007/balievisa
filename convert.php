<?php
/**
 * Image Optimization Script
 * 
 * This script converts key images to WebP and resizes the logo to improve performance.
 * It also scans the articles storage for optimization.
 */

// 1. Static Assets
$staticFiles = [
    'public/img/hero-bali.jpg' => [
        'dest' => 'public/img/hero-bali.webp',
        'quality' => 80
    ],
    'public/images/logo-visa.png' => [
        'dest' => 'public/images/logo-visa.webp',
        'quality' => 90,
        'resize' => [128, 128] // Resize logo since it was reported too large
    ],
];

// 2. Scan Articles
$articleDir = 'storage/app/public/articles';
if (is_dir($articleDir)) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($articleDir));
    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $ext = strtolower($file->getExtension());
            if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                $path = $file->getPathname();
                $dest = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $path);
                if (!file_exists($dest)) {
                    $staticFiles[$path] = [
                        'dest' => $dest,
                        'quality' => 75
                    ];
                }
            }
        }
    }
}

foreach ($staticFiles as $src => $config) {
    if (!file_exists($src)) {
        echo "File not found: $src\n";
        continue;
    }
    
    $dest = $config['dest'];
    $quality = $config['quality'] ?? 80;
    
    $ext = strtolower(pathinfo($src, PATHINFO_EXTENSION));
    if ($ext === 'jpg' || $ext === 'jpeg') {
        $im = imagecreatefromjpeg($src);
    } elseif ($ext === 'png') {
        $im = imagecreatefrompng($src);
        imagepalettetotruecolor($im);
        imagealphablending($im, true);
        imagesavealpha($im, true);
    } else {
        continue;
    }

    if ($im) {
        // Handle Resizing
        if (isset($config['resize'])) {
            $width = imagesx($im);
            $height = imagesy($im);
            $newWidth = $config['resize'][0];
            $newHeight = $config['resize'][1];
            
            $resized = imagecreatetruecolor($newWidth, $newHeight);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            imagecopyresampled($resized, $im, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($im);
            $im = $resized;
        }

        imagewebp($im, $dest, $quality);
        imagedestroy($im);
        echo "Optimized: $src -> $dest\n";
    }
}
echo "Optimization complete.\n";
