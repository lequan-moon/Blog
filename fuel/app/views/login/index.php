<!DOCTYPE html>
<html>
<head>
	<title>Shit Coder</title>
		<meta charset="utf-8">
		<?php echo Asset::css("login.css");?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
    <?php endif; ?>
    <?php if (Session::get_flash('error')): ?>
    			<div class="alert alert-danger">
    				<strong>Error</strong>
    				<p>
    				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
    				</p>
    			</div>
    <?php endif; ?>
				 <!-----start-main---->
				<div class="login-form">
						<h1>Sign In</h1>
				<form method="POST">
					<li>
						<input type="text" class="text" placeholder="User Name" name="username"><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" placeholder="Password" name="password"><a href="#" class=" icon lock"></a>
					</li>
					
					 <div class ="forgot">
						<input type="submit" value="Sign In" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
</body>
</html>