<?php 
    define('Access', TRUE);

    //SESSION START
    include "./AdditionalPHP/startSession.php";

    //DATABASE CONNECTION  cakeshop
    include_once 'connection.php';

    // Remove button
    if(filter_input(INPUT_GET, 'action') == 'delete'){
        foreach($_SESSION['shopping_cart'] as $key => $product){
            if($product['id'] == filter_input(INPUT_GET, 'product_id')){
                unset($_SESSION['shopping_cart'][$key]);
            }
        }
        $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
        $Q_delete_cartitem = 'DELETE FROM cartitem WHERE productID = '.filter_input(INPUT_GET, 'product_id');
        $run_delete_cartitem = mysqli_query($conn, $Q_delete_cartitem);
    }
?>

