<?php

class Product
{
    public $product_id;
    public $product_name;
    public $product_description;
    public $product_price;
    public $product_image;

    public function __construct($product_id, $product_name, $product_description, $product_price, $product_image)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->product_price = $product_price;
        $this->product_image = $product_image;
    }
}

?>
