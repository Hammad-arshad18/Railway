<?php
session_start();
if (!isset($_SESSION['username']) and $_SESSION['login'] == false) {
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Railway - Profile</title>
    <?php include "attachments.php"; ?>
</head>
<body>
<!--Header/Navbar-->
<?php include "header.php"; ?>

<div class="text-center py-3">
    <div class="jumbotron">
        <h1 class="display-4">Welcome To Profile Page!</h1>
        <p class="lead">The Page is Under Development. It'll be Live Soon</p>
        <hr class="my-4">
        <p>Sorry For inconvenience. We'll Soon Live This Page. Follow us on Github <a
                    href="https://github.com/Hammad-arshad18" target="_blank">
                Hammad Arshad</a></p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="index.php" role="button">Go To Home Page</a>
        </p>
    </div>
</div>
<!--Footer-->
<?php include "footer.php" ?>
</body>
</html>
