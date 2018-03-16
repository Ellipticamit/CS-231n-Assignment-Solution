<!DOCTYPE html>

<html>

<head>

<title><?php echo WEBTITLE; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8"/>
<meta property="og:title" content="<?php echo WEBTITLE; ?>" />

<meta property="og:type" content="website" />
<meta name="author" content="<?php echo site_url(); ?>" />
<meta property="og:description" content="your perfect destination for awesome quizs" />
<meta property="og:image" content="<?php echo HTTP_APP_IMG.'splash_screen.png'; ?>" />
<meta property="og:image:type" content="image/png" /> 
<meta property="og:image:width" content="800" /> 
<meta property="og:image:height" content="420" />
<meta property="og:url" content="<?php echo site_url(); ?>>" />
<meta property="fb:admins" content="<?php echo ADMINID; ?>" />
<meta property="fb:app_id" content="<?php echo APPID; ?>" />

<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_FRONT_PATH; ?>newstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_FRONT_PATH; ?>newresponsive.css">
<link rel="shortcut icon" href="<?php echo HTTP_APP_IMG;?>favicon.ico" type="image/x-icon"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script></head>

<body>

	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit=function(){
			FB.init({appId:'<?php echo APPID; ?>',
			xfbml:true,
			version:'v2.3'});
		};(function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(d.getElementById(id)){return;
		}js=d.createElement(s);
		 js.id=id;js.src="https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js,fjs);
		}(document,'script','facebook-jssdk'));
	</script>

<div class="main">
	<div class="header clearfix">
		<div class="container">
			<div class="left-header">
		      <div class="languange visible-sm visible-xs">
		        <ul class="selectlang">
		          <li class="active"><a href="<?php echo site_url(); ?>"><span class="slang"></span> Home <i class="fa fa-caret-down visible-xs visible-sm"></i></a></li>
		          <li><a href="https://www.facebook.com/indiantrollworld/"><span class="slang"></span> Facebook </a></li>
		          <!--<li><a href="#"><span class="slang"></span> Contact </a></li>-->
		      	</ul>
		      </div> 
		      	<a href="<?php echo site_url(); ?>" title="Home" class="ann"><div class="logo en"></div></a>	
		    </div>
		    <div class="right-header">
		        <ul class="selectlang clearfix hidden-xs hidden-sm">
		          <li class="active"><a href="<?php echo site_url(); ?>"><span class="slang"></span> Home </a></li>
		          <li><a href="https://www.facebook.com/indiantrollworld/"><span class="slang"></span> Facebook </a></li>
		          <!--<li><a href="#"><span class="slang "></span> Contact </a></li>-->
		        </ul>    
		    </div> 
		</div>

	</div>

	

		