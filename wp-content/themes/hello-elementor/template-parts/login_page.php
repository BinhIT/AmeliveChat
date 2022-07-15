<?php
/*
 Template Name: Login Page
 */
// get_header();
$args = array(
    'redirect' => site_url($_SERVER['REQUEST_URI']),
    'form_id' => 'dangnhap', //Để dành viết CSS
    'label_username' => __('Tên đăng nhập '),
    'label_password' => __('Mật khẩu'),
    'label_remember' => __('Ghi nhớ đăng nhập'),
    'label_log_in' => __(' Đăng nhập'),
);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập quản trị</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo site_url() ?>\wp-content\plugins\AME_Live\src\vendor\fontawesome-free\css\all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo site_url() ?>\wp-content\plugins\AME_Live\src\css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #858796;
            text-align: left;
            /* background-color: #0058b0; */
        }

        #user_login,
        #user_pass {
            font-size: 1.5rem;
            border-radius: 10rem;
            padding: 0.4rem 1rem;
        }

        label {
            display: block;
            padding-left: 8%;
        }

        #wp-submit {
            font-size: 1.8rem;
            border-radius: 10rem;
            padding: 0.75rem 1rem;
            display: block;
            width: 100%;
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df;
        }

        @keyframes float {
            0% {
                opacity: 0.1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
               opacity: 1;
            }
        }

        #logo_ame {
            margin: 1% auto;
            width: 50%;
            background-color: #4e73df;
            transform: translatey(0px);
            animation: float 6s ease-in-out;

        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center " id="logo_ame">
            <img src="https://amedigital.vn/wp-content/uploads/2022/02/Logo-AME-Digital-Text-White.webp">
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <?php
                $login  = (isset($_GET['login'])) ? $_GET['login'] : 0;
                if ($login === "failed") {
                    echo '<p><strong>ERROR:</strong> Sai username hoặc mật khẩu.</p>';
                } elseif ($login === "empty") {
                    echo '<p><strong>ERROR:</strong> Username và mật khẩu không thể bỏ trống.</p>';
                } elseif ($login === "false") {
                    echo '<p><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
                }
                ?>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <!-- <div class="text-center bg-primary" style='height:6 0px'>
                                   <img style='padding-top:5%' height="50px" width="50%"  src="https://amedigital.vn/wp-content/uploads/2022/02/Logo-AME-Digital-Text-White.webp">

                                    </div> -->
                                    <?php
                                    $login  = (isset($_GET['login'])) ? $_GET['login'] : 0;
                                    if ($login === "failed") {
                                        echo '<p><strong>ERROR:</strong> Sai username hoặc mật khẩu.</p>';
                                    } elseif ($login === "empty") {
                                        echo '<p><strong>ERROR:</strong> Username và mật khẩu không thể bỏ trống.</p>';
                                    } elseif ($login === "false") {
                                        echo '<p><strong>ERROR:</strong> Bạn đã thoát ra.</p>';
                                    }
                                    ?>
                                    <?php

                                    wp_login_form($args);
                                    ?>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo site_url() ?>\wp-content\plugins\AME_Live\src\vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url() ?>\wp-content\plugins\AME_Live\src\vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo site_url() ?>\wp-content\plugins\AME_Live\src\vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo site_url() ?>\wp-content\plugins\AME_Live\src\js/sb-admin-2.min.js"></script>

</body>

</html>