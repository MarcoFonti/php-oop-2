
<!-- BODY TABELLA -->
<tbody>
    <?php foreach ($category_animals as $category) : ?>
        <?php foreach ($category -> products as $product) : ?>
            <tr>
                <td><?= $category -> name ?></td>
                <td><?= $product -> name ?></td>
                <td><?= $product -> price ?></td>
                <td><img src="<?= $product -> image ?>" alt="<?= $product -> name ?>" width="100px"></td>
            </tr>
        <?php endforeach; ?> 
    <?php endforeach; ?>
</tbody>