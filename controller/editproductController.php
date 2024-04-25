<?php
include_once "../AdditionalPHP/connection.php";
include_once "ProductModel.php";

$productModel = new ProductModel($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $p_name = $_POST['p_name'];
    $p_desc = $_POST['p_desc'];
    $p_price = $_POST['p_price'];
    $existingImage = $_POST['existingImage'];
    $newImage = $_FILES['newImage']['name'];

    // Kiểm tra nếu có hình ảnh mới được chọn
    if ($newImage != '') {
        // Xử lý tải hình ảnh lên máy chủ và cập nhật đường dẫn hình ảnh trong cơ sở dữ liệu
    }

    $productModel->updateProduct($product_id, $p_name, $p_desc, $p_price, $newImage);
}
?>
