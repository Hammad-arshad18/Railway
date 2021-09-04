<?php
$conn = mysqli_connect('localhost', 'root', '', 'railway');
if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $get_update_data = "SELECT * FROM `railway_post` WHERE id = '$uid'";
    $get_data_query = mysqli_query($conn, $get_update_data);
    while ($data_get = mysqli_fetch_assoc($get_data_query)) {
        $get_topic = $data_get['topic'];
        $get_announcement = $data_get['announcement'];
    }
}else{
    header('location:admin_login.php');
}
if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $topic = $_POST['topic'];
        $announcement = $_POST['announcement'];
        $update_post_query = "UPDATE `railway_post` SET `topic`='$topic',`announcement`='$announcement' WHERE id='$uid'";
        mysqli_query($conn, $update_post_query);
        header('location:admin.php');
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

<?php
$get_data_update = "SELECT * FROM `railway_post` WHERE id=";

?>
?>
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
                <h1>Update Post</h1>
                <form method="post" autocomplete="off">
                    <label for="topic" class="form-text">Topic</label>
                    <input type="text" class="form-control" name="topic" id="topic"
                           required <?php echo "value='$get_topic'"; ?>>
                    <label for="announcement" class="form-text">Announcement</label>
                    <textarea class="form-control" name="announcement" id="announcement" cols="30" rows="5" required></textarea>
                    <div class="post-submit">
                        <button class="btn btn-success btn-lg">Update</button>
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
