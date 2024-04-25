<?php
include_once "../AdditionalPHP/connection.php";

$product_id = $_POST['p_id'];
$p_name = $_POST['p_name'];
$p_desc = $_POST['p_desc'];
$p_price = $_POST['p_price'];
$category = $_POST['p_cat_id'];

if (isset($_FILES['newImage'])) {
    $location = "./uploads/";
    $img = $_FILES['newImage']['name'];
    $tmp = $_FILES['newImage']['tmp_name'];
    $dir = '../uploads/';
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');
    $image = rand(1000, 1000000) . "." . $ext;
    $final_image = $location . $image;
    if (in_array($ext, $valid_extensions)) {
        $path = $dir . $image;
        move_uploaded_file($tmp, $path);
    }
} else {
    $final_image = $_POST['existingImage'];
}

// Định nghĩa hằng số UPLOAD_PATH
define('UPLOAD_PATH', $dir);

$updateItem = mysqli_query($conn, "UPDATE products_test SET 
    p_name='$p_name', 
    p_desc='$p_desc', 
    p_price=$p_price,
    p_cat_id=$category,
    p_img='$final_image' 
    WHERE p_id=$product_id");

if ($updateItem) {
    echo "true";
} else {
    echo mysqli_error($conn);
}
?>