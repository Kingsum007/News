<?php 
require('../partial/db.php');
$id = $_REQUEST['id'];
$delete = mysqli_query($conn,"DELETE from users where user_id = $id");
if($delete)
{
    header('location:userlist.php');
}
?>