<?php include "./AdditionalPHP/checkAccess.php"; ?>

<?php 

    if(!isset($_SESSION))
    {
        session_start();
    }
    
    if(isset($_SESSION['uname'])){
        $href = 'checkAccount.php';
        $icon = 'bx bxs-user-circle';
        $cartHref = 'cart.php';
    } else {
        $href = 'login.php';
        $icon = 'bx bx-user-circle';
        $cartHref = 'login.php';
    }
?>

<header class="<?php if($page == 'index' || $page == 'products'){echo 'indexNav';}?> main-header-media1200">
    <nav class="nav-media1200 main-nav-media1200">

        <h1 class="business-name-media1200"><a href="index.php" class="animate__animated animate__backInDown"><img src="https://abcbakery.co/wp-content/themes/abc-bakery/images/logo.png.webp" alt="" class="logo"></a></h1>

        <ul class="animate__animated animate__backInDown">
            <li><a href="index.php" class="<?php if($page == 'index'){echo 'active';}?>">Trang chủ</a></li>
            <li><a href="products.php" class="<?php if($page == 'products'){echo 'active';}?>">Sản phẩm</a></li>
            <li><a href="makeyourcake.php" class="<?php if($page == 'makeyourcake'){echo 'active';}?>">Đặt bánh</a></li>
            <li><a href="about.php" class="<?php if($page == 'about'){echo 'active';}?>">Thương hiệu</a></li>
            <li><a href="contact.php" class="<?php if($page == 'contact'){echo 'active';}?>">Liên hệ</a></li>
            <li><a href="<?php echo $cartHref;?>" class="<?php if($page == 'cart'){echo 'active';}?>"><i class="bx bx-cart nav__cart"></i></a>
            <li><a href="<?php echo $href;?>" class="<?php if($page == 'login' || $page == 'checkaccount'){echo 'active';}?> user-button"><i class="<?php echo $icon;?>"></i></a></li>
        </ul>
    </nav>
</header>