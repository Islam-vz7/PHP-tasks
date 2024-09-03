<?php

class Store {
    private $name;
    private $image;
    private $description;
    private $products = array();

    public function __construct($name, $image, $description) {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getProducts() {
        return $this->products;
    }
}

?>
