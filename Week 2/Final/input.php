<?php
include 'product.php';
include 'store.php';


$store = new Store("Al-Madinah Store", "assets/store.png", "Welcome to our store. We offer a variety of awesome products.");


$product11 = new Product("Logitech Mouse", "assets/product11.jpg", 150);
$store->addProduct($product11);

$product12 = new Product("Smart Watch", "assets/product12.jpg", 300);
$store->addProduct($product12);

$product13 = new Product("Xiaomi Smart Phone", "assets/product13.jpg", 670);
$store->addProduct($product13);

//comment
?>