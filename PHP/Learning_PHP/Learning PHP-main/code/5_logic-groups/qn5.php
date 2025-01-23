<?php
function rgbToHex($red, $green, $blue) {
    // Convert each value to a two-character hexadecimal number
    $r = dechex($red);
    $g = dechex($green);
    $b = dechex($blue);
    
    // Ensure each component is two characters long by padding with '0' if necessary
    $r = str_pad($r, 2, '0', STR_PAD_LEFT);
    $g = str_pad($g, 2, '0', STR_PAD_LEFT);
    $b = str_pad($b, 2, '0', STR_PAD_LEFT);
    
    // Concatenate the values with a leading '#'
    return '#' . $r . $g . $b;
}

// Example usage:
echo rgbToHex(255, 0, 255) . "\n"; // Output: #ff00ff
?>