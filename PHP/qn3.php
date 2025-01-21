<?php
// Define costs
$hamburger_cost = 4.95;
$milkshake_cost = 1.95;
$cola_cost = 0.85;

// Define quantities
$hamburger_quantity = 2;
$milkshake_quantity = 1;
$cola_quantity = 1;

// Calculate subtotals
$subtotal_hamburgers = $hamburger_cost * $hamburger_quantity;
$subtotal_milkshake = $milkshake_cost * $milkshake_quantity;
$subtotal_cola = $cola_cost * $cola_quantity;

// Total cost before tax
$subtotal = $subtotal_hamburgers + $subtotal_milkshake + $subtotal_cola;

// Tip calculation (pre-tax)
$tip_rate = 0.16;
$tip_amount = $subtotal * $tip_rate;

// Sales tax calculation
$tax_rate = 0.075;
$tax_amount = $subtotal * $tax_rate;

// Total cost including tax and tip
$total_cost = $subtotal + $tax_amount + $tip_amount;

// Helper function to format money
function format_money($amount) {
    return number_format($amount, 2);
}


// Print formatted bill
echo "========== Restaurant Bill ==========";
echo "Item\t\tPrice\tQty\tTotal\r\n";
echo "---------------------------------------\r\n";
echo "Hamburger\t$" . format_money($hamburger_cost) . "\t" . $hamburger_quantity . "\t$" . format_money($subtotal_hamburgers) . "\n";
echo "Milkshake\t$" . format_money($milkshake_cost) . "\t" . $milkshake_quantity . "\t$" . format_money($subtotal_milkshake) . "\n";
echo "Cola\t\t$" . format_money($cola_cost) . "\t" . $cola_quantity . "\t$" . format_money($subtotal_cola) . "\n";
echo "---------------------------------------\n";
echo "Food and Drink Total (Pre-Tax):      $" . format_money($subtotal) . "\n";
echo "Tip (16%):\t\t\t$" . format_money($tip_amount) . "\n";
echo "Tax (7.5%):\t\t\t$" . format_money($tax_amount) . "\n";
echo "---------------------------------------\n";
echo "Total (Post-Tax and Tip):\t$" . format_money($total_cost) . "\n";
echo "=======================================\n";
?>
