<?php
$first_name = "Aaron Leonard";
$last_name = "Oluk";

// Construct the full name
$full_name = $first_name . " " . $last_name;

/* 
Print the full name
to print two seperate strings together we do concatenation which in PHP is handled by using a period(.)
*/
echo "My full name is: " . $full_name . "\n";

/* Calculate and print the length of the full name
calculation of the string length is usually done with the strlen() function
*/
echo "The length of my full name is: " . strlen($full_name) . " characters.\n";
?>