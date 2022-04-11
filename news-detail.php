
<?php include('partial/header.php');
include "partial/db.php";
$id = $_REQUEST['id'];
$get = $conn->query("SELECT * from news where news_id = $id");
$data = mysqli_fetch_assoc($get);
?>
	<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="post-wrap posts post-single">
						<article class="post">
							<div class="head-post">
								<h2><?php echo $data['title'] ?></h2>
								
								<div class="meta">
								
									<span class="time"> Published on <?php echo $data['happen_date']; ?></span>
									<br>
									<span>Published by: <?php echo $data['user'];?></span>
								</div>
							</div><!-- /.head-post -->
							<div class="body-post">

								<div class="main-post">
									<div class="entry-post">
					
										<img src="images/<?php echo $data['image']; ?>" alt="image">
										<p><?php echo $data['content'];?></p>
									</div><!-- /.entry-post -->
									<div class="sharethis-inline-share-buttons"></div>	
								</div><!-- /.main-post -->
							</div><!-- /.body-post -->
						</article><!-- /.post -->
					</div><!-- /.post-wrap -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>
	<?php include('partial/footer.php'); ?>