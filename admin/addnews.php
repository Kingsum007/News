<?php include('head.php'); ?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <form action="save_news.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">News Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Details</label>
                            <textarea name="content"  cols="30" rows="10"></textarea>
                        </div>
                        <select name="cate"  class="form-control">
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
                            <input type="datetime-local" name="hdate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Written By</label>
                            <input type="text" name="user" value="<?php echo $_SESSION['username']; ?>" readonly class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-info">RESET</button>
                            <input type="submit" name="publish" class="btn btn-primary" value="Publish">
                        </div>
                    </form>
                </div>
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