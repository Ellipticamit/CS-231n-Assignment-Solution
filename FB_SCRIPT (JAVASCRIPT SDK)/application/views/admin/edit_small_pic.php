<?php	$img_x = $img_y = $img_width = $img_height = $gender_option =  $appid = $img_type = $male_option = $both_option = $female_option = ''; $i = 1 ;	
//	print_r($small_pic_query);
	if(!empty($small_pic_query)) {
		foreach($small_pic_query as $row) {
			$img_x = $row->img_x;
			$img_y = $row->img_y;
			$img_width = $row->img_width;
			$img_height = $row->img_height;
			$appid = $row->appid;
			$img_type = $row->img_type;
		}
	}

	if($img_type == 'male')
		$male_option = 'checked';
	else if($img_type == 'female')
		$female_option = 'checked';
	else 
		$both_option = 'checked';

?>			
	<section id="content">		
		<section class="vbox"> 			
			<section class="scrollable padder"> 			
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 	
					<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-home"></i> Add New Game</a></li>				
					<li><a href="<?php echo site_url('admin/app/add_app_details/'.$appid); ?>"><i class="fa fa-home"></i> Add Game Details</a></li> 
					<li><a href="<?php echo site_url('admin/app/add_small_img/'.$appid); ?>"><i class="fa fa-home"></i> Add Small Pic Details</a></li>
					<li class="active">Add Small Pic co-ordinate</li>
				</ul>	
				<section class="panel panel-default"> 		
					<header class="panel-heading font-bold">FB User Pic Form</header> 					
						<div class="panel-body"> 		
							<?php					
								if(!empty($error)) { 	
									echo '<div class="alert alert-danger">	
											<strong>'.$error.'</strong>		
										</div>'; 	
								}		
								if(!empty($success)) { 		
									echo '<div class="alert alert-success">			
											<strong>'.$success.'</strong>		
										  </div>';
								 }
								 
								 $attributes = array("role" =>"form");		
								 echo form_open('admin/app/edit_small_pic/'.$id, $attributes);
							?>		
							
								<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 	
									<label>X Axis</label> 					
									<input class="form-control" placeholder="Image x Position" type="text" name="img_x" value="<?php echo $img_x; ?>"> 						
									<?php echo '<div class="r_error">'.form_error('img_x').'</div>'; ?>							
								</div> 							
								<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
									<label>Y Axis</label> 								
									<input class="form-control" placeholder="Image y Position" type="text" name="img_y" value="<?php echo $img_y; ?>"> 								
									<?php echo '<div class="r_error">'.form_error('img_y').'</div>'; ?>							
								</div> 							
								<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 								
									<label>Image Width </label> 								
									<input class="form-control" placeholder="100" type="text" name="img_width" value="<?php echo $img_width; ?>"> 								
									<?php echo '<div class="r_error">'.form_error('img_width').'</div>'; ?>							
								</div>							
								<div class="col-md-3 form-group" style="padding:0px 0px 0px 0px;"> 								
									<label>Image Height </label> 								
									<input class="form-control" placeholder="100" type="text" name="img_height" value="<?php echo $img_height; ?>"> 								
									<?php echo '<div class="r_error">'.form_error('img_height').'</div>'; ?>							
								</div>
								 <div class="form-group col-md-6"> 
							<label class="">Small Image</label>				
							<input type="file" name="userfile" />
					  </div>
					   <div class="col-md-6 form-group"> 
					   		 <label style="width:100%">Image Type</label>	
							 <input name="img_type" value="male" <?php if(!empty($male_option)) echo $male_option; ?> type="radio" > Male &nbsp;
							 <input name="img_type" value="female" <?php if(!empty($female_option)) echo $female_option; ?> type="radio"> Female &nbsp;
							 <input name="img_type" value="both" <?php if(!empty($both_option)) echo $both_option; ?> type="radio"> Both 
							<?php echo '<div class="r_error">'.form_error('ad_right').'</div>'; ?>
					  </div>

								<button type="submit" class="btn btn-sm btn-dark">Add</button> 					
								</div>					
								<?php echo form_close(); ?>																	
							</div> 				
						</section>			 
								</div> 			
								
						</section> 		
					</section>  	
				</section> 	