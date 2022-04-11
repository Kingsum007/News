
<?php 
session_start();
require ('vendor/autoload.php');
use yidas\data\Pagination;
use yidas\widgets\Pagination as pager;
include('partial/db.php');
$query = "SELECT * from news";
include('partial/header.php');?>
	<!-- Main -->
	<section id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="featured-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="content-left">
						<?php 
						  $run_query = mysqli_query($conn,$query);
						  $count = mysqli_num_rows($run_query);
						  $pagination = new yidas\data\Pagination([
							  'totalCount' => $count,
							  'perPage' =>2,
						  ]);
						$get = mysqli_query($conn,"select * from news order by news_id desc LIMIT {$pagination->offset}, {$pagination->limit}");
						while($row = mysqli_fetch_assoc($get))
						{
							echo '
						<article class="post">
								<div class="thumb">
									<a href="news-detail.php?id='.$row['news_id'].'"><img src="images/'.$row['image'].'" alt="img"></a>
								</div>
								<div class="cat">
									<a href="#">Mustreads</a>
								</div>
								<h3><a href="news-detail.php?id='.$row['news_id'].'">'.$row['title'].'</a></h3>
								<p class="excerpt-entry">
								'.mb_strimwidth($row["content"],0,250,'...').'
								</p>
								<div class="post-meta">
									<span class="author">By <a href="#">'.$row['user'].'</a></span><span class="author"><a>'.$carbon->parse($row['happen_date'])->diffForHumans().'</a></span>
									
								</div>
								
							</article>';}
							echo  pager::widget([
								'pagination' => $pagination
							]); 
							?>
							<?php
							if(isset($_POST['search']))
							{
								$key = $$_POST['key'];
							echo'<div class="content-left">';
						
						  $run_query = mysqli_query($conn,$query);
						  $count = mysqli_num_rows($run_query);
						  $pagination = new yidas\data\Pagination([
							  'totalCount' => $count,
							  'perPage' =>2,
						  ]);
						$get = mysqli_query($conn,"select * from news where title or content like '%".$key."%' order by news_id desc LIMIT {$pagination->offset}, {$pagination->limit}");
						while($row = mysqli_fetch_assoc($get))
						{
							echo '
						<article class="post">
								<div class="thumb">
									<a href="news-detail.php?id='.$row['news_id'].'"><img src="images/'.$row['image'].'" alt="img"></a>
								</div>
								<div class="cat">
									<a href="#">Mustreads</a>
								</div>
								<h3><a href="#">'.$row['title'].'</a></h3>
								<p class="excerpt-entry">
								'.mb_strimwidth($row["content"],0,250,'...').'
								</p>
								<div class="post-meta">
									<span class="author">By <a href="#">'.$row['user'].'</a></span><span class="author"><a>'.$carbon->parse($row['happen_date'])->diffForHumans().'</a></span>
									
								</div>
								
							</article>';}
							echo  pager::widget([
								'pagination' => $pagination
							]);
						
						} 
							?><!--  /.post -->
						</div><!-- /.content-left -->
						<div class="content-right">
						<?php 
						$afg = mysqli_query($conn,"SELECT * from news where cat='Afghanistan' order by news_id desc limit 1");
						while($af = mysqli_fetch_assoc($afg))
						{
							echo '
							<article class="post">
								<div class="thumb">
									<a href="news-detail.php?id='.$af['news_id'].'"><img src="images/'.$af['image'].'" alt="img"></a>
								</div>
								<div class="cat">
									<a href="#">'.$af['cat'].'</a>
								</div>
								<h3><a href="news-detail.php?id='.$af['news_id'].'">'.mb_strimwidth($af["content"],0,128,'...').'</a></h3>
							
								
							</article>';}?><!--  /.post -->
							<?php 
							$sport = mysqli_query($conn,"SELECT * from news where cat='Sports' order by news_id desc limit 1");
							while($sp = mysqli_fetch_assoc($sport))
							{
								echo '
							<article class="post">
								<div class="thumb">
									<a href="news-detail.php?id='.$sp['news_id'].'"><img src="images/'.$sp['image'].'" alt="img"></a>
								</div>
								<div class="cat">
									<a href="#">'.$sp['cat'].'</a>
								</div>
								<h3><a href="news-detail.php?id='.$sp['news_id'].'">'.$sp['title'].'</a></h3>
							
							</article>
							';}?>
								<?php 
							$sport = mysqli_query($conn,"SELECT * from news where cat='World' order by news_id desc limit 1");
							while($sp = mysqli_fetch_assoc($sport))
							{
								echo '
							<article class="post">
								<div class="thumb">
									<a href="news-detail.php?id='.$sp['news_id'].'"><img src="images/'.$sp['image'].'" alt="img"></a>
								</div>
								<div class="cat">
									<a href="#">'.$sp['cat'].'</a>
								</div>
								<h3><a href="news-detail.php?id='.$sp['news_id'].'">'.$sp['title'].'</a></h3>
								
							</article>
							';}?>
							<!--  /.post -->
						</div><!-- /.content-right -->
					</div><!-- /.featured-posts -->
				
					
				
				</div><!-- /.col-md-8 -->
				<div class="col-md-4">
					<div class="sidebar-widget-1">
						<div class="widget widget-recent gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
							<h5 class="widget-title">Recent Posts</h5>
							<ul>
								<?php
								$recent =  mysqli_query($conn,"SELECT * from news order by happen_date desc limit 3");
								while($re = mysqli_fetch_assoc($recent))
								{
							echo'	<li>
									<div class="thumb">
										<a href="news-detail.php?id='.$re['news_id'].'"><img src="images/'.$re['image'].'" alt="img"></a>
									</div>
									<div class="content">
										<h3><a href="news-detail.php?id='.$re['news_id'].'">'.mb_strimwidth($re["content"],0,75,'...').'</a></h3>
										<div class="date">'.$carbon->parse($re['happen_date'])->diffForHumans().'</div>
									</div>
								</li>
								';}?>
							</ul>
					</div><!-- /.sidebar -->
				</div><!-- /.col-md-4 -->
				
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

 <?php include('partial/footer.php');?>
