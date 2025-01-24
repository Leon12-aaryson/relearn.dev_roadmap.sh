```
<?php
function restaurant_check($meal, $tax, $tip) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    return $meal + $tax_amount + $tip_amount;
}

$cash_on_hand = 31;
$meal = 25;
$tax = 10;
$tip = 10;

while(($cost = restaurant_check($meal,$tax,$tip)) < $cash_on_hand) 
{
    $tip++;
    print "I can afford a tip of $tip% ($cost)\n";
}
?>
```


The function restaurant_check calculates the total cost of a meal including tax and tip.

The loop starts with a tip of 10% and increases it by 1% each iteration until the total cost exceeds the cash on hand ($31).

Here's what will print:

- I can afford a tip of 11% (28.50)
- I can afford a tip of 12% (28.75)
- I can afford a tip of 13% (29.00)
- I can afford a tip of 14% (29.25)
- I can afford a tip of 15% (29.50)
- I can afford a tip of 16% (29.75)
- I can afford a tip of 17% (30.00)
- I can afford a tip of 18% (30.25)

The loop stops once the cost reaches or exceeds $31, which happens when the tip is 18%.