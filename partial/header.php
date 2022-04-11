<!DOCTYPE html>
<?php 
require('vendor/autoload.php');
use Carbon\Carbon;
$carbon =new Carbon();
$carbon->timezone('Asia/Kabul');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from www.rollthemes.com/demo/html/goodnews/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2019 11:12:29 GMT -->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>AFG BREAKING NEWS</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap  -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

	<!-- Theme Style -->
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">

	<!-- Colors -->
	<link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
   
	<!-- Animation Style -->
	<link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

	<!-- Google Fonts 
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>-->

	<!-- Favicon and touch icons  -->
	<link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="icon/favicon.png" rel="shortcut icon">

	<!--[if lt IE 9]>
		<script src="javascript/html5shiv.js"></script>
		<script src="javascript/respond.min.js"></script>
	<![endif]-->
	<style>
	.input{
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
	</style>
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e0871e3b784b90012810e4d&product=inline-share-buttons" async="async"></script>
</head>

<body>
   	<!-- Header -->
   	<header id="header" class="header">
	   	<div class="top-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
		              	<div id="logo" class="logo">
							<a href="index.php" rel="home" title="home">
								<img src="images/logo.svg" alt="Good News" />
							</a>
		            	</div>
		            	
		            	<div class="follow-us">
			            	<div class="follow-title">
			            		Follow Us
			            	</div>
			            	<ul class="social-links">
			            		<li class="facebook"><a href="#">Follow us on Facebook</a></li>
			            		<li class="twitter"><a href="#">Follow us on Twitter</a></li>
			            		<li class="google"><a href="#">Follow us on Google</a></li>
	
			            	</ul>
		            	</div>
		            </div><!-- /.col-md-6 -->
		            <div class="col-md-6">
		            	<div class="btn-menu"></div><!-- //mobile menu button -->
		            	<div class="member-area">
						<?php 
							if(!empty($_SESSION["username"]))
							{
								echo "<span class='signup-popup'><a> Welcome! ".$_SESSION['username']."</a></span>";
								echo "<span class='signup-popup'>  <a href='check.php?logout=1'><i class='fa fa-sign-out fa-fw'></i> Logout</a></span>";
							}
							else
							{
								echo '
							<span class="signup-popup"><a href="login.php">Login</a></span>
							<span class="signup-popup"><a href="adduser.php">Sign Up!</a></span>';
						}
							?>
		            	</div>
		            </div><!-- /.col-md-6 -->
	            </div><!-- /.row -->
	         </div><!-- /.container -->
	   	</div><!-- /.top-wrap -->
		<div class="header-wrap">
		 <div class="container">
		    <div class="row">
				<div class="col-md-10">
					<nav id="mainnav" class="mainnav">
						<ul class="menu">
							<li ><a class="active" href="index.php">Home</a>
								</li>
				
							<li><a href="category.php?cat=afghanistan">Afghanistan</a></li>
							<li><a href="category.php?cat=world">World</a></li>
							<li><a href="category.php?cat=politics">Political</a></li>
							<li><a href="category.php?cat=business">Business</a></li>
							<li><a href="category.php?cat=sports">Sports</a></li>
							<li><a href="about.php">About</a></li>
							
						</ul><!-- /.menu -->
					</nav><!-- /nav -->
				</div><!-- /.col-md-9 -->
				<div class="col-md-2">
					<div class="search-wrap">
						<div class="search-icon"></div><!-- //mobile search button -->
						<form action="index.php?" id="searchform" class="search-form" method="POST" role="search">
							<input type="text" id="s" name="key" placeholder="Search" class="search-field">
							<input type="submit" value="&#xf002;" id="searchsubmit" name="search" class="search-submit">
							<a class="search-close" href="#"><i class="fa fa-times-circle"></i></a>
						</form>
					</div><!-- /.search-wrap -->
				</div><!-- /.col-md-3 -->
		    </div><!-- /.row -->
		 </div><!-- /.container -->
		</div><!-- /.header-wrap -->
	</header>
