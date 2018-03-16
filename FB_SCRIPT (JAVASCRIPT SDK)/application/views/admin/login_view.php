<!DOCTYPE html>
<html lang="en" class="bg-dark">
	<head> 
		<meta charset="utf-8" /> 
		<title>Admin Panel | Login</title> 
		<meta name="description" content="app, fb app, responsive, admin dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
		<link rel="stylesheet" href="<?php echo HTTP_CSS_PATH_ADMIN;?>font.css" type="text/css" /> 
		<link rel="stylesheet" href="<?php echo HTTP_CSS_PATH_ADMIN;?>app.v1.css" type="text/css" /> 
	</head>
<body class=""> 
	<section id="content" class="m-t-lg wrapper-md animated fadeInUp"> 
		<div class="container aside-xxl"> 
			<a class="navbar-brand block" href="index.html">Admin Panel</a> 
			<section class="panel panel-default bg-white m-t-lg"> 
				<header class="panel-heading text-center"> 
					<strong>Sign in</strong> 
				</header> 
				<?php	
					if(!empty($error)) { 
						echo '<div class="alert alert-danger">
							   <strong>'.$error.'</strong> 
							  </div>'; }
					$attributes = array("class" =>"panel-body wrapper-lg");
					echo form_open('admin/login/', $attributes); 
				?>
					<div class="form-group"> 
						<label class="control-label">Username</label> 
						<input type="text" name="username" placeholder="username" class="form-control input-lg"> 
					<?php echo '<div class="r_error">'.form_error('username').'</div>'; ?>
					</div> 
					<div class="form-group"> 
						<label class="control-label">Password</label> 
						<input type="password" name="password" placeholder="password" class="form-control input-lg"> 
					<?php echo '<div class="r_error">'.form_error('password').'</div>'; ?>
					</div>  
					<button type="submit" class="btn btn-primary">Sign in</button> 
					<div class="line line-dashed"></div>
				<?php echo form_close(); ?>
			</section> 
		</div> 
	</section> <!-- footer --> 
	<footer id="footer"> 
		<div class="text-center padder"> 
			<p> <small>FB APP Panel<br>&copy; 2015</small> </p>
		</div> 
	</footer> 
	<script src="<?php echo HTTP_JS_PATH_ADMIN;?>app.v1.js"></script> 
	<script src="<?php echo HTTP_JS_PATH_ADMIN;?>app.plugin.js"></script>
</body>
</html>