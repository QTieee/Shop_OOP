<!DOCTYPE html>
<html lang="en-MU">
<head>
    <meta charset="utf-8">
    <title>ABC | Bakery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS File-->
    <link rel="stylesheet" type="text/css" href="Common.css">
    <link rel="stylesheet" type="text/css" href="Account.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
    <!--BOXICONS-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>ABC | Đăng Nhập</title>
</head>

<body>
    <?php
    define('Access', TRUE);
    include "./AdditionalPHP/startSession.php";
    include_once "umodels/connection.php";
    include "umodels/UserAuthentication.php";

    $userAuth = new UserAuthentication($conn);
    $userAuth->authenticateUser();
    ?>

    <?php $page = 'login';?>
    <!--Start Navigation Bar @media 1200px-->
    <?php include './Includes/PcNavBar.php';?>
    <!--End Navigation Bar @media 1200px-->

    <!--Start Background Image-->
    <div class="bg-image-container">
        <div class="bg-image"></div>
    </div>
    <!--End Background Image-->

    <!--Start Login Panel-->
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>Đăng Nhập</h3>
                    <p>Tạo tài khoản để đăng nhập</p>
                </div>
            </div>

            <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="text" name="uname" placeholder="Username" value="<?php echo $userAuth->getUname();?>"/>
                <input type="password" name="password" placeholder="Password"/>
                <?php $userAuth->displayErrorMessage(); ?>
                
                <button>Đăng Nhập</button>
                <p class="message">Chưa có tài khoản? <a href="registration.php">Tạo tài khoản</a></p>
                <br><span class="forget-text"><a href="#a">Quên mật khẩu?</a></span>
                <!-- <p class="or-message"><b>OR</b></p> -->
            </form>
        </div>
    </div>
    <!--End Login Panel-->

</body>
</html>
