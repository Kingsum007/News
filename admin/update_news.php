<?php 
require('../partial/db.php');
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $cat = $_POST['cate'];
    $date = $_POST['hdate'];
    $location = $_POST['location'];
    $user = $_POST['user'];
    $image = $_FILES['image']['name'];
    $tmpe = $_FILES['image']['tmp_name'];
    $upd = "update news set title='$title',content='$content',cat='$cat',happen_date='$date',location='$location',user='$user',image='$image' where news_id=$id;";
    $run_up = mysqli_query($conn, $upd);
    if ($run_up) {
        move_uploaded_file($tmpe, "../images/$image");
        header("location:newslist.php");
    }
}