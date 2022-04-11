<?php
include('../partial/db.php');
if (isset($_POST['publish'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $cat = $_POST['cate'];
    $date = $_POST['hdate'];
    $location = $_POST['location'];
    $user = $_POST['user'];
    $image = $_FILES['image']['name'];
    $tmpe = $_FILES['image']['tmp_name'];
    $up = "INSERT INTO news(title,content,cat,happen_date,location,user,image)VALUES ('$title','$content','$cat','$date','$location','$user','$image');";
    $dat = mysqli_query($conn, $up);
    if ($dat) {
        move_uploaded_file($tmpe, "../images/$image");
        header("location:dashboard.php");
    }
}


