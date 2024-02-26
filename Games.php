<?php

// IMPORTO CLASSE PRODOTTO
require_once __DIR__ . '/Product.php';

// CLACCE GIOCHI CON EREDITARIETA' CLASSE PRODOTTI
class Game extends Product {

    // VARIABILI
    public $image;

    // COSTRUTTORE
    public function __construct($name, $price, $category, $image) {

        // PRENDO ELEMENTI DAL GENITORE PRODOTTI
        parent::__construct($name, $price, $category);

        // AGGIUNGO IMMAGINE
        $this -> image = $image;
    }
    
}


?>