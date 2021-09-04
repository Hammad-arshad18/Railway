<?php
$conn=mysqli_connect('localhost','root','','railway');
if($conn){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $uemail=$_POST['uemail'];
        $upassword=$_POST['upassword'];
        session_start();


        $login_query="SELECT * FROM `railway_user` WHERE email = '$uemail' AND password = '$upassword'";
        $run_login_query=mysqli_query($conn,$login_query);
        if (mysqli_num_rows($run_login_query) == 1) {
            $_SESSION['username']=$uemail;
            $_SESSION['login']=true;
            while ($login_data=mysqli_fetch_assoc($run_login_query)){
                $_SESSION['id']=$login_data['id'];
            }
            header('location:welcome.php');
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Railway - Login</title>
    <!--All The Attachments -->
    <?php include "attachments.php"; ?>
</head>
<body>
<!--Navbar-->
<?php include 'header.php' ?>

<section class="data">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md data-img-taker">
                <img src="images/login.png" alt="Register" class="img-fluid">
            </div>
            <div class="col-lg-5 col-md-8 align-self-center">
                <form method="post" class="data-form">
                    <h1 class="text-center">Login Form</h1>
                    <label class="form-text" for="uemail">Email</label>
                    <input class="form-control" type="email" name="uemail" id="uemail" required placeholder="Email">
                    <label class="form-text" for="upassword">Password</label>
                    <input class="form-control" type="password" name="upassword" id="upassword" required placeholder="Password">
                    <div class="text-center">
                        <button class="btn btn-success" id="submit_btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<?php include "footer.php"; ?>

<!--Bootstrap JS File-->
<script src="js/Railway_Bootstrap.js"></script>

<!--Jquery-->
<script src="js/jquery.js"></script>
</body>
</html>


