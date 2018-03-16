<?php
	$png_data = ''; $i = 1 ;
	if(!empty($png_query)) {
		foreach($png_query as $row) {
			$png_data .= '<tr>
							<td>PNG'.$i.'</td>
							<td><a href="'.site_url().$row->img_src.'" target="_blank"> See Image </a></td>
							<td>'.$row->img_name.'</td>
							<td>'.$row->img_width.'px</td>
							<td>'.$row->img_height.'px</td>
							<td>'.$row->img_type.'</td>
							<td> <a href="'.site_url('admin/app/delete_png/').'/'.$row->imgid.'/'.$id.'" class="btn btn-xs btn-danger">Delete</a></td>
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
					<li class="active">Add Background Image</li>					
				</ul>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Upload Background Image Form</header> 
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
							echo form_open_multipart('admin/app/image_upload/'.$id, $attributes); 
						?>
							
					  <div class="form-group col-md-4"> 
							<label class="">Background Image</label>				
							<input type="file" name="userfile" />
					  </div>
					   <div class="col-md-4 form-group"> 
					   		 <label style="width:100%">Image Type</label>	
							 <input name="img_type" value="male" checked="" type="radio"> Male &nbsp;
							 <input name="img_type" value="female" checked="" type="radio"> Female &nbsp;
							 <input name="img_type" value="both" checked="true" type="radio"> Common 
							<?php echo '<div class="r_error">'.form_error('ad_right').'</div>'; ?>
					  </div>
					  <button type="submit" class="btn btn-sm btn-dark">Add Image</button> 
					  <?php echo form_close(); ?>
					</div>
				
				</section>
				<?php if(!empty($png_data)) { ?>
					<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Added Background Image Details</header>
					<div class="panel-body">
						<table class="table table-striped m-b-none">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Image src</th>
									<th>Image Name</th>
									<th>Image Width</th>
									<th>Image Height</th>
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
	