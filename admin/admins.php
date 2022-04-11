<?php include('head.php'); 
?>
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="table-responsive">
            <table class="table table-condensed table-primary table-responsive">
                <thead>
                    <tr>
                        <th>N#</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Actions</th>
                </thead>
                <tbody>
                    <?php 
                    require('../partial/db.php');
                    $news = mysqli_query($conn,"SELECT * from users where role='admin' order by user_id desc");
                
						  $count = mysqli_num_rows($news);
						  $pagination = new yidas\data\Pagination([
							  'totalCount' => $count,
							  'perPage' =>25,
						  ]);
						$get = mysqli_query($conn,"select * from users where role='admin' order by user_id desc LIMIT {$pagination->offset}, {$pagination->limit}");
                    while($row = mysqli_fetch_assoc($get))
                    {
                        echo "
                        <tr>
                            <td>".$row['user_id']."</td>
                            <td>".$row['username']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['role']."</td>
                            <td> <img src='../images/".$row['image']."' width='100px' alt='".$row['username']."'></td>
                            <td><span><a href='edit_user.php?id=".$row['user_id']."' class='btn btn-primary btn-circle'><i class='fa fa-edit'></i></a></span>
                            <span><a href='delete_user.php?id=".$row['user_id']."' class='btn btn-danger btn-circle '><i class='fa fa-trash-o'></i></a></span>
                            </td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="9"><?php
                        use yidas\widgets\Pagination as pager;
                        echo  pager::widget([
								'pagination' => $pagination
							]);  ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php include('footer.php');?>