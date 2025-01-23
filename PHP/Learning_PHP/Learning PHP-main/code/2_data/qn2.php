<?php
// Define costs
$hamburger = 4.95;
$milkshake = 1.95;
$cola = 0.85;

// Calculate subtotals
$subtotal_hamburger = $hamburger * 2;
$subtotal_milkshake = $milkshake;
$subtotal_cola = $cola;
$sub_total = $subtotal_hamburger + $subtotal_milkshake + $subtotal_cola;

// Tax calculation
$tax_rate = 0.075; // 7.5% as a decimal
$tax = $sub_total * $tax_rate;

// Tip calculation (pre-tax)
$tip_rate = 0.16; // 16% as a decimal
$tip = $sub_total * $tip_rate;

// Total cost including tax and tip
$total_expenditure = $tip + $sub_total + $tax;

// Format numbers for display
echo "Meal Cost Breakdown:\n";
echo "Hamburgers: $" . number_format($subtotal_hamburger, 2) . "\n";
echo "Milkshake: $" . number_format($subtotal_milkshake, 2) . "\n";
echo "Cola: $" . number_format($subtotal_cola, 2) . "\n";
echo "Subtotal: $" . number_format($sub_total, 2) . "\n";
echo "Tip (16%): $" . number_format($tip, 2) . "\n";
echo "Tax (7.5%): $" . number_format($tax, 2) . "\n";
echo "Total: $" . number_format($total_expenditure, 2) . "\n";
?>