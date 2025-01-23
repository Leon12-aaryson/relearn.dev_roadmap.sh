a. The grades and ID numbers of students in a class

Array Type: Associative array where the key is the student's name, and the value is another associative array containing the grade and ID number.

```
$students = [
    'James D. McCawley' => ['grade' => 'A+', 'id' => 271231],
    'Buwei Yang Chao' => ['grade' => 'A', 'id' => 818211]
];
```
b. How many of each item in a store inventory are in stock

Array Type: Associative array where the key is the item name and the value is the stock quantity.

```
$inventory = [
    'Apple' => 100,
    'Banana' => 50,
    'Orange' => 75
];
```

c. School lunches for a week: the different parts of each meal (entrée, side dish, drink, etc.) and the cost for each day

Array Type: Associative array with days as keys, each containing another associative array for meal components and cost.

```
$lunches = [
    'Monday' => ['entree' => 'Pizza', 'side_dish' => 'Salad', 'drink' => 'Milk', 'cost' => 3.50],
    'Tuesday' => ['entree' => 'Burger', 'side_dish' => 'Fries', 'drink' => 'Juice', 'cost' => 4.00]
];
```

d. The names of people in your family

Array Type: Simple indexed array for names.

```
$familyNames = [
    'John',
    'Jane',
    'Mike'
];
```

e. The names, ages, and relationship to you of people in your family

Array Type: Associative array where each key is a name, and the value is another associative array detailing age and relationship.

```
$familyDetails = [
    'John Doe' => ['age' => 45, 'relationship' => 'Father'],
    'Jane Doe' => ['age' => 43, 'relationship' => 'Mother'],
    'Mike Doe' => ['age' => 20, 'relationship' => 'Brother']
];
```
