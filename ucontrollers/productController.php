<?php
// Class ProductController để quản lý các hoạt động liên quan đến sản phẩm
class ProductController {

    // Phương thức để hiển thị số lượng sản phẩm trong giỏ hàng
    public function displayCartItemCount() {
        include_once 'numOfItemsInCart.php';
    }

}

// Khởi tạo đối tượng ProductController
$productController = new ProductController();

// Gọi phương thức để tính toán số lượng sản phẩm trong giỏ hàng
$productController->calculateCartItemCount();

// Trang đích cho việc thêm sản phẩm vào giỏ hàng
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action == 'add') {
    // Gọi phương thức để xử lý việc thêm sản phẩm vào giỏ hàng
    $productController->addToCart();
}

// Gọi phương thức để hiển thị số lượng sản phẩm trong giỏ hàng
$productController->displayCartItemCount();

// Gọi phương thức để hiển thị giao diện sản phẩm
$productController->displayProductView();
?>
