<?php

include_once __DIR__ . '/Product.php'; //per imporare la classe di origine

// classe estesa di Product

class Producer extends Product {
    public $producer;

    public function __construct($product_name, $description, $price, $producer)
    {
        parent::__construct($product_name, $description, $price);

        $this->producer = $producer;
    }

    public function printProducer() {
        return $this->producer;
    }
}