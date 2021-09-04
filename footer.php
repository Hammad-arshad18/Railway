<section class="footer text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="social-part">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube fa-2x"></i></a></li>
                    </ul>
                </div>
                <div class="links-part">
                    <ul class="links">
                        <li><a href="">About</a></li>
                        <li><a href="">Pricing</a></li>
                        <?php
                        if ((isset($_SESSION['username']) and $_SESSION['login'] == true) or (isset($_SESSION['uemail']) and $_SESSION['adminlogin'] == true)) {
                            echo '<li><a href="logout.php">Logout</a></li>';
                        } else {
                            echo '<li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>';
                        }
                        ?>

                    </ul>
                </div>
                <div class="copyright-part">
                    <p>© <?php echo date('Y'); ?> Railway || Hammad Arshad</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Bootstrap JS File-->
<script src="js/Railway_Bootstrap.js"></script>

<!--Jquery-->
<script src="js/jquery.js"></script>

