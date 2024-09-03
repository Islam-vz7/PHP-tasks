<?php
require_once 'input.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $store->getName(); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="store-header">
        <h1><?php echo $store->getName(); ?></h1>
        <img src="<?php echo $store->getImage(); ?>" alt="Store Image">
        <p><?php echo $store->getDescription(); ?></p>
    </div>

    <div class="products">
        <?php foreach ($store->getProducts() as $product): ?>
            <div class="product">
                <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getTitle(); ?>">
                <div class="product-info">
                    <h2><?php echo $product->getTitle(); ?></h2>
                    <p>£<?php echo $product->getPrice(); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
