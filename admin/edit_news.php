<?php include('head.php');
$news_id = $_REQUEST['news_id'];
$query = "SELECT * from news where news_id = $news_id";
$run = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($run);
?>
<div class="row">
    <div class="col-lg-12 col-md-6">
        <form action="update_news.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">News Title</label>
                <input type="text" name="title" value="<?php echo $data['title']; ?>" class="form-control">
                <input type="hidden" name="id" value="<?php echo $data['news_id']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Details</label>
                <textarea name="content" cols="30" rows="10"><?php echo $data['content']; ?></textarea>
            </div>
            <select name="cate" class="form-control">
                <option value="0">SELECT Category</option>
                <?php
                $cat = mysqli_query($conn, "SELECT * from categories");
                while ($row = mysqli_fetch_assoc($cat)) {
                    echo "<option value=" . $row['cat_title'] . ">" . $row['cat_title'] . "</option>";
                }
                ?>
            </select>
            <div class="form-group">
                <label for="">Date and Time</label>
                <input type="datetime-local" name="hdate" value="<?php echo $data['happen_date']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Location</label>
                <input type="text" name="location" value="<?php echo $data['location']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Edited By</label>
                <input type="text" name="user" value="<?php echo $_SESSION['username']; ?>" readonly class="form-control">
            </div>
            <div class="form-group">
               <button name="update" class="btn btn-primary">Publish</button>
            </div>
        </form>
    </div>

</div>
</div>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="../js/tinymce/tinymce.min.js"></script>
<script src="../js/tinymce/jquery.tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>
</body>

</html>