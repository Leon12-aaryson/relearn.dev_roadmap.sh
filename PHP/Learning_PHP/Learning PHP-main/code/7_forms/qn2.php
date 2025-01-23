<?php
function process_form() {
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            echo "$key: " . implode(', ', $value) . "<br>";
        } else {
            echo "$key: $value<br>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    process_form();
}
?>