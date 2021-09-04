<?php
//session_start();
//?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-md-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Railway <span>A Booking Service</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($_SESSION['uemail']) and $_SESSION['adminlogin']==true){
                        echo '<a class="nav-link" href="admin.php">Dashboard</a>';
                    }else{
                        echo '<a class="nav-link" href="admin_login.php">Admin</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <?php
                if((isset($_SESSION['username']) and $_SESSION['login']==true) or (isset($_SESSION['uemail']) and $_SESSION['adminlogin']==true)){
                    echo '<li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle" id="user"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>';
                }
                else{
                    echo '<li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-alt-slash" id="nouser"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="register.php">Register</a></li>
                    </ul>
                </li>';
                }
                ?>
            </ul>
            <?php
            if(isset($_SESSION['username']) and $_SESSION['login']==true){
                echo '<a class="btn btn-outline-success welcome-btn" href="welcome.php">Book Now</a>';
            }
            ?>
        </div>
    </div>
</nav>

