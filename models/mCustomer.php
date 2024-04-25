<?php
include_once "../AdditionalPHP/connection.php";

class Customer {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCustomers() {
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
?>
<!-- done -->
