<?php 

	$app_name = $cover_pic = $app_text = $preview_pic = $gid = $friend_app = $photo_app =  ''; 

	if(!empty($app_query)) {
		foreach($app_query as $row) {
			$app_name = $row->app_name;
			$cover_pic = $row->cover_pic;
			$gid = $row->gid;
			$friend_app = $row->friend_app;
			$photo_app = $row->photo_app;
		}
	}
?>

	<section id="content">
		<section class="vbox"> 
			<section class="scrollable padder"> 
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
					<li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-home"></i> Add New App</a></li> 
					<li class="active">Add App Details</li>					
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
						<i class="fa fa-plus"></i> Profile Pic
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

				<?php if(empty($cover_pic)) { ?>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Add App Data</header>
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
							echo form_open_multipart('admin/app/add_app_details/'.$id, $attributes); 
						?>
					   <div class="col-md-12 form-group" style="padding:0px 10px 0px 0px;"> 
							<label>App Name</label> 
							<input class="form-control" placeholder="e.g Enter your name" type="text" name="app_name" value="<?php echo $app_name; ?>"> 
							<?php echo '<div class="r_error">'.form_error('app_name').'</div>'; ?>
					   </div>
					    
					   <div class="form-group col-md-3" style="padding:0px 10px 0px 0px;"> 
							<label class="">Cover Picture</label>				
							<input id="coverfile" class="filestyle" name="coverfile" type="file">
					   </div>
					   <div class="form-group col-md-3" style="padding:0px 10px 0px 0px;"> 
							<label>Male/Female Options</label>				
							<div class="checkbox" style="margin-top:0px;"> <label> <input type="checkbox" value="yes" name="male_female_options"> Allow  </label> </div>
					   </div>
					   <div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
							<label>Number of text</label> 
							<input class="form-control" placeholder="1" type="text" name="no_of_text" value="1"> 
					   </div> 	
					   <div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
							<label>Number of small img</label> 
							<input class="form-control" placeholder="1" type="text" name="no_small_img" value="1"> 
					   </div>
					   <div class="col-md-12 form-group" style="padding:0px 10px 0px 0px;"> 
							<label>Share/Home Page App Content</label> 
							<textarea class="form-control parsley-validated" rows="2" name="share_content"></textarea>
							<?php echo '<div class="r_error">'.form_error('share_content').'</div>'; ?>
					   </div>
                        <div class="col-md-12 form-group" style="padding:0px 10px 0px 0px;"> 
							<label>Result Page Content</label> 
							<textarea class="form-control parsley-validated" rows="2" name="result_content"></textarea>
							<?php echo '<div class="r_error">'.form_error('result_content').'</div>'; ?>
					   </div>
					</div>

					<footer class="panel-footer bg-white " style="overflow:auto; padding:5px 18px;"> 
						<button type="submit" class="btn btn-sm btn-primary">Save</button>
					</footer>
					<?php echo form_close(); ?>
				</section> 
				<?php } else { ?>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold"> New Game Data</header>

					<div class="panel-body">
						<table class="table table-striped m-b-none">
							<thead>
								<tr>
									<th>S.No</th>
									<th>App Name</th>
									<th>Cover Image</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody> 
								<tr>
									<td>1</td>
									<td><?php echo $row->app_name; ?></td>
									<td><a href="<?php echo site_url().$cover_pic; ?>" target="_blank" > See Image </a></td>
									<td><a href="<?php echo site_url('admin/app/edit_app_details/').'/'.$row->gid; ?>" class="btn btn-xs btn-primary">Edit</a> &nbsp; <a href="<?php echo site_url('admin/preview/create_preview_img').'/'.$row->gid;?>" class="btn btn-xs btn-danger" target="_blank">Create Preview Image</a></td>
								</tr>
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