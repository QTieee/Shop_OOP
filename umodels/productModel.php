<?php
// Class CartManager quản lý các hoạt động liên quan đến giỏ hàng
class CartManager {
    // Phương thức tính toán số lượng sản phẩm trong giỏ hàng
    public static function calculateCartItemCount() {
        if(isset($_SESSION['shopping_cart'])) {
            $_SESSION['item_quantity'] = 0;
            foreach($_SESSION['shopping_cart'] as $key => $item) {
                $_SESSION['item_quantity'] += $item['quantity'];
            }
        }
    }
}

// Đoạn code khởi tạo
define('Access', TRUE);

// Include startSession.php để bắt đầu phiên làm việc
include "./AdditionalPHP/startSession.php";

// Include connection.php để kết nối đến cơ sở dữ liệu
include_once 'connection.php';

// Gọi phương thức tính toán số lượng sản phẩm trong giỏ hàng
CartManager::calculateCartItemCount();
?>
