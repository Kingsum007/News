<?php include('head.php');?>
            <div class="row">
                <form action="" method="post">
                    <label for="cat_title">Category Title</label>
                    <input type="text" name="cat_title" id="cat_title" class="form-control">
                    <button type="submit" name="save" class="btn btn-primary btn-block" style="margin-top:10px;">Save</button>
                </form>
            </div>
        </div>

<?php
include('footer.php');
$conn = mysqli_connect("localhost","root","","news1");
if(isset($_POST['save']))
{
    $title = $_POST['cat_title'];
    
    if(mysqli_query($conn,"INSERT INTO categories(cat_title)VALUES('$title')"))
    {
        header("location:dashboard.php");
    }
}
?>