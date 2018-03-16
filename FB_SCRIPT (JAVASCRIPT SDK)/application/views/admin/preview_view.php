<?php
	$preview_img = ''; $i = 1 ;
	if(!empty($app_query)) {
		foreach($app_query as $row) {
			$preview_img = $row->sample_pic;
		}
	}
?>	
	<section id="content">
		<section class="vbox"> 
			<section class="scrollable padder"> 
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
					<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-home"></i> Add New App</a></li>
					<li class="active">Add Preview Image</li>					
				</ul>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">App Preview Image</header> 
					<div class="panel-body"> 
						<?php 
							if(empty($preview_img)) {
								echo '<div class="alert alert-danger"> <strong>Please complere the app details</strong></div>';
							} else {
								echo '<div class=""><img src="'.site_url().$preview_img.'" alt="" class="img-responsive" /></div>';
							}
						?>
					</div>
				
				</section>
			</section> 
		</section>  
	</section> 


	