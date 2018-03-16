<?php 
	$app_data = ''; $i =1;

	
?>
	<section id="content">
		<section class="vbox"> 
			<section class="scrollable padder"> 
				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 
					<li><a href="<?php echo site_url('game'); ?>"><i class="fa fa-home"></i> Add New Game</a></li> 					
				</ul>
				<section class="panel panel-default"> 
					<header class="panel-heading font-bold"> Add New Game Form </header> 
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
							echo form_open('admin/game', $attributes); 
						?> 
							<div class="col-md-6 form-group" style="padding:0px 10px 0px 0px;"> 
								<label>Game Name</label> 
								<input class="form-control" placeholder='Enter Game Name Like "warmcoldapp"' type="text" name="game_name"> 
								<?php echo '<div class="r_error">'.form_error('game_name').'</div>'; ?>
							</div>
							<div class="col-md-6 form-group" style="margin-top:22px;" >
								<button type="submit" class="btn btn-dark">Add Game</button>
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


	