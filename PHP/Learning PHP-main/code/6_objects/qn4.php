<?php
namespace App\Ingredients;

class Ingredient {
    private $name;
    private $cost;

    public function __construct($name, $cost) {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function changeCost($newCost) {
        $this->cost = $newCost;
    }

    public function __toString() {
        return $this->name . " (Cost: $" . number_format($this->cost, 2) . ")";
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getCost() {
        return $this->cost;
    }
}