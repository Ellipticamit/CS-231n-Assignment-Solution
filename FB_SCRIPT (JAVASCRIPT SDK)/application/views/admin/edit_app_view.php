<?php
	$app_name =  $checked = $options = $share_content = $friend_app = $gid = $no_of_text = $photo_app = $no_small_img = ''; 
	if(!empty($app_query)) {
		foreach($app_query as $row) {
			$app_name = $row->app_name;
			$options = $row->options;
			$share_content = $row->share_content;
			$friend_app = $row->friend_app;
			$gid = $row->gid;
			$no_of_text = $row->no_of_text;
			$no_small_img = $row->no_small_img;
			$photo_app = $row->photo_app;
		}
	}
	if($options == 'yes') 	
		$checked = 'checked';
?>
	
	<section id="content">
		<section class="vbox"> 
			<section class="scrollable padder"> 
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
					<li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-home"></i> Add New App</a></li> 	
					<li><a href="<?php echo site_url('admin/app/add_app_details/'.$id); ?>"><i class="fa fa-home"></i> Add App Details</a></li> 	
				    <li class="active">Edit App Details</li>	
				</ul>
				<div class="m-b-md"> 
					<a href="<?php echo site_url('admin/app/add_final_img').'/'.$gid;?>" class="btn btn-s-sm btn-danger" style="margin-bottom: 12px;">
						<i class="fa fa-plus"></i> Background Img
					</a>
					<a href="<?php echo site_url('admin/app/add_small_img').'/'.$gid;?>" class="btn btn-s-sm btn-info" style="margin-bottom: 12px;">
						<i class="fa fa-plus"></i> Small Img
					</a>
					<a href="<?php echo site_url('admin/app/add_text').'/'.$gid;?>" class="btn btn-s-sm btn-warning" style="margin-bottom: 12px;">
						<i class="fa fa-plus"></i> User Name
					</a>
					<a href="<?php echo site_url('admin/app/profile_pic_details').'/'.$gid;?>" class="btn btn-s-md btn-success" style="margin-bottom: 12px;">
						<i class="fa fa-plus"></i> User Pic
					</a>
					
					<?php
						if($friend_app == 'yes') {
							echo '<a href="'.site_url('admin/friend/friend_pic_details').'/'.$gid.'" class="btn btn-s-md b-dark " style="margin-bottom: 12px;">
								<i class="fa fa-plus"></i> Friend Pic
							</a> &nbsp;<a href="'.site_url('admin/friend/friend_text').'/'.$gid.'" class="btn btn-s-md btn-danger" style="margin-bottom: 12px;">
								<i class="fa fa-plus"></i> Friend Name
							</a>';
						}
					?>
					<?php
						if($photo_app == 'yes') {
							echo '<a href="'.site_url('admin/user/user_photo_details').'/'.$gid.'" class="btn btn-s-md btn-danger " style="margin-bottom: 12px;">
								<i class="fa fa-plus"></i> User Photo 
							</a> &nbsp;';
						}
					?>
					<a href="<?php echo site_url('admin/app/random_text').'/'.$gid;?>" class="btn btn-s-md btn-default" style="margin-bottom: 12px;">
						<i class="fa fa-plus"></i> Random Text
					</a>
				</div> 
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Edit App Details Form</header> 
					<div class="panel-body"> 
						<?php	
							if(!empty($errors)) { 
								echo '<div class="alert alert-danger">
									   <strong>'.$errors.'</strong>
									  </div>'; 
							}
							if(!empty($success)) { 
								echo '<div class="alert alert-success">
									   <strong>'.$success.'</strong>
									  </div>'; 
							}
							$attributes = array("role" =>"form");
							echo form_open('admin/app/edit_app_details/'.$id, $attributes); 
						?>
							
						<div class="col-md-12 form-group" style="padding:0px 10px 0px 0px;"> 
							<label>App Name</label> 
							<input class="form-control" placeholder="e.g Enter your name" type="text" name="app_name" value="<?php echo $app_name; ?>"> 
							<?php echo '<div class="r_error">'.form_error('app_name').'</div>'; ?>
					   </div> 
					    
					    <div class="form-group col-md-4" style="padding:0px 10px 0px 0px;"> 
							<label class="">Cover Picture</label>				
							<input id="coverfile" class="filestyle" name="coverfile" type="file">
					   </div>
					   <div class="form-group col-md-4" style="padding:0px 10px 0px 0px;"> 
							<label>Male/Female Options</label>				
							<div class="checkbox" style="margin-top:0px;"> <label> 
							<input type="checkbox" value="yes" name="male_female_options" <?php echo $checked; ?> >
								 Allow Male/Female Options </label> 
							</div>
					   </div>
					   <div class="col-md-2 form-group" style="padding:0px 0px 0px 10px;"> 
							<label>Number of text</label> 
							<input class="form-control" placeholder="1" type="text" name="no_of_text" value="<?php echo $no_of_text; ?>"> 
						</div>
						<div class="col-md-2 form-group" style="padding:0px 0px 0px 10px;"> 
							<label>Small Img number</label> 
							<input class="form-control" placeholder="1" type="text" name="no_small_img" value="<?php echo $no_small_img; ?>"> 
						</div>
					   <div class="col-md-12 form-group" style="padding:0px 10px 0px 0px;"> 
							<label>Share Content</label> 
							<textarea class="form-control parsley-validated" rows="3" name="share_content"><?php echo $share_content; ?></textarea>
							<?php echo '<div class="r_error">'.form_error('share_content').'</div>'; ?>
					   </div>
					</div>
					<footer class="panel-footer bg-white " style="overflow:auto; padding:5px 18px;"> 
						<button type="submit" class="btn btn-sm btn-dark">Update</button> 
					</footer>
							
					<?php echo form_close(); ?>
					
				</section>
			</section> 
		</section>  
	</section> 
	