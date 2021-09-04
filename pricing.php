<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing - Railway</title>
    <!--All The Attachments -->
    <?php include 'attachments.php'; ?>
</head>
<body>
<!--Navbar-->
<?php include 'header.php' ?>

<section class="pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Tickets Pricing</h1>
                <table class="table table-striped border">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Pricing</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sialkot</td>
                        <td>Lahore</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Sialkot</td>
                        <td>Karachi</td>
                        <td>1300</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lahore</td>
                        <td>Karachi</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Sialkot</td>
                        <td>Lahore</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Sialkot</td>
                        <td>Karachi</td>
                        <td>1300</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Lahore</td>
                        <td>Karachi</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Sialkot</td>
                        <td>Lahore</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Sialkot</td>
                        <td>Karachi</td>
                        <td>1300</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Lahore</td>
                        <td>Karachi</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Sialkot</td>
                        <td>Lahore</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Sialkot</td>
                        <td>Karachi</td>
                        <td>1300</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Lahore</td>
                        <td>Karachi</td>
                        <td>1000</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<?php include "footer.php"; ?>
</body>
</html>
