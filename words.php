<?php
session_start();
$_user_id = $_SESSION['id'];
if (!$_user_id) {
    header("Location: index.php");
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


    <div class="sidebar">
        <h4 class="mb-4">Menu</h4>
        <ul class="menu d-flex flex-column">
            <li><a href="#0" class="menu-item" data-target="words">All Words</a></li>
            <li><a href="#0" class="menu-item" data-target="wordform">Add New Word</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <!-- Section Starts -->
    <section class="">
        <div class="container">
            <h2 class="title mb-5 py-4 bg-white text-center">My Vocabularies</h2>
            <div class="voc-wrapper helement" id="words">
                <div class="d-flex justify-content-between border-bottom pb-4">
                    <select name="" id="" class="form-select form--control w-auto">
                        <option value="">All Words</option>
                        <option value="">My Fav Words</option>
                    </select>
                    <form action="" class="search-form">
                        <input type="text" class="form-control form--control" placeholder="Search Your Words">
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Words</th>
                            <th>Meaning</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apple</td>
                            <td>A for Apple</td>
                        </tr>
                        <tr>
                            <td>Apple</td>
                            <td>A for Apple</td>
                        </tr>
                        <tr>
                            <td>Apple</td>
                            <td>A for Apple</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="add-form-wrapper helement" id="wordform" style="display: none;">
                <h3 class="title">Add New Vocabulary</h3>
                <form action="tasks.php" class="add-form" method="POST">
                    <div class="form-group mb-4">
                        <label for="word" class="form-label">Word</label>
                        <input name="word" id="word" type="text" class="form-control form--control" placeholder="Add word here">
                    </div>
                    <div class="form-group">
                        <textarea name="meaning" id="meaning" class="form-control form--control" placeholder="Add Description Here"></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <input type="hidden" name="action" value="addword">
                        <button type="submit" class="btn btn-primary" name="Add Word">Add New Word</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Section Ends -->



    <a href="#0" class="scrollToTop active"><i class="las la-chevron-up"></i></a>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>