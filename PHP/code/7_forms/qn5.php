<?php
function process_form() {
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            echo "$key: <br>";
            echo "<ul>";
            foreach ($value as $sub_key => $sub_value) {
                if (is_array($sub_value)) {
                    echo "<li>$sub_key: ";
                    echo "<ul>";
                    foreach ($sub_value as $sub_sub_key => $sub_sub_value) {
                        echo "<li>$sub_sub_key: $sub_sub_value</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<li>$sub_value</li>";
                }
            }
            echo "</ul>";
        } else {
            echo "$key: $value<br>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    process_form();
}
?>