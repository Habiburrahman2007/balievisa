<?php
require 'vendor/autoload.php';

use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Filesystem\Filesystem;

$filesystem = new Filesystem();
$compiler = new BladeCompiler($filesystem, __DIR__ . '/storage/framework/views');

try {
    $content = file_get_contents('resources/views/faq.blade.php');
    $compiled = $compiler->compileString($content);
    echo "Successfully compiled!\n";
} catch (\Throwable $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    
}
