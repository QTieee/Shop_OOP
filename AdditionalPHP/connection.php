<?php
// Class DatabaseConnection quản lý kết nối đến cơ sở dữ liệu
class DatabaseConnection {
    // Thuộc tính chứa thông tin kết nối đến cơ sở dữ liệu
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    // Constructor để khởi tạo thông tin kết nối
    public function __construct($host, $username, $password, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    // Phương thức để thiết lập kết nối đến cơ sở dữ liệu
    public function connect() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    // Phương thức để đóng kết nối đến cơ sở dữ liệu
    public function closeConnection() {
        mysqli_close($this->conn);
    }

    // Phương thức để trả về kết nối đến cơ sở dữ liệu
    public function getConnection() {
        return $this->conn;
    }
}

// Khởi tạo đối tượng DatabaseConnection với thông tin kết nối
$dbConnection = new DatabaseConnection("localhost", "root", "", "cakeshop");
// Thiết lập kết nối đến cơ sở dữ liệu
$dbConnection->connect();
// Lấy kết nối đến cơ sở dữ liệu
$conn = $dbConnection->getConnection();
?>
