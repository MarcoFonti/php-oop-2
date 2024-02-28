<?php

// IMPORTO CATEGORIE
require_once __DIR__ . '/database/Categories.php';

// METTO TUTTO IN UN SINGOLO ARRAY
$category_animals = array($cane, $gatto, $uccelli, $pesci);

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <!-- HEAD -->
    <?php include __DIR__ . '/head.php' ?>
<body>
    <div class="container">
        <table class="table">
            <!-- THEAD -->
            <?php include __DIR__ . '/template_table/thead.php' ?>
            <!-- TBODY -->
            <?php require __DIR__ . '/template_table/tbody.php' ?>
        </table>
    </div>
</body>
</html>