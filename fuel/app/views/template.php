<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('font-awesome.min.css'); ?>
	<?php echo Asset::css('style.css'); ?>
	<?php echo Asset::js('jquery.min.js', array(), null, false); ?>
	<script>
		$(document).ready(function () {
		    size_li = $("#myList li").size();
		    x=3;
		    $('#myList li:lt('+x+')').show();
		    $('#loadMore').click(function () {
		        x= (x+1 <= size_li) ? x+1 : size_li;
		        $('#myList li:lt('+x+')').show();
		    });
		    $('#showLess').click(function () {
		        x=(x-1<0) ? 1 : x-1;
		        $('#myList li').not(':lt('+x+')').hide();
		    });
		});
	</script>
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
<!-- header -->
<div class="banner">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.html"><?php echo Asset::img('logo.png', array('class' => 'img-responsive'));?></a>
			</div>
			<div class="header-right">
				<ul>
					<li><a href="#"><i class="fb"> </i></a></li>
					<li><a href="#"><i class="twt"> </i></a></li>
				<li>
				<div class="search2">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
						<input type="submit" value="">
					</form>
				</div></li>
					<div class="clearfix"></div>
				</ul>
					
			</div>
				<div class="clearfix"> </div>
			</div>
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-15">
						<li class="active"><a href="index.html">HOME</a></li>
							<li><a href="about.html" data-hover="ABOUT">ABOUT</a></li>
							<li><a href="photos.html" data-hover="PHOTOS">PHOTOS</a></li>
							<li><a href="404.html" data-hover="ARCHIVES">ARCHIVES</a></li>
							<li><a href="contact.html" data-hover="CONTACT">CONTACT</a></li>
								<div class="clearfix"> </div>
						</ul>
				</div>

						<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 					 
	</div> 
</div>
<!-- header -->

<?php echo $content;?>

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 copy">
				<div class="top1">
					<i class="ham"></i>
				</div>
				<div class="top2">
					<h6>Copyrights © 2015 Graphic</h6>
					<p>All rights reserved</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 copy">
				<div class="top1">
					<i class="men"></i>
				</div>
				<div class="top2">
					<h6>Template by: </h6>
					<p><a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 copy">
				<div class="top1">
					<i class="app"></i>
				</div>
				<div class="top2">
					<h6>Images From: </h6>
					<p><a href="#"> www.wallcoo.net</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 copy">
				<div class="top1">
					<i class="lik"></i>
				</div>
				<div class="top2">
					<h6>Website </h6>
					<p><a href="#"> www.yourblog.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- footer -->
</body>
</html>
