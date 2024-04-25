<?php
// Class để quản lý các hoạt động liên quan đến session
class SessionManager {
    // Phương thức để bắt đầu hoặc khởi động phiên làm việc
    public function startSession() {
        session_start();
    }

    // Phương thức để xóa tất cả các biến trong session và hủy phiên làm việc
    public function destroySession() {
        session_unset();
        session_destroy();
    }

    // Phương thức để chuyển hướng đến trang index.php
    public function redirectToIndex() {
        header("Location: index.php");
        exit(); // Dừng thực thi các lệnh tiếp theo sau khi chuyển hướng
    }
}

// Khởi tạo đối tượng SessionManager
$sessionManager = new SessionManager();

// Bắt đầu hoặc khởi động phiên làm việc
$sessionManager->startSession();

// Xóa tất cả các biến trong session và hủy phiên làm việc
$sessionManager->destroySession();

// Chuyển hướng đến trang index.php
$sessionManager->redirectToIndex();
?>
