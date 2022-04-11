<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'news');
if (isset($_POST['login'])) {
    $username = $_POST['log'];
    $password = $_POST['password'];
    $get = "SELECT * from users where username='$username' and userpass ='$password'";
    $run = mysqli_query($conn, $get);
    $type = mysqli_fetch_assoc($run);
    $count = mysqli_num_rows($run);
    if ($count == 1) {
        if ($type['role'] == 'admin') {
            $_SESSION["username"] = $username;
            $_SESSION["isadmin"] = true;
            header('location:admin/dashboard.php');
        } else {
            $_SESSION["isadmin"] = false;
            $_SESSION["username"] = $username;
            header('location:index.php');
        }
    } else {
        echo "<script>alert('login Failed');</script>";
        header('location:login.php');
    }
}
if (isset($_GET['logout'])) {
    unset($_SESSION["username"]);
    session_destroy();
    header("location:login.php");
}
