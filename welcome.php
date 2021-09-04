<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'railway');
if (isset($_SESSION['username']) and $_SESSION['login'] == true) {
    $user_id = $_SESSION['id'];
    if ($conn) {
        $get_loginuser_details = "SELECT * FROM `railway_user` WHERE id = '$user_id'";
        $run_loginuser_query = mysqli_query($conn, $get_loginuser_details);
        while ($loginuser_data = mysqli_fetch_assoc($run_loginuser_query)) {
            $get_fname = $loginuser_data['name'];
            $get_email = $loginuser_data['email'];
            $get_phone = $loginuser_data['phone'];
            $get_cnic = $loginuser_data['cnic'];
        }
    }

} else {
    header('location:login.php');
}
if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $from_city = $_POST['from_city'];
        $to_city = $_POST['to_city'];
        $booking_query = "INSERT INTO `railway_booking`(`name`, `email`, `phone`, `cnic`, `from_city`, `to_city`) VALUES ('$get_fname','$get_email','$get_phone','$get_cnic','$from_city','$to_city')";
        mysqli_query($conn,$booking_query);
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
    <title>Welcome - Railway</title>
    <!--All The Attachments -->
    <?php include 'attachments.php'; ?>
</head>
<body>
<!--Navbar-->
<?php include 'header.php' ?>

<section class="book-now">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <form method="post" class="data-form">
                    <h1 class="text-center">Book Now</h1>
                    <label class="form-text" for="uname">Full Name *</label>
                    <input class="form-control" type="text" name="uname" id="uname" <?php echo "value='$get_fname'"; ?> readonly>
                    <label class="form-text" for="uemail">Email *</label>
                    <input class="form-control" type="email" name="uemail"
                           id="uemail" <?php echo "value='$get_email'"; ?> readonly>
                    <label class="form-text" for="uphone">Phone No *</label>
                    <input class="form-control" type="text" name="uphone"
                           id="uphone" <?php echo "value='$get_phone'"; ?> readonly>
                    <label class="form-text" for="ucnic">CNIC *</label>
                    <input class="form-control" type="text" name="ucnic" id="ucnic" <?php echo "value='$get_cnic'"; ?> readonly>
                    <label class="form-text" for="from_city">From *</label>
                    <select class="form-select" aria-label="Default select example" name="from_city">
                        <option selected disabled>From</option>
                        <option value="Sialkot">Sialkot</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                    </select>
                    <label class="form-text" for="to_city">To *</label>
                    <select class="form-select" aria-label="Default select example" name="to_city">
                        <option selected disabled>To</option>
                        <option value="Sialkot">Sialkot</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                    </select>
                    <div class="text-center">
                        <button class="btn btn-success" id="submit_btn">Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!--Footer-->
<?php include "footer.php"; ?>
</body>
</html>
