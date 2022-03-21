<?php 

class Product {

    public $name;
    public $item;

    protected $price;
    protected $animals = [];

    public function getPrice() {
        return $this -> price;
    }

    public function setPrice($price) {
        if (is_numeric($price)) {
            $this -> price = $price;
        }
    }

    public function getAnimals() {
        return $this -> animals;
    }

    public function setAnimals($array) {
        if (is_array($array)) {
            $this -> animals = $array;
        }
    }

}

?>