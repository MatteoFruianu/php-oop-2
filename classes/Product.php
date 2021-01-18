<?php
    // PRODUCT CLASS

    // parent class - main model

    class Product {
        // properties
         public $product_name;
         public $description;
         public $price;


        // constructs

        public function __construct($product_name, $description, $price) {
            $this->product_name = $product_name;
            $this->description = $description;
            $this->price = $price;
        }

        // methods

        public function printProduct() {
            return $this->product_name . '<br>' . $this->description;
        }
    }