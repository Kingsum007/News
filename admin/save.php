<?php
$conn = mysqli_connect('localhost', 'root', '', 'news1');
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $avatar = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    $upload = "INSERT INTO users(username,email,userpass,image)VALUES('$username','$email','$password','$avatar')";
    
    $run = mysqli_query($conn, $upload);
    if ($run) {
        move_uploaded_file($tmp, "../images/$avatar");
        $_SESSION["username"] = $username;
        header('location:../index.php');
    }
}
if (isset($_POST['Save'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $conf_pass = $_POST['conf_pass'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $avatar = $_FILES['avatar']['name'];
    $tmp = $_FILES['avatar']['tmp_name'];
    $upload = "INSERT INTO users(username,email,role,userpass,image)VALUES('$username','$email','$role','$password','$avatar')";
 
        $run = mysqli_query($conn, $upload);
  
 
    if ($run) {
        move_uploaded_file($tmp, "../images/$avatar");
        $_SESSION["username"] = $username;
        header('location:../index.php');
    }
}
