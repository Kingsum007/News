<?php 
require('../partial/db.php');
$news_id = $_REQUEST['news_id'];
$delete = mysqli_query($conn,"DELETE from news where news_id = $news_id");
if($delete)
{
    header('location:newslist.php');
}
?>