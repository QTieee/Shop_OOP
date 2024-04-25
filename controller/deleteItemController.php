<?php

include_once "../AdditionalPHP/connection.php";

class ProductDeleter {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function deleteProduct($productId) {
        $query = "DELETE FROM products_test WHERE p_id=?";
        $statement = $this->conn->prepare($query);
        $statement->bind_param('i', $productId);
        $result = $statement->execute();

        if ($result) {
            echo "Product Item Deleted";
        } else {
            echo "Not able to delete";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['record'])) {
    $productId = $_POST['record'];

    $productDeleter = new ProductDeleter($conn);
    $productDeleter->deleteProduct($productId);
} else {
    echo "Invalid request";
}
?>
<!-- ĐÃ XONG KHÔNG SỬA CODE -->
