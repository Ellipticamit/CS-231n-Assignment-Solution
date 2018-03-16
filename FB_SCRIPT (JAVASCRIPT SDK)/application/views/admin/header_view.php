<!DOCTYPE html>

<html lang="en" class="app">

<head> 

	<meta charset="utf-8" /> 

	<title>Admin panel</title> 

	<meta name="description" content="app, web app, responsive, admin dashboard" /> 

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

	<link rel="stylesheet" href="<?php echo HTTP_CSS_PATH_ADMIN; ?>font.css" type="text/css" /> 

	<link rel="stylesheet" href="<?php echo HTTP_CSS_PATH_ADMIN;?>app.v1.css" type="text/css" />

	<style type="text/css">

		.panel .table td, .panel .table th {

			padding: 6px 6px;

		}

	</style>

</head>

<body class=""> 

	<section class="vbox"> 

		<header class="bg-dark dk header navbar navbar-fixed-top-xs"> 

			<div class="navbar-header aside-md"> 

				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a> 

				<a href="#" class="navbar-brand" data-toggle="fullscreen">

					<img src="<?php echo site_url('src');?>/admin.jpg" class="m-r-sm">Fb App

				</a> 

				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a> 

			</div> 

			 <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user"> 

				<li class="dropdown"> 

					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> 

						<img src="<?php echo site_url('src');?>/admin.jpg"> </span> Admin 

						<b class="caret"></b> 

					</a> 

					<ul class="dropdown-menu animated fadeInRight">

						<li> 

						<a href="<?php echo site_url(''); ?>" target="_blank" >Visit Site</a> 

						</li> 

						<li> 

						<a href="<?php echo site_url('admin/login/logout'); ?>" >Logout</a> 

						</li>

					</ul> 

				</li> 

			</ul> 

		</header>	

		<section> 

			<section class="hbox stretch"> 

				<!-- .aside --> 

				<aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav"> <section class="vbox"> 				

					<section class="w-f scrollable"> 

						<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333"> <!-- nav --> 

						<nav class="nav-primary hidden-xs"> 

							<ul class="nav"> 

						<!--		<li class="<?php if(!empty($edit_user)) echo $edit_user; if(!empty($add_user)) echo $add_user; ?>"> 

									<a href="<?php echo site_url('admin'); ?>" class="<?php if(!empty($edit_user)) echo $edit_user;?> "> 

										<i class="fa fa-dashboard icon"> 

											<b class="bg-danger"></b> 

										</i> 

										<span class="pull-right"> 

											<i class="fa fa-angle-down text"></i> 

											<i class="fa fa-angle-up text-active"></i> 

										</span> 

										<span>Admin User</span> 

									</a> 

									<ul class="nav lt"> 

										<li <?php if(!empty($edit_user)) echo 'class="'.$edit_user.'"';?> > 

											<a href="<?php echo site_url('admin'); ?>" class="active"> 

											<i class="fa fa-angle-right"></i> 

											<span>All Admin User</span> 

											</a> 

										</li> 

										<li <?php if(!empty($add_user)) echo 'class="'.$add_user.'"';?> > 

											<a href="<?php echo site_url('admin/home/add_user'); ?>" class="active"> 

											<i class="fa fa-angle-right"></i> 

											<span>Add User</span> 

											</a> 

										</li>

									</ul> 

								</li> -->

								<li <?php if(!empty($add_game)) echo 'class="'.$add_game.'"';?> > 

									<a href="<?php echo site_url('admin/'); ?>" > 

										<i class="fa fa-columns icon"> 

											<b class="bg-warning"></b> 

										</i> 

										<span>Add New App</span> 

									</a> 

								</li> 

								<li class="<?php if(!empty($manage_game)) echo $manage_game; ?>"> 

									<a href="#uikit" > 

										<i class="fa fa-flask icon"> 

											<b class="bg-success"></b> 

										</i> 

										<span class="pull-right">

											<i class="fa fa-angle-down text"></i> 

											<i class="fa fa-angle-up text-active"></i>

										</span> 

										<span>Manage App</span> 

									</a> 

									<ul class="nav lt"> 

										<li class="<?php if(!empty($manage_game)) echo $manage_game; ?>"> 

											<a href="<?php echo site_url('admin/app/manage_app'); ?>"> 

												<i class="fa fa-angle-right"></i> 

												<span>All App</span> 

											</a> 

										</li> 

										    

									</ul> 

								</li> 

								<li class="<?php if(!empty($edit_ads)) echo $edit_ads; ?>"> 

									<a href="<?php echo site_url('admin/ads'); ?>" class="<?php if(!empty($all_ads)) echo $all_ads;?> "> 

										<i class="fa fa-dashboard icon"> 

											<b class="bg-danger"></b> 

										</i> 

										<span class="pull-right"> 

											<i class="fa fa-angle-down text"></i> 

											<i class="fa fa-angle-up text-active"></i> 

										</span> 

										<span>Manage Ads</span> 

									</a> 

								   <ul class="nav lt"> 

									<li <?php if(!empty($edit_ads)) echo 'class="'.$edit_ads.'"';?> > 

										<a href="<?php echo site_url('admin/ads/'); ?>" class="active"> 

										<i class="fa fa-angle-right"></i> 

										<span>Edit Ads</span> 

										</a> 

									</li>

								  </ul> 

								</li>

							</ul> 

					</nav> 

					<!-- / nav --> 

			</div> 

			</section> 

			<footer class="footer lt hidden-xs b-t b-dark"> 

				<a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> 

					<i class="fa fa-angle-left text"></i> 

					<i class="fa fa-angle-right text-active"></i> 

				</a> 

				<div class="btn-group hidden-nav-xs">  </div> 

			</footer> 

		</section> 

	</aside>					