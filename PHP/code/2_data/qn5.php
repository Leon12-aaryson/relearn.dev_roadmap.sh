<?php
// Initialize variables
$counter = 1;
$power = 2;

// Loop to print numbers and powers of 2
while ($counter <= 5) {
    // Print the current counter value
    echo $counter . "=> Power of 2 = " . $power . "\n";
    
    // Increment counter
    $counter++;
    
    // Multiply power by 2 (which is equivalent to calculating 2^counter)
    $power *= 2;
}
?>