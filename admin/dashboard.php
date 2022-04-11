<?php include('head.php');?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php $s=mysqli_query($conn,"SELECT * from users");
                                        $ccountu = mysqli_num_rows($s);
                                        echo $ccountu;                                
                                        ?></div>
                                    <div>All Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="../admin/userlist.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i> 
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php $n=mysqli_query($conn,"SELECT * from news");
                                      
                                      $ncount = mysqli_num_rows($n);
                                      echo $ncount;                                
                                      ?>

                                    </div>
                                    <div>Published News</div>
                                </div>
                            </div>
                        </div>
                        <a href="../admin/newslist.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php $ad=mysqli_query($conn,"SELECT * from users where role='admin'");
                                      
                                      $adcount = mysqli_num_rows($ad);
                                      echo $adcount;                                
                                      ?>
                                    </div>
                                    <div>Admins</div>
                                </div>
                            </div>
                        </div>
                        <a href="../admin/admins.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
            </div>
            <!-- /.row -->
         
            <!-- /.row -->
       <?php include('footer.php');?>