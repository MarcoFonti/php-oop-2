<?php

// IMPORTO CLASSE ACCESSORI
require_once __DIR__ . '/Accessories.php';

//IMPORTO CLASSE CIBO
require_once __DIR__ . '/Foods.php';

// IMPORTO CLASSE GIOCHI
require_once __DIR__ . '/Games.php';

// CLASSE CATEGORIE
class Category {

    // VARIABILI
    public $name;
    public $products = array();

    // COSTRUTTORE
    public function __construct($name) {
        $this->name = $name;
    }

    // FUNZIONE PER AGGIUGERE PRODOTTI
    public function addProduct($product) {
        $this-> products[] = $product;
    }
    
}



// TIPI DI CATEGORIE
$cane = new Category ("Cane");
$gatto = new Category ("Gatto");
$uccelli = new Category ("Uccelli");
$pesci = new Category ("Pesci");

// AGGIUGO CIBI A PRODOTTI
$cane-> addProduct (new Food ("Royal Canin Mini Adult", 15.99, $cane, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000"));
$cane-> addProduct (new Food ("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 8.49, $cane, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg"));
$gatto-> addProduct (new Food ("Almo Nature Cat Daily Lattina", 6.49, $gatto, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg"));
$pesci-> addProduct (new Food ("Mangime per Pesci Guppy in Fiocchi", 3.49, $pesci, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg"));
$uccelli-> addProduct (new Food ("Serinus", 3.49, $uccelli, "https://flora-fauna.es/3688-large_default/cibo-uccelli-selvatici-cria-serinus.jpg"));

// AGGIUGO ACESSORI A PRODOTTI
$uccelli -> addProduct (new Accessories ("Voliera Wilma in Legno", 89.99, $uccelli, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg"));
$pesci -> addProduct (new Accessories ("Cartucce Filtranti per Filtro EasyCrystal", 9.99, $uccelli, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg"));
$cane -> addProduct (new Accessories ("Cuccia per Cani", 9.99, $cane, "https://www.viridea.it/wp-content/uploads/2019/06/consiglio-accessori-indispensabili-cucciolo-cane.jpg"));
$gatto -> addProduct (new Accessories ("Cuccia per Gatti", 9.99, $gatto, "https://agrizoo.net/wp-content/uploads/2021/02/Accessori-gatti.jpg"));

// AGGIUGO GIOCHI A PRODOTTI
$cane -> addProduct (new Game("Kong Classic", 2.99, $cane, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg"));
$gatto -> addProduct (new Game("Topini di peluche Trixie", 1.99, $gatto, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg"));
$uccelli -> addProduct (new Game("Gioco per Uccelli", 1.99, $uccelli, "https://images-na.ssl-images-amazon.com/images/I/61QMGehDDXL._SL1001_.jpg"));
$pesci -> addProduct (new Game("Gioco per Pesci", 1.99, $pesci, "https://th.bing.com/th/id/OIP.1x_0vv9gwP4gajKNKE8JlwHaE8?rs=1&pid=ImgDetMain"));

?>