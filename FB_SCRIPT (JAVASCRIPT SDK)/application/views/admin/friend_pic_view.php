<?php	$user_data = ''; $i = 1 ;	
	if(!empty($friend_pic_query)) {		
		foreach($friend_pic_query as $row) {		
			$user_data .= '<tr>						
								<td>Friend Pic'.$i.'</td>	
								<td>'.$row->img_x.'</td>		
								<td>'.$row->img_y.'</td>	
								<td>'.$row->img_width.'px</td>		
								<td>'.$row->img_height.'px</td>	
								<td>'.$row->img_shape.'</td>
								<td><a href="'.site_url('admin/friend/edit_friend_pic/').'/'.$row->fid.'" class="btn btn-xs btn-primary">Edit</a> &nbsp; <a href="'.site_url('admin/friend/delete_friend_pic/').'/'.$row->fid.'_'.$id.'" class="btn btn-xs btn-danger">Delete</a></td>		
								</tr>';			
								$i++;		
		}	
	}
?>			
	<section id="content">		
		<section class="vbox"> 			
			<section class="scrollable padder"> 			
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 	
					<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-home"></i> Add New App</a></li>				
					<li><a href="<?php echo site_url('admin/app/add_app_details/'.$id); ?>"><i class="fa fa-home"></i> Add App Details</a></li> 		
					<li class="active">Add Friend Profile Pic Details</li>
				</ul>	
				<section class="panel panel-default"> 		
					<header class="panel-heading font-bold">Friend FB Pic Details</header> 					
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
								 echo form_open('admin/friend/friend_pic_details/'.$id, $attributes);
							?>		
							
								<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 	
									<label>X Axis</label> 					
									<input class="form-control" placeholder="Image x Position" type="text" name="img_x"> 						
									<?php echo '<div class="r_error">'.form_error('img_x').'</div>'; ?>							
								</div> 							
								<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
									<label>Y Axis</label> 								
									<input class="form-control" placeholder="Image y Position" type="text" name="img_y"> 								
									<?php echo '<div class="r_error">'.form_error('img_y').'</div>'; ?>							
								</div> 							
								<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 								
									<label>Image Width </label> 								
									<input class="form-control" placeholder="100" type="text" name="img_width"> 								
									<?php echo '<div class="r_error">'.form_error('img_width').'</div>'; ?>							
								</div>							
								<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 								
									<label>Image Height </label> 								
									<input class="form-control" placeholder="100" type="text" name="img_height"> 								
									<?php echo '<div class="r_error">'.form_error('img_height').'</div>'; ?>							
								</div>
								<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 								
									<label style="width:100%;">Image Shape </label> 								
									<input value="square" type="radio" name="img_shape" checked="checked"> Square &nbsp;&nbsp;&nbsp;
									<input value="circle" type="radio" name="img_shape"> Circle								
									<?php echo '<div class="r_error">'.form_error('img_shape').'</div>'; ?>							
								</div>	
								<div class="col-md-4 form-group" style="padding:20px 0px 0px 0px;"> 								
									<button type="submit" class="btn btn-sm btn-dark">Add</button> 							
								</div>	
								<!--
								<div class="col-md-6 form-group" style="padding:0px 0px 0px 10px;"> 								
									<label>Image Border (Only for circular shape) </label> 								
									<input class="form-control" type="checkbox" name="img_border" value="yes"> 							
								</div>	
								-->					
												
								</div>					
								<?php echo form_close(); ?>																	
							</div> 				
						</section>				
						<?php if(!empty($user_data)) { ?>					
							<section class="panel panel-default"> 					
								<header class="panel-heading font-bold">Added Friend Profile Pic Details</header>					
								<div class="panel-body">						
									<table class="table table-striped m-b-none">							
										<thead>								
											<tr>									
												<th>S.No</th>									
												<th>Img X </th>									
												<th>Img Y</th>									
												<th>Img Width</th>									
												<th>Img Height</th>
												<th>Img Shape</th>																	
												<th>Action</th>								
											</tr>							
										</thead>							
										<tbody> 								
											<?php echo $user_data; ?>							
										</tbody> 						
									</table>					
								</div>					
								<footer class="panel-footer bg-white " style="overflow:auto; padding:5px 18px;"> 					
								</footer>				
							</section> 								
							<?php } ?>			 
								</div> 			
								
						</section> 		
					</section>  	
				</section> 	