<?php

// IMPORTO CLASSE PRODOTTO
require_once __DIR__ . '/Product.php';

// CLACCE ACCESSORI CON EREDITARIETA' CLASSE PRODOTTI
class Accessories extends Product {

    // VARIABILI
    public $image;

    // COSTRUTTORE
    public function __construct($name, $price, $category, $image) {

        // PRENDO ELEMENTI DAL GENITORE PRODOTTI
        parent::__construct($name, $price, $category);
        
        // AGGIUGO IMMAGINE
        $this -> image = $image;
    }
    
}

?>