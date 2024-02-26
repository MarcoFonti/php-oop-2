<?php

// CLASSE PRODOTTO
class Product {
    public $name;
    public $price;
    public $category;

    // COSTRUTTORE GENITORE DELLE CLASSI ACCESSORIES, FOODES, GAMES
    public function __construct($name, $price, $category) {
        $this -> name = $name;
        $this -> price = $price;
        $this -> category = $category;
    }
    
}

?>