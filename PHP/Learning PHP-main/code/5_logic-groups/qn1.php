<?php
function createImageTag($url, $alt = '', $height = '', $width = '') {
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

// echo createImageTag('leona.url', 'leonpic');
?>