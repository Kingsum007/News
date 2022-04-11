<?php include('head.php');?>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <form action="save.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">User Name:</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password:</label>
                            <input type="password" name="pass" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="conf_pass">Confirm Password:</label>
                            <input type="password" name="conf_pass" class="form-control">
             
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select name="role" id="role" class="form-control">
                                <option value="0">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="viewer">Viewer</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                        <input type="submit"  name="Save" value="Save" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->
        <?php include('footer.php');?>