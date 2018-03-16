<?php	$user_data = ''; $i = 1 ;	

?>			
	<section id="content">		
		<section class="vbox"> 			
			<section class="scrollable padder"> 			
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 	
					<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-home"></i> Add New Game</a></li>				
					<li><a href="<?php echo site_url('admin/app/add_app_details/'.$id); ?>"><i class="fa fa-home"></i> Add Game Details</a></li> 
					<li><a href="<?php echo site_url('admin/app/add_small_img/'.$id); ?>"><i class="fa fa-home"></i> Add Small Pic Details</a></li>
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
								 echo form_open('admin/app/small_pic/'.$id, $attributes);
							?>		
							
							
								<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 	
								
									<label>X Axis</label> 					
									<input class="form-control" placeholder="Image x Position" type="text" name="img_x"> 						
									<?php echo '<div class="r_error">'.form_error('img_x').'</div>'; ?>							
								</div> 							
								<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
									<label>Y Axis</label> 								
									<input class="form-control" placeholder="Image y Position" type="text" name="img_y"> 								
									<?php echo '<div class="r_error">'.form_error('img_y').'</div>'; ?>							
								</div> 							
								<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 								
									<label>Image Width </label> 								
									<input class="form-control" placeholder="100" type="text" name="img_width"> 								
									<?php echo '<div class="r_error">'.form_error('img_width').'</div>'; ?>							
								</div>							
								<div class="col-md-3 form-group" style="padding:0px 0px 0px 0px;"> 								
									<label>Image Height </label> 								
									<input class="form-control" placeholder="100" type="text" name="img_height"> 								
									<?php echo '<div class="r_error">'.form_error('img_height').'</div>'; ?>							
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