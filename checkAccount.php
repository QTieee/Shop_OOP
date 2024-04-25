<?php
// Class quản lý quyền truy cập và điều hướng người dùng
class AccessManager {
    // Phương thức kiểm tra quyền truy cập và điều hướng người dùng
    public function checkAccessAndRedirect() {
        include "./AdditionalPHP/startSession.php";

        if (isset($_SESSION['uname'])) {
            define('Access', TRUE);
            if ($_SESSION['isAdmin'] == 1) {
                $this->redirectToAdminPanel();
            } else {
                $this->redirectToUserAccount();
            }
        } else {
            $this->redirectToLogin();
        }
    }

    // Phương thức chuyển hướng người dùng đến trang quản trị admin
    private function redirectToAdminPanel() {
        include "admin.php";
        exit(); // Dừng thực thi các lệnh tiếp theo sau khi chuyển hướng
    }

    // Phương thức chuyển hướng người dùng đến trang tài khoản người dùng
    private function redirectToUserAccount() {
        include "userAccount.php";
        exit(); // Dừng thực thi các lệnh tiếp theo sau khi chuyển hướng
    }

    // Phương thức chuyển hướng người dùng đến trang đăng nhập
    private function redirectToLogin() {
        include "login.php";
        exit(); // Dừng thực thi các lệnh tiếp theo sau khi chuyển hướng
    }
}

// Khởi tạo đối tượng AccessManager
$accessManager = new AccessManager();

// Kiểm tra quyền truy cập và điều hướng người dùng
$accessManager->checkAccessAndRedirect();
?>
