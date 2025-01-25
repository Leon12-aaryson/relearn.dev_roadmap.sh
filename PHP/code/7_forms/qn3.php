<?php
function calculate() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $op1 = $_POST['op1'];
        $op2 = $_POST['op2'];
        $operation = $_POST['operation'];
        
        if (!is_numeric($op1) || !is_numeric($op2)) {
            echo "Please enter numeric values for operands.";
            return;
        }
        
        $result = 0;
        $op1 = floatval($op1);
        $op2 = floatval($op2);
        
        switch ($operation) {
            case 'add':
                $result = $op1 + $op2;
                $operator = '+';
                break;
            case 'subtract':
                $result = $op1 - $op2;
                $operator = '-';
                break;
            case 'multiply':
                $result = $op1 * $op2;
                $operator = '*';
                break;
            case 'divide':
                if ($op2 == 0) {
                    echo "Error: Division by zero.";
                    return;
                }
                $result = $op1 / $op2;
                $operator = '/';
                break;
        }
        
        echo "$op1 $operator $op2 = $result";
    }
}

calculate();
?>