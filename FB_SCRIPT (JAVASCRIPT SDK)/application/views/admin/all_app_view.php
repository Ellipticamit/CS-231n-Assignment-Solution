<?php

	$game_data = ''; $i = 1 ;

	if(!empty($game_query)) {

		foreach($game_query as $row) {

		  $cover = $row->cover_pic;

		  if(!empty($cover)) {

			$cover_src = site_url().$row->cover_pic;

			$game_data .= '<tr>
							<td>'.$i.'</td>
							<td>'.$row->app_name.'</td>
							<td><a href="'.$cover_src.'" target="_blank">See Cover Img</a></td>
							<td><a href="'.site_url('admin/app/enable_app/').'/'.$row->action.'_'.$row->gid.'" class="btn btn-xs btn-warning" style="margin-right:5px;">'.$row->action.'</a></td>
							<td><a href="'.site_url('admin/app/edit_app_details/').'/'.$row->gid.'" class="btn btn-xs btn-primary">Edit</a> <a href="'.site_url('admin/app/delete_app/').'/'.$row->gid.'" class="btn btn-xs btn-danger">Delete</a></td>
						  </tr>';



			$i++;

		   }

		}

	}

?>		



	<section id="content">

		<section class="vbox"> 

			<section class="scrollable padder"> 

				<ul class="breadcrumb no-border no-radius b-b b-light pull-in"> 

					<li><a href="<?php echo site_url('admin/game/manage_game');?>"><i class="fa fa-home"></i>Manage Game</a></li>

					<li class="active">All Game</li>						

				</ul>

				<?php if(!empty($game_data)) { ?>

					<section class="panel panel-default"> 

					<header class="panel-heading font-bold">Game Details</header>

					<div class="panel-body" style="padding:10px 5px;">

						<table class="table table-striped m-b-none">

							<thead>

								<tr>

									<th>S.No</th>

									<th>App Name</th>

									<th>Cover Pic</th>

									<th>Allow App</th>

									<th>Action</th>

								</tr>

							</thead>

							<tbody> 

								<?php echo $game_data; ?>

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











	