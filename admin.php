<?php
session_start();
if (!isset($_SERVER['uemail']) and $_SESSION['adminlogin'] == false) {
    header('location:admin_login.php');
}
$conn = mysqli_connect('localhost', 'root', '', 'railway');
if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $topic = $_POST['topic'];
        $announcement = $_POST['announcement'];
        $create_post_query = "INSERT INTO `railway_post`(`topic`, `announcement`) VALUES ('$topic','$announcement')";
        mysqli_query($conn, $create_post_query);
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete_post_query = "DELETE FROM `railway_post` WHERE id = '$id'";
        mysqli_query($conn, $delete_post_query);
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
    <title>Railway - Admin</title>
    <?php include 'attachments.php'; ?>
</head>
<body>
<!--Navbar-->
<?php include 'header.php' ?>

<!--Create Post-->
<section class="create-post">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="post-image">
                    <img src="images/post.png" alt="Post" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <h1>Create Post</h1>
                <form action="admin.php" method="post" autocomplete="off">
                    <label for="topic" class="form-text">Topic</label>
                    <input type="text" class="form-control" name="topic" id="topic" required>
                    <label for="announcement" class="form-text">Announcement</label>
                    <textarea class="form-control" name="announcement" id="announcement" cols="30" rows="5"
                              required></textarea>
                    <div class="post-submit">
                        <button class="btn btn-success btn-lg">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!--Modify Posts-->
<section class="modify-posts">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="text-center">Announcements Modification</h3>
                <div class="table-responsive-xxl">
                    <table class="table table-bordered border-success shadow-sm">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Topic</th>
                            <th scope="col">Post</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sno = 1;
                        $get_post_query = "SELECT * FROM `railway_post`";
                        $get_post_run_query = mysqli_query($conn, $get_post_query);
                        while ($post_data = mysqli_fetch_assoc($get_post_run_query)) {
                            echo '  <tr class="text-center">
                        <td>' . $sno . '</td>
                        <td>' . $post_data["topic"] . '</td>
                        <td>' . $post_data["announcement"] . '</td>
                        <td>
                            <a class="btn btn-danger bg-gradient" href="admin.php?id=' . $post_data['id'] . '">Delete</a>
                        </td>
                        <td>
                            <a href="update.php?uid=' . $post_data['id'] . '" class="btn btn-success bg-gradient">Update</a>
                        </td>
                    </tr>';
                            $sno++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Footer-->
<?php include "footer.php"; ?>
</body>
</html>
