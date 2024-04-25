<?php
class editproductModel{
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getProductById($id) {
        $query = "SELECT * FROM products_test WHERE p_id='$id'";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateProduct($id, $name, $desc, $price, $image) {
        // Viết code xử lý cập nhật sản phẩm vào cơ sở dữ liệu ở đây
    }
}
?>
