<?php
	$text_data = ''; $i = 1 ;
	if(!empty($text_query)) {
		foreach($text_query as $row) {
			$text_data .= '<tr>
							<td>'.$i.'</td>
							<td>'.$row->size.'</td>
							<td>'.$row->app_text.'</td>
							<td>'.$row->font.'</td>
							<td>'.$row->color.'</td>
							<td>'.$row->text_x.'</td>
							<td>'.$row->text_y.'</td>
							<td>'.$row->options.'</td>
							<td><a href="'.site_url('admin/app/edit_random_text/').'/'.$row->rtid.'" class="btn btn-xs btn-primary">Edit</a> &nbsp;
								<a href="'.site_url('admin/app/delete_random_text/').'/'.$row->rtid.'_'.$row->appid.'" class="btn btn-xs btn-danger">Delete</a></td>
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
					<li class="active">Add Random Text </li>						
				</ul>
				
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold">Name Details Form</header> 
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
					echo form_open_multipart('admin/app/random_text/'.$id, $attributes); 
				?>
							
						
							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Size</label> 
								<input class="form-control" placeholder="Font Size" type="text" name="size" value="<?php echo set_value('size'); ?>"> 
								<?php echo '<div class="r_error">'.form_error('size').'</div>'; ?>
							</div> 
							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Font</label> 
								<select name="font" class="form-control "> 
									<option value="">Please select the font</option>
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
							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Color Code </label> 
								<input class="form-control" placeholder="#ffffff" type="text" name="color" value="<?php echo set_value('color')?>"> 
								<?php echo '<div class="r_error">'.form_error('color').'</div>'; ?>
							</div>
							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Length </label> 
								<input class="form-control" placeholder="200" type="text" name="length" value="<?php echo set_value('length')?>"> 
								<?php echo '<div class="r_error">'.form_error('length').'</div>'; ?>
							</div>
							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Name X</label> 
								<input class="form-control" placeholder="x co-ordinate" type="text" name="text_x" > 
								<?php echo '<div class="r_error">'.form_error('text_x').'</div>'; ?>
							</div> 
							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Name Y</label> 
								<input class="form-control" placeholder="y co-ordinate" type="text" name="text_y" > 
								<?php echo '<div class="r_error">'.form_error('text_y').'</div>'; ?>
							</div> 
							<div class="form-group col-md-12" style="padding:0px 10px 0px 0px;"> 
								<label>App Text</label> 
								<textarea name="app_text" class="form-control col-md-12" rows="3" placeholder="your text or rand(1, 100) .'%' or rand(1, 10).'year' or 'year'.rand(1,10)."></textarea> 
								<?php echo '<div class="r_error">'.form_error('app_text').'</div>'; ?>
							</div>
							<div class="col-md-4 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Text For Male/Female or Both</label> 
								<select name="options" class="form-control "> 
									<option value="both">Both</option>
									<option value="male">Male</option> 
									<option value="female">Female</option> 
								</select>
								<?php echo '<div class="r_error">'.form_error('options').'</div>'; ?>
							</div>
							
						   
							<div class="form-group col-md-4"> 
								<label>Caps On Options</label>				
								<div class="checkbox" style="margin-top:0px;"> <label> 
									<input type="checkbox" value="yes" name="capson"> Yes  </label> 
								</div>
						   </div>
							
							
					</div>
					<footer class="panel-footer bg-white " style="overflow:auto; padding:5px 18px;"> 
						<button type="submit" class="btn btn-sm btn-dark">Add</button>
					</footer>
					
							
					<?php echo form_close(); ?>
							
					
					</div> 
				</section>

				<?php if(!empty($text_data)) { ?>
					<section class="panel panel-default"> 
						<header class="panel-heading font-bold"> Text Details</header>
						<div class="panel-body">
							<table class="table table-striped m-b-none">
								<thead>
									<tr>
										<th>S.No</th>
										<th>Size</th>
										<th>Text</th>
										<th>Font</th>
										<th>Color</th>
										<th>Text X</th>
										<th>Text Y</th>
										<th>Options</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody> 
									<?php echo $text_data; ?>
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
	