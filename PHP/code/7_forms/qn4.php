<?php
function validate_and_process() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];
        $package = $_POST;

        // Validation
        if ($package['weight'] > 150) $errors[] = "Weight exceeds 150 pounds.";
        if ($package['length'] > 36 || $package['width'] > 36 || $package['height'] > 36) $errors[] = "One or more dimensions exceed 36 inches.";
        
        if (!preg_match("/^[A-Z]{2}$/", $package['from_state']) || !preg_match("/^[A-Z]{2}$/", $package['to_state'])) {
            $errors[] = "Invalid state code.";
        }
        
        if (!preg_match("/^\d{5}(-\d{4})?$/", $package['from_zip']) || !preg_match("/^\d{5}(-\d{4})?$/", $package['to_zip'])) {
            $errors[] = "Invalid zip code.";
        }

        if (empty($errors)) {
            echo "<h2>Package Details:</h2>";
            echo "<strong>From:</strong><br>";
            echo implode("<br>", [$package['from_street'], $package['from_city'], $package['from_state'], $package['from_zip']]) . "<br>";
            echo "<strong>To:</strong><br>";
            echo implode("<br>", [$package['to_street'], $package['to_city'], $package['to_state'], $package['to_zip']]) . "<br>";
            echo "<strong>Package Dimensions:</strong> L: {$package['length']}in, W: {$package['width']}in, H: {$package['height']}in<br>";
            echo "<strong>Weight:</strong> {$package['weight']} lbs";
        } else {
            echo "<ul><li>" . implode("</li><li>", $errors) . "</li></ul>";
        }
    }
}

validate_and_process();