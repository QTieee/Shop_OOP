<?php
// Class CartManager quản lý các hoạt động liên quan đến giỏ hàng
class CartManager {
    // Phương thức tính toán số lượng sản phẩm trong giỏ hàng và lưu vào session
    public static function calculateItemQuantity() {
        if (isset($_SESSION['shopping_cart'])) {
            $item_quantity = 0;
            foreach ($_SESSION['shopping_cart'] as $key => $item) {
                $item_quantity += $item['quantity'];
            }
            return $item_quantity;
        }
        return 0;
    }
}

// Include startSession.php để bắt đầu phiên làm việc
include "./AdditionalPHP/startSession.php";

// Gọi phương thức tính toán số lượng sản phẩm trong giỏ hàng của class CartManager
$itemQuantity = CartManager::calculateItemQuantity();
?>
