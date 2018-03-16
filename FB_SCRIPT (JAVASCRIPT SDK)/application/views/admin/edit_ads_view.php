<?php 
	$ad_top = $ad_right_two = $m_top = $m_bottom = $ad_right = ''; 
	if(!empty($ad_query)) {
		foreach($ad_query as $row) {
			$ad_top = $row->ad_top;
			$ad_right_two = $row->ad_right_two;
			$ad_right = $row->ad_right;
			$m_top = $row->m_top;
			$m_bottom = $row->m_bottom;
		}
	}
?>
	<section id="content">
		<section class="vbox"> 
			<section class="scrollable padder"> 
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
					<li><a href="<?php echo site_url('admin/ads/add_ads');?>"><i class="fa fa-home"></i>Manage Ads</a></li>
					<li class="active">Add Ads</li>					
				</ul>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold"> Add Ads Form </header> 
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
							echo form_open('admin/ads/', $attributes); 
						?> 
						
							<div class="col-md-12 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Ads Top ( width : 720px)</label> 
								<textarea class="form-control parsley-validated" rows="3" name="ad_top"><?php echo $ad_top; ?></textarea>
								<?php echo '<div class="r_error">'.form_error('ad_top').'</div>'; ?>
							</div>
							
							<div class="col-md-6 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Ads Right ( width : 480px)</label> 
								<textarea class="form-control parsley-validated" rows="3" name="ad_right"><?php echo $ad_right; ?></textarea>
								<?php echo '<div class="r_error">'.form_error('ad_right').'</div>'; ?>
							</div>
							
							<div class="col-md-6 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Ads Right Two ( width : 720px)</label> 
								<textarea class="form-control parsley-validated" rows="3" name="ad_right_two" ><?php echo $ad_right_two; ?></textarea>
								<?php echo '<div class="r_error">'.form_error('ad_right_two').'</div>'; ?>
							</div>
							<div class="col-md-6 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Mobile Ads Top( width : 720px)</label> 
								<textarea class="form-control parsley-validated" rows="3" name="m_top" ><?php echo $m_top; ?></textarea>
								<?php echo '<div class="r_error">'.form_error('m_top').'</div>'; ?>
							</div>
							<div class="col-md-6 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Mobile Ads Bottom( width : 720px)</label> 
								<textarea class="form-control parsley-validated" rows="3" name="m_bottom" ><?php echo $m_bottom; ?></textarea>
								<?php echo '<div class="r_error">'.form_error('m_bottom').'</div>'; ?>
							</div>
							
							<div class="col-md-6 form-group" style="margin-top:22px; padding:0px;" >
								<button type="submit" class="btn btn-dark">Update Ads</button>
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
									<th>APP Name</th>
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


	