<?php

include_once __DIR__ . '/Product.php';

// CATEGORY

// class estesa di Product

class Category extends Product {

    public function setCategory($category) {
        $this->category = $category;
    } 

    public function getCategory() {
        return $this->category;
    }

}