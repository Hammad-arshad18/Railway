<?php
$conn=mysqli_connect('localhost','root','','railway');
if($conn){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $uname=$_POST['uname'];
        $uemail=$_POST['uemail'];
        $upassword=$_POST['upassword'];
        $uphone=$_POST['uphone'];
        $ucnic=$_POST['ucnic'];
        $query_insert = "INSERT INTO `railway_user`(`name`, `email`, `password`, `phone`, `cnic`) VALUES ('$uname','$uemail','$upassword','$uphone','$ucnic')";
        mysqli_query($conn,$query_insert);
        header('location:login.php');
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
    <title>Railway - Register</title>
    <!--All The Attachments -->
    <?php include "attachments.php"; ?>
</head>
<body>
<!--Navbar-->
<?php include 'header.php' ?>

<section class="data">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md data-img-taker align-self-center">
                <img src="images/register.png" alt="Register" class="img-fluid">
            </div>
            <div class="col-lg-5 col-md-8 align-self-center">
                <form method="post" class="data-form">
                    <h1 class="text-center">Registeration Form</h1>
                    <label class="form-text" for="uname">Full Name *</label>
                    <input class="form-control" type="text" name="uname" id="uname" required placeholder="Full Name"
                           title="Enter Full Name">
                    <label class="form-text" for="uemail">Email *</label>
                    <input class="form-control" type="email" name="uemail" id="uemail" required placeholder="Email"
                           title="Enter Valid Email Address">
                    <label class="form-text" for="upassword">Password *</label>
                    <input class="form-control" type="password" name="upassword" id="upassword" required placeholder="Password"
                           title="Enter Password of Length Between 8-24">
                    <label class="form-text" for="uphone">Phone No *</label>
                    <input class="form-control" type="text" name="uphone" id="uphone" required placeholder="Phone No"
                           title="Enter Phone No With/Without Country Code">
                    <label class="form-text" for="ucnic">CNIC *</label>
                    <input class="form-control" type="text" name="ucnic" id="ucnic" required placeholder="CNIC"
                           title="Enter CNIC Without Dashes">
                    <div class="text-center">
                        <button class="btn btn-success" id="submit_btn">Register</button>
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