<?php

include "./AdditionalPHP/startSession.php";

class UserAuthentication {
    private $conn;
    private $uname;
    private $password;
    private $errCriteria;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->uname = "";
        $this->password = "";
        $this->errCriteria = "";
    }

    public function authenticateUser() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ((empty($_POST['uname'])) || (empty($_POST['password']))) {
                $this->errCriteria = "Sai tài khoản hoặc mật khẩu!";
            } else {
                $this->uname = $this->test_input($_POST['uname']);
                $this->password = $this->test_input($_POST['password']);

                $sql = "SELECT * FROM user WHERE uname='$this->uname'";
                $result = mysqli_query($this->conn, $sql);

                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);

                    if (password_verify($this->password, $row['pass'])) {
                        include "./AdditionalPHP/startSession.php";

                        $_SESSION['uname'] = $row['uname'];
                        $_SESSION['isAdmin'] = $row['isAdmin'];

                        header('Location:checkAccount.php');
                    } else {
                        $this->errCriteria = "Sai tài khoản hoặc mật khẩu!";
                    }
                } else {
                    $this->errCriteria = "Sai tài khoản hoặc mật khẩu!";
                }
            }
        }
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function displayErrorMessage() {
        if ($this->errCriteria != "") {
            echo "<span class='Password-Error'>$this->errCriteria <br><br></span>";
        }
    }

    public function getUname() {
        return $this->uname;
    }
}
?>
