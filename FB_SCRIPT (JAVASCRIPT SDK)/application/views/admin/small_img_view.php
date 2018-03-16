<?php
	$png_data = $siids = $appids = ''; $i = 1 ;
	if(!empty($png_query)) {
		foreach($png_query as $row) {
			$siids = $row->siid;
			$appids = $row->appid;
			$png_data .= '<tr>
							<td>PNG'.$i.'</td>
							<td><a href="'.site_url().$row->small_src.'" target="_blank"> See Image </a></td>
							<td>'.$row->img_x.'</td>
							<td>'.$row->img_y.'</td>
							<td>'.$row->img_width.'</td>
							<td>'.$row->img_height.'</td>
							<td>'.$row->img_type.'</td>
							<td> <a href="'.site_url('admin/app/edit_small_pic/').'/'.$row->siid.'" class="btn btn-xs btn-primary">Edit</a>
								<a href="'.site_url('admin/app/delete_small_png/').'/'.$row->siid.'_'.$id.'" class="btn btn-xs btn-danger">Delete</a></td>
						  </tr>';;
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
					<li class="active">Add Small Image</li>					
				</ul>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Upload Small Image 
						
					</header> 
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
							echo form_open_multipart('admin/app/small_img_upload/'.$id, $attributes); 
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
					 <div class="form-group col-md-6"> 
							<label class="">Small Image</label>				
							<input type="file" name="userfile" />
					  </div>
					   <div class="col-md-6 form-group"> 
					   		 <label style="width:100%">Image Type</label>	
							 <input name="img_type" value="male" checked="" type="radio"> Male &nbsp;
							 <input name="img_type" value="female" checked="" type="radio"> Female &nbsp;
							 <input name="img_type" value="both" checked="true" type="radio"> Both 
							<?php echo '<div class="r_error">'.form_error('ad_right').'</div>'; ?>
					  </div>

					  <button type="submit" class="btn btn-sm btn-dark">Add Image</button> 
					  <?php echo form_close(); ?>
					</div>
				
				</section>
				<?php if(!empty($png_data)) { ?>
					<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Added Small Pic Details</header>
					<div class="panel-body">
						<table class="table table-striped m-b-none">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Image src</th>
									<th>X axis</th>
									<th>y axis</th>
									<th>Width</th>
									<th>height</th>
									<th>Image Type</th>				
									<th>Action</th>
								</tr>
							</thead>
							<tbody> 
								<?php echo $png_data; ?>
							</tbody> 
						</table>
					</div>
					<footer class="panel-footer bg-white " style="overflow:auto; padding:5px 18px;"> 
					</footer>
				</section> 
				
				<?php } ?>
			</section> 
		</section>  
	</section> 
	