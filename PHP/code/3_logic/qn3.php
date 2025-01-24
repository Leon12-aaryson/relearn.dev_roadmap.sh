<?php
// Initialize the starting Fahrenheit temperature
$fahrenheit = -50;

// Print the header for the table
echo "Fahrenheit\tCelsius\n";
echo "----------\t-------\n";

// Use a while loop to go through temperatures from -50°F to 50°F in 5-degree increments
while ($fahrenheit <= 50) {
    // Convert Fahrenheit to Celsius
    $celsius = ($fahrenheit - 32) * 5 / 9;
    
    // Format the output to show 1 decimal place for Celsius, fixed width for Fahrenheit
    printf("%10d\t%7.1f\n", $fahrenheit, $celsius);
/*
*  echo str_pad($fahrenheit, 10, ' ', STR_PAD_LEFT) . "\t" . number_format($celsius, 1, '.', '') . "\n";
*  this can be the other format of outputting the same value such as the printf (print formatted)
*/ 
    // Increment Fahrenheit by 5 degrees
    $fahrenheit += 5;
}
?>