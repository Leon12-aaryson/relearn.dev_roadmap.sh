<?php
// Print the header for the table
echo "Fahrenheit\tCelsius\n";
echo "----------\t-------\n";

// Use a for loop to go through temperatures from -50°F to 50°F in 5-degree increments
for ($fahrenheit = -50; $fahrenheit <= 50; $fahrenheit += 5) {
    // Convert Fahrenheit to Celsius
    $celsius = ($fahrenheit - 32) * 5 / 9;
    
    // Format the output to show 1 decimal place for Celsius, fixed width for Fahrenheit
    printf("%10d\t%7.1f\n", $fahrenheit, $celsius);
}
?>