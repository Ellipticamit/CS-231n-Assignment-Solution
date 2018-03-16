<?php 

	$app_data = ''; $i =1;
	if(!empty($app_query)) {
		foreach($app_query as $row) {
			$details = '';
			$cover_pic = $row->cover_pic;

			if(!empty($cover_pic))
				$details = '<a href="'.site_url('admin/app/add_app_details').'/'.$row->gid.'" class="btn btn-xs btn-primary">View Details</a> <a target="_blank" href="'.site_url('admin/preview/create_preview_img/').'/'.$row->gid.'" class="btn btn-xs btn-warning">Preview</a> <a href="'.site_url('admin/home/delete_incomplete_app/').'/'.$row->gid.'" class="btn btn-xs btn-danger">Delete</a>';
			else 
				$details = '<a href="'.site_url('admin/app/add_app_details/').'/'.$row->gid.'" class="btn btn-xs btn-info">Incomplete</a>&nbsp; <a href="'.site_url('admin/home/delete_incomplete_app/').'/'.$row->gid.'" class="btn btn-xs btn-danger">Delete</a>';

			$app_data .= '<tr>
							<td>'.$i.'</td>
							<td>'.$row->app_name.'</td>
							<td>'.$row->friend_app.'</td>
							<td>'.$row->photo_app.'</td>
							<td>'.$row->options.'</td>
							<td>'.$details.'</td>
						   </tr>';
			$i++; 
		}

	}

	

?>

	<section id="content">

		<section class="vbox"> 

			<section class="scrollable padder"> 

				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 

					<li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-home"></i> Add New App</a></li> 					

				</ul>

				<section class="panel panel-default"> 

					<header class="panel-heading font-bold"> Add New App Form </header> 

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

							echo form_open('admin/', $attributes); 

						?> 

							<div class="col-md-6 form-group" style="padding:0px 10px 0px 0px;"> 

								<label>App Name</label> 

								<input class="form-control" placeholder='e.g. What kind of Strom are you? ' type="text" name="app_name"> 

								<?php echo '<div class="r_error">'.form_error('app_name').'</div>'; ?>

							</div>

							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 

								<label style="width: 100%;">Friend App</label> 

								<input type="checkbox" name="friend_app" value="yes"> YES

							</div>

							<div class="col-md-2 form-group" style="padding:0px 10px 0px 0px;"> 

								<label style="width: 100%;">User Photo App</label> 

								<input type="checkbox" name="photo_app" value="yes"> YES

							</div>

							<div class="col-md-2 form-group" style="margin-top:22px;" >

								<button type="submit" class="btn btn-dark">Add App</button>

							</div>

							 

						<?php echo form_close(); ?>

					</div> 

				</section>

		<?php if(!empty($app_data)) { ?>

		

				<section class="panel panel-default"> 

					<header class="panel-heading font-bold"> New Game Data</header>

					<div class="panel-body">
						<table class="table table-striped m-b-none">
							<thead>
								<tr>
									<th>S.No</th>
									<th>App Name</th>
									<th>Friend App</th>
									<th>Photo App</th>
									<th>Male/Female Options</th>
									<th>Action</th>
								</tr>
							</thead>

							<tbody> 
								<?php echo $app_data; ?>
							</tbody> 
						</table>
					</div>

					<footer class="panel-footer bg-white " style="overflow:auto; padding:5px 18px;"> 
					</footer>
				</section> 
			  </div> 
			</section> 
		<?php } ?>
		</section>  
</section> 





	