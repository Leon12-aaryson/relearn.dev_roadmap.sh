<?php
use App\Ingredients\Ingredient;

require_once 'qn4.php';

$ingredient1 = new Ingredient("Tomato", 0.5);
$ingredient2 = new Ingredient("Cheese", 1.0);

// Using IngredientEntree
class Entree {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class IngredientEntree extends Entree {
    private $ingredients;

    public function __construct($name, $ingredients) {
        parent::__construct($name);
        $this->ingredients = $ingredients; // Array of Ingredient objects
    }

    public function totalCost() {
        $total = 0;
        foreach ($this->ingredients as $ingredient) {
            $total += $ingredient->getCost();
        }
        return $total;
    }

    public function __toString() {
        $ingredientsStr = implode(", ", array_map(function($ing) { return (string)$ing; }, $this->ingredients));
        return $this->name . " - Total Cost: $" . number_format($this->totalCost(), 2) . " - Ingredients: " . $ingredientsStr;
    }
}

$entree = new IngredientEntree("Pizza", [$ingredient1, $ingredient2]);
echo $entree;