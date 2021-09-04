<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'railway');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Railway</title>
    <!--All The Attachments -->
    <?php include 'attachments.php'; ?>
</head>
<body>
<!--Navbar-->
<?php include 'header.php' ?>

<!--Main Background Image-->
<section class="main-background">
    <div class="color-dull"></div>
    <div class="main-background-text text-center">
        <h1 class="">Pakistan Railway</h1>
    </div>
</section>


<!--Carousal Slider-->
<section class="carousal-slider-images" id="services">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 text-center align-self-center shadow">
                <h1 class="text-center">Announcements</h1>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $carousal_num = 0;
                        if ($conn) {
                            $announcements_query = "SELECT * FROM `railway_post`";
                            $run_query_announcement = mysqli_query($conn, $announcements_query);
                            while ($announcements = mysqli_fetch_assoc($run_query_announcement)) {
                                if ($carousal_num == 0) {
                                    echo '<div class="carousel-item active">
                            <div class="details-services">
                            <h5>' . $announcements["topic"] . '</h5>
                                <p>' . $announcements["announcement"] . '</p>
                            </div>
                        </div>';
                                    $carousal_num++;
                                } else {
                                    echo '<div class="carousel-item">
                            <div class="details-services">
                            <h5>' . $announcements["topic"] . '</h5>
                                <p>' . $announcements["announcement"] . '</p>
                            </div>
                        </div>';
                                }
                            }
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                        <span class="le" aria-hidden="true">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                        <span class="ri" aria-hidden="true">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Popular-->
<section class="popular">
    <div class="container">
        <div class="row justify-content-center pop-head">
            <div class="col-sm-4 col-6 text-center">
                <h4>POPULAR DESTINATIONS</h4>
            </div>
        </div>
        <div class="row justify-content-center pop-body">
            <div class="col-md-3 col-8 shadow">
                <div class="popular-icon text-center">
                    <img src="images/karachi.jpg" alt="Karachi" class="img-fluid">
                </div>
                <div class="popular-details">
                    <p>Karachi is the largest city in Pakistan and the twelfth-largest city in the world. It is the
                        capital of the Pakistani province of Sindh. Ranked as a beta-global city, it is Pakistan's
                        premier industrial and financial centre.</p>
                </div>
                <div class="popular-btn text-center">
                    <a class="btn btn-outline-success">Pricing</a>
                </div>
            </div>
            <div class="col-md-3 col-8 shadow">
                <div class="popular-icon text-center">
                    <img src="images/lahore.jpg" alt="Lahore" class="img-fluid">
                </div>
                <div class="popular-details">
                    <p>Lahore is the capital of the Pakistani province of Punjab and is the country's 2nd largest city
                        after Karachi, as well as the 26th largest city in the world. Lahore is one of Pakistan's
                        wealthiest cities.</p>
                </div>
                <div class="popular-btn text-center">
                    <a class="btn btn-outline-success">Pricing</a>
                </div>
            </div>
            <div class="col-md-3 col-8 shadow">
                <div class="popular-icon text-center">
                    <img src="images/islamabad.jpg" alt="Islamabad" class="img-fluid">
                </div>
                <div class="popular-details">
                    <p>Islamabad is the capital city of Pakistan, and is administered by the Pakistani federal
                        government as part of the Islamabad Capital Territory. It is the ninth-largest city in
                        Pakistan.</p>
                </div>
                <div class="popular-btn text-center">
                    <a class="btn btn-outline-success">Pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--PHP Contact Us-->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'railway');
if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $detail = $_POST['detail'];
        $contatc_query = "INSERT INTO `railway_contact`(`email`, `name`, `details`) VALUES ('$email','$name','$detail')";
        mysqli_query($conn, $contatc_query);
    }
}
?>
<!--Contact Us-->
<section class="contact-us">
    <div class="container">
        <div class="contact-text text-center">
            <h1>Contact Us</h1>
        </div>
        <div class="row">
            <div class="col-md">
                <form method="post">
                    <label for="email" class="form-text">Email *</label>
                    <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                    <label for="name" class="form-text">Name *</label>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                    <label for="topic" class="form-text">Details *</label>
                    <textarea name="detail" class="form-control" id="detail" cols="30" rows="5"
                              placeholder="Description"></textarea>
                    <div class="submit-btn">
                        <button class="btn btn-success bg-gradient btn-lg">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md text-center align-self-center hide-part">
                <div class="contact-image">
                    <img src="images/contact.png" alt="Contact" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<!--Maps-->
<section class="map-frame">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215397.8688217059!2d74.40231047269468!3d32.483610998215475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea5674db6cfd%3A0xa8d03983946d4744!2sSialkot%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1630311615907!5m2!1sen!2s"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>


<!--Footer-->
<?php include "footer.php"; ?>

</body>
</html>
