<?php
// Define arrays for cities and their respective populations
$cities = [
    "New York, NY",
    "Los Angeles, CA",
    "Chicago, IL",
    "Houston, TX",
    "Philadelphia, PA",
    "Phoenix, AZ",
    "San Antonio, TX",
    "San Diego, CA",
    "Dallas, TX",
    "San Jose, CA"
];

$populations = [
    8175133,
    3792621,
    2695598,
    2100263,
    1526006,
    1445632,
    1327407,
    1307402,
    1197816,
    945942
];

// Calculate the total population
$totalPopulation = array_sum($populations);

// Print the table header
echo "City\t\t\tPopulation\n";
echo "------------------\t--------------\n";

// Print each city and its population
for ($i = 0; $i < count($cities); $i++) {
    echo $cities[$i] . "\t\t" . $populations[$i] . "\n";
}

// Print the total population
echo "\nTotal Population of Top 10 Cities: " . number_format($totalPopulation) . "\n";
?>