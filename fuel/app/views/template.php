<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo(isset($description) ? $description :'A coder\'s blog, a coder\'s life')?>">
    <meta name="keywords" content="<?php echo(!empty($keywords) ? $keywords : 'Blog, slice of life, tutorial, technical support, code, database');?>">
    <meta name="author" content="A Coder">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('font-awesome.min.css'); ?>
	<?php echo Asset::css('style.css'); ?>
	<?php echo Asset::css('poststyle.css'); ?>
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
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-41959509-3', 'auto');
      ga('send', 'pageview');
    
    </script>
	<style>
/* 		body { margin: 40px; } */
	</style>
</head>
<body>
<!-- header -->
<div class="banner">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="blog"><?php echo Asset::img('logo.png', array('class' => 'img-responsive'));?></a>
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
						<li class="active"><?php echo Html::anchor('blog', 'Blog');?></li>
							<li><?php //echo Html::anchor('admin', 'Admin');?></li>
<!-- 							<li><a href="photos.html" data-hover="PHOTOS">PHOTOS</a></li> -->
<!-- 							<li><a href="404.html" data-hover="ARCHIVES">ARCHIVES</a></li> -->
<!-- 							<li><a href="contact.html" data-hover="CONTACT">CONTACT</a></li> -->
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
<div class="content">
<?php echo $content;?>
</div>
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
					<i class="lik"></i>
				</div>
				<div class="top2">
					<h6>Shitty coder </h6>
					<p><a href="#">shittycoder</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- footer -->
</body>
</html>
