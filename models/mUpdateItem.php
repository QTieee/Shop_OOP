<?php

include_once "../AdditionalPHP/connection.php";

class mUpdateItem {
    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn'];
    }

    public function updateProduct($product_id, $p_name, $p_desc, $p_price, $final_image) {
        $updateItem = mysqli_query($this->conn, "UPDATE products_test SET 
            product_name='$p_name', 
            product_desc='$p_desc', 
            price=$p_price,
            product_image='$final_image' 
            WHERE p_id=$product_id");

        return $updateItem;
    }
}
?>
