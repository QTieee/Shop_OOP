<?php
// Class NumOfItemsInCartController để quản lý các hoạt động liên quan đến số lượng sản phẩm trong giỏ hàng
class NumOfItemsInCartController {
    // Phương thức để tính toán số lượng sản phẩm từ Model và gán vào session
    public function calculateAndSetItemQuantity() {
        include "numOfItemsInCartModel.php"; // Liên kết với Model
        $item_quantity = calculateItemQuantity(); // Gọi hàm tính toán số lượng sản phẩm từ Model
        $_SESSION['item_quantity'] = $item_quantity; // Gán số lượng sản phẩm vào session
    }

    // Phương thức để hiển thị view
    public function displayNumOfItemsInCartView() {
        include "numOfItemsInCartView.php"; // Hiển thị view
    }
}

// Khởi tạo đối tượng NumOfItemsInCartController
$numOfItemsInCartController = new NumOfItemsInCartController();

// Gọi phương thức để tính toán số lượng sản phẩm từ Model và gán vào session
$numOfItemsInCartController->calculateAndSetItemQuantity();

// Gọi phương thức để hiển thị view
$numOfItemsInCartController->displayNumOfItemsInCartView();
?>
