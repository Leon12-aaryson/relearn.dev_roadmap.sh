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

// Combine arrays into an associative array for easier sorting
$cityPopulation = array_combine($cities, $populations);

// Sort by population in descending order
arsort($cityPopulation);

// State population totals (these are hypothetical since real data isn't provided)
$stateTotals = [
    "NY" => 8175133, // Assuming only NYC's population for simplicity
    "CA" => 3792621 + 1307402 + 945942, // Sum of CA cities
    "IL" => 2695598, // Assuming only Chicago for simplicity
    "TX" => 2100263 + 1327407 + 1197816, // Sum of TX cities
    "PA" => 1526006, // Assuming only Philadelphia for simplicity
    "AZ" => 1445632  // Assuming only Phoenix for simplicity
];

// Calculate the total population for all cities
$totalCityPopulation = array_sum($populations);

// Print the table header
echo "City/State\t\tPopulation\n";
echo "------------------\t--------------\n";

// Print each city and its population after sorting
foreach ($cityPopulation as $city => $population) {
    echo $city . "\t\t" . $population . "\n";
}

echo "\n";

// Print state totals
foreach ($stateTotals as $state => $total) {
    echo "State Total ($state)\t\t" . $total . "\n";
}

// Print the total population of all cities
echo "\nTotal Population of Top 10 Cities: " . number_format($totalCityPopulation) . "\n";
?>