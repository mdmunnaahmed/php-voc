<?php
session_start();
$_user_id = $_SESSION['id'];
if($_user_id) {
    header("Location: words.php");
}
include_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/animate.css">

    <!-- Icon Link -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">

    <!-- Custom Link -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">

    <title>PHP Vocabulary Libraries</title>

</head>

<body class="body-bg">

    <!-- Register Account Starts -->
    <div class="account-section pt-120 pb-120">
        <div class="container">
            <div class="account-wrapper">
                <h2 class="title mb-5 text-center">Welcome to Munna Tpsi's Vocabularies</h2>

                <div class="d-flex mb-5 justify-content-center">
                    <button id="login" class="btn--md cmn--btn">Login</button=>
                    <button id="register" class="btn btn-info btn--md ms-4">Register</button>
                </div>
                <p class="mb-4 text-danger text-center">
                    <?php
                        $status = $_GET['status'] ?? 0;
                        if ($status) {
                            echo getStatusMessage($status);
                        }
                    ?>
                    
                </p>
                <form action="tasks.php" class="account-form row gy-4" method="POST">
                    <h3 class="mb-4 text-center">Login</h3>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control form--control" placeholder="Enter your Email" name="email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control form--control" placeholder="Enter your Password" name="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="cmn--btn w-100 action" id="submit-btn">Login Account</button>
                        <input type="hidden" id="action" value="login" name="action">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Register Account Ends -->



    <a href="#0" class="scrollToTop active"><i class="las la-chevron-up"></i></a>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>