<?php
	$size = $font = $color = $capson = $text_x = $text_y = $length = $appid = $app_text = $options = $appid = '';
	if(!empty($text_query)) {
		foreach($text_query as $row) {
			$size = $row->size;
			$color = $row->color;
			$font = $row->font;
			$length = $row->length;
			$text_x = $row->text_x;
			$text_y = $row->text_y;
			$app_text = $row->app_text;
			$options = $row->options;
			$appid = $row->appid;
			$capson = $row->capson;
		}
	}

	$checked_caps = $checked_fullname = '';
	if($capson == 'yes') { $checked_caps = 'checked'; }
?>		
	<section id="content">
		<section class="vbox"> 
			<section class="scrollable padder"> 
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
					<li><a href="<?php echo site_url('admin');?>"><i class="fa fa-home"></i> &nbsp;Add New App</a></li>
					<li><a href="<?php echo site_url('admin/app/add_app_details/'.$appid); ?>"><i class="fa fa-home"></i>&nbsp; Add App Details</a></li> 
					<li><a href="<?php echo site_url('admin/app/random_text/'.$appid);?>"><i class="fa fa-home"></i>&nbsp; Add Random Text</a> </li>
					<li class="active">Edit Random Text </li>						
				</ul>
				
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Edit App Text Form</header> 
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
					echo form_open('admin/app/edit_random_text/'.$id, $attributes); 
				?>
							
						
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Size</label> 
								<input class="form-control" placeholder="Font Size" type="text" name="size" value="<?php echo $size; ?>"> 
								<?php echo '<div class="r_error">'.form_error('size').'</div>'; ?>
							</div> 
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Font</label> 
								<select name="font" class="form-control "> 
									<option value="<?php echo $font; ?>"><?php echo $font; ?></option>
									<option value="OpenSans-Bold.ttf">OpenSans-Bold</option> 
									<option value="OpenSans-Light.ttf">OpenSans-Light</option> 
									<option value="OpenSans-Regular.ttf">OpenSans-Regular</option> 
									<option value="Aller_Lt.ttf">Aller_Light</option> 
									<option value="Aller_Bd.ttf">Aller_Bold</option> 
									<option value="Aller_Rg.ttf">Aller_Regular</option> 
									<option value="SEGOEUI.TTF">SEGOEUI</option>
								</select>
								<?php echo '<div class="r_error">'.form_error('font').'</div>'; ?>
							</div>
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Color Code </label> 
								<input class="form-control" placeholder="#ffffff" type="text" name="color" value="<?php echo $color; ?>"> 
								<?php echo '<div class="r_error">'.form_error('color').'</div>'; ?>
							</div>
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Length </label> 
								<input class="form-control" placeholder="200" type="text" name="length" value="<?php echo $length; ?>"> 
								<?php echo '<div class="r_error">'.form_error('length').'</div>'; ?>
							</div>
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Name X</label> 
								<input class="form-control" placeholder="x co-ordinate" type="text" name="text_x" value="<?php echo $text_x; ?>" > 
								<?php echo '<div class="r_error">'.form_error('text_x').'</div>'; ?>
							</div> 
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Name Y</label> 
								<input class="form-control" placeholder="y co-ordinate" type="text" name="text_y" value="<?php echo $text_y; ?>"> 
								<?php echo '<div class="r_error">'.form_error('text_y').'</div>'; ?>
							</div> 
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Text For Male/Female or Both</label> 
								<select name="options" class="form-control "> 
									<option value="<?php echo $options; ?>"><?php echo $options; ?></option>
									<option value="male">Male</option> 
									<option value="female">Female</option> 
									<option value="both">both</option> 
								</select>
								<?php echo '<div class="r_error">'.form_error('options').'</div>'; ?>
							</div>	
							
							<div class="form-group col-md-4" style="padding:0px 0px 0px 20px;"> 
								<label>Caps On Options</label>				
								<div class="checkbox" style="margin-top:0px;"> <label> 
									<input type="checkbox" value="yes" name="capson" <?php echo $checked_caps;?>> Yes  </label> 
								</div>
						    </div>
						    <div class="form-group col-md-12" style="padding:0px;"> 
								<label>App Text</label> 
								<textarea name="app_text" class="form-control col-md-12" rows="2" ><?php echo $app_text; ?></textarea> 
								<?php echo '<div class="r_error">'.form_error('app_text').'</div>'; ?>
							</div>
							
							
					</div>
					<footer class="panel-footer bg-white " style="overflow:auto; padding:5px 18px;"> 
						<button type="submit" class="btn btn-sm btn-dark">Update</button>
					</footer>
					
							
					<?php echo form_close(); ?>
							
					
					</div> 
				</section>
				
			  </div> 
			</section> 
		</section>  
	</section> 
	