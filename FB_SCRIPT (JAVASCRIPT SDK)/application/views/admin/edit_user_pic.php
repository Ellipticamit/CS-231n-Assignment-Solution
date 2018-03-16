<?php
	$user_data = ''; $i = 1; $img_x = $img_y = $img_width = $img_height = $appid = $img_shape =  '';
	if(!empty($user_pic_query)) {
		
		foreach($user_pic_query as $row) {
			$img_x = $row->img_x;
			$img_y = $row->img_y;
			$img_width = $row->img_width;
			$img_height = $row->img_height;
			$appid = $row->appid;
			$img_shape = $row->img_shape;
		}
	}
	$circle_checked = $square_checked = '';
	if($img_shape == 'circle') {
		$circle_checked = 'checked="checked"';
	} else {
		$square_checked = 'checked="checked"';
	}

?>		
	<section id="content">
		<section class="vbox"> 
			<section class="scrollable padder"> 
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
					<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-home"></i> Add New Game</a></li>
					<li><a href="<?php echo site_url('admin/app/add_app_details').'/'.$appid; ?>"><i class="fa fa-home"></i> Add Game Details</a></li> 
					<li class="active">Edit Profile Pic Details</li>						
				</ul>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Edit FB User Pic </header> 
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
					echo form_open('admin/app/edit_user_pic/'.$id, $attributes); 
				?>
							
							<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>X Axis</label> 
								<input class="form-control" placeholder="Image x Position" type="text" name="img_x" value="<?php echo  $img_x;?>"> 
								<?php echo '<div class="r_error">'.form_error('img_x').'</div>'; ?>
							</div> 
							<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Y Axis</label> 
								<input class="form-control" placeholder="Image y Position" type="text" name="img_y" value="<?php echo  $img_y;?>"> 
								<?php echo '<div class="r_error">'.form_error('img_y').'</div>'; ?>
							</div> 
							<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Image Width </label> 
								<input class="form-control" placeholder="100" type="text" name="img_width" value="<?php echo  $img_width;?>"> 
								<?php echo '<div class="r_error">'.form_error('img_width').'</div>'; ?>
							</div>
							<div class="col-md-3 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Image Height </label> 
								<input class="form-control" placeholder="100" type="text" name="img_height" value="<?php echo  $img_height;?>"> 
								<?php echo '<div class="r_error">'.form_error('img_height').'</div>'; ?>
							</div>
							<div class="col-md-12 form-group" style="padding:0px 0px 0px 0px;"> 								
								<label style="width:100%;">Image Shape </label> 								
								<input value="square" type="radio" name="img_shape" <?php if(!empty($square_checked)) echo $square_checked; ?>> Square &nbsp;&nbsp;&nbsp;
								<input value="circle" type="radio" name="img_shape" <?php if(!empty($circle_checked)) echo $circle_checked; ?>> Circle								
								<?php echo '<div class="r_error">'.form_error('img_shape').'</div>'; ?>							
							</div>	
							<!--
							<div class="col-md-6 form-group" style="padding:0px 0px 0px 10px;"> 								
								<label>Image Border (Only for circular shape) </label> 								
								<input class="form-control" type="checkbox" name="img_border" value="yes"> 							
							</div>
							-->	
							<button type="submit" class="btn btn-sm btn-dark">Update</button> 
					</div>
					<?php echo form_close(); ?>
							
					
					</div> 
				</section>
			  </div> 
			</section> 
		</section>  
	</section> 
	