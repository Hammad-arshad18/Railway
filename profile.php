<?php
session_start();
if(!isset($_SESSION['username']) and $_SESSION['login']==false){
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


<!--Footer-->
<?php include "footer.php" ?>
</body>
</html>
