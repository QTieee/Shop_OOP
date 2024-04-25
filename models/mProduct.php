<?php

include_once "../AdditionalPHP/connection.php";

class mProduct
{
    public function updateProduct($product)
    {
        global $conn;

        $product_id = $product->product_id;
        $p_name = $product->product_name;
        $p_desc = $product->product_description;
        $p_price = $product->product_price;
        $final_image = $product->product_image;

        $updateItem = mysqli_query($conn, "UPDATE products_test SET 
            product_name='$p_name', 
            product_description='$p_desc', 
            product_price=$p_price,
            product_image='$final_image' 
            WHERE product_id=$product_id");

        return $updateItem;
    }
}

?>
