<?php
foreach (['resources/views/faq.blade.php', 'resources/views/layouts/app.blade.php'] as $file) {
    $content = file_get_contents($file);
    if (strpos($content, "\xEF\xBB\xBF") === 0) {
        echo "$file has BOM\n";
    } else {
        echo "$file no BOM\n";
    }
}
