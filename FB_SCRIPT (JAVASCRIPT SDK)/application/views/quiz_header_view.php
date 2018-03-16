<!DOCTYPE html>

<html>
<head>
<title><?php echo $app_title; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8"/>
<meta property="og:title" content="<?php echo $app_title; ?>" />
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_FRONT_PATH; ?>newstyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_FRONT_PATH; ?>newresponsive.css">
<link rel="shortcut icon" href="<?php echo HTTP_APP_IMG;?>favicon.ico" type="image/x-icon"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ads.lfstmedia.com/getad?site=273227" type="text/javascript"></script>
</head>

<body>

	<div id="fb-root"></div>
	<script type="text/javascript">
	    var fb_settings = {
		    appId: '<?php echo APPID; ?>',
		    cookie     : true,                         
		    xfbml      : true,  
		    version    : 'v2.5' 
		  };
  	</script>
	
<div class="main">
	<div class="header clearfix">
		<div class="container">
			<div class="left-header">
		      <div class="languange visible-sm visible-xs">
		        <ul class="selectlang">
		          <li class="active"><a href="<?php echo site_url(); ?>"><span class="slang"></span> Home <i class="fa fa-caret-down visible-xs visible-sm"></i></a></li>
		          <li><a href="https://www.facebook.com/indiantrollworld/"><span class="slang"></span> Facebook </a></li>
		      	</ul>
		      </div> 
		      	<a href="<?php echo site_url(); ?>" title="Home" class="ann"><div class="logo en"></div></a>	
		    </div>
		    <div class="right-header">
		        <ul class="selectlang clearfix hidden-xs hidden-sm">
		          <li class="active"><a href="<?php echo site_url(); ?>"><span class="slang"></span> Home </a></li>
		          <li><a href="https://www.facebook.com/indiantrollworld/"><span class="slang"></span> Facebook </a></li>
		        </ul>    
		    </div> 
		</div>

	</div>

