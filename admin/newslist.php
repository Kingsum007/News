<?php include('head.php'); 
?>
<div class="row">
    <div class="col-lg-12 col-md-6">
        <div class="table-responsive">
            <table class="table table-condensed table-primary table-responsive">
                <thead>
                    <tr>
                        <th>N#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Happen Date</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Written</th>
                        <th>Actions</th>
                </thead>
                <tbody>
                    <?php 
                    require('../partial/db.php');
                    $news = mysqli_query($conn,"SELECT * from news order by news_id desc");
                
						  $count = mysqli_num_rows($news);
						  $pagination = new yidas\data\Pagination([
							  'totalCount' => $count,
							  'perPage' =>25,
						  ]);
						$get = mysqli_query($conn,"select * from news order by news_id desc LIMIT {$pagination->offset}, {$pagination->limit}");
                    while($row = mysqli_fetch_assoc($get))
                    {
                        echo "
                        <tr>
                            <td>".$row['news_id']."</td>
                            <td>".$row['title']."</td>
                            <td>".mb_strimwidth($row['content'],0,64,'...')."</td>
                            <td>".$row['cat']."</td>
                            <td>".$row['happen_date']."</td>
                            <td>".$row['location']."</td>
                            <td> <img src='../images/".$row['image']."' width='100px' alt='".$row['title']."'></td>
                            <td>".$row['user']."</td>
                            <td><span><a href='edit_news.php?news_id=".$row['news_id']."' class='btn btn-primary btn-circle'><i class='fa fa-edit'></i></a></span>
                            <span><a href='delete_news.php?news_id=".$row['news_id']."' class='btn btn-danger btn-circle'><i class='fa fa-trash-o'></i></a></span>
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