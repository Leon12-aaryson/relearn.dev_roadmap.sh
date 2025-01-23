<?php
// Define the global variable for the image path
$imageBasePath = '/images/';

function createImageTag($filename, $alt = '', $height = '', $width = '') {
    global $imageBasePath;
    $url = $imageBasePath . $filename;
    
    $attributes = [
        'src' => $url,
        'alt' => $alt
    ];
    
    if ($height) $attributes['height'] = $height;
    if ($width) $attributes['width'] = $width;
    
    $attrString = '';
    foreach ($attributes as $key => $value) {
        if ($value) {
            $attrString .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
        }
    }
    
    return '<img' . $attrString . ' />';
}
?>