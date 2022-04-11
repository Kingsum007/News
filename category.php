
<?php include('partial/header.php');
$cat = $_REQUEST['cat'];
require ('vendor/autoload.php');
use yidas\data\Pagination;
use yidas\widgets\Pagination as pager;
$conn = mysqli_connect('localhost','root','','news');
$sql = "select * from news where cat='$cat'";
$data = mysqli_query($conn,$sql);
$count = mysqli_num_rows($data);
$pagination = new yidas\data\Pagination([
	'totalCount' => $count,
	'perPage' =>2,
]);
$get = mysqli_query($conn,"select * from news where cat='$cat'  order by news_id desc LIMIT {$pagination->offset}, {$pagination->limit}");
?>
	<!-- Main -->

					
	<section id="main" class="category-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php 
				while($row = mysqli_fetch_assoc($get))
				{
				echo '
					<div class="post-wrap">
					<article class="post">
							<div class="thumb">
								<a href="news-detail.php?id='.$row['news_id'].'"><img src="images/'.$row['image'].'" alt="img"></a>
							</div>
						<div class="content">
								<div class="cat">
									<a href="">'.$row['cat'].'</a>
								</div>
								<h3><a href="news-detail.php?id='.$row['news_id'].'">'.$row['title'].'</a></h3>
								<p class="excerpt-entry">I think your best bet would be to start or join a startup. Thats been a reliable way to get rich for hundreds of years.</p>
							
							</div>
						</article>
						<!--  /.post -->
						<!--  /.post -->
					 </div>
					 ';
						}
						echo  pager::widget([
							'pagination' => $pagination
						]);

	 						?>
			
					 
					 <!-- /.social-media-posts -->
	 			</div><!-- /.col-md-8 -->
			
	 		</div><!-- /.row -->
	 	</div><!-- /.container -->
	 </section>
	 						

	<?php include('partial/footer.php'); ?>