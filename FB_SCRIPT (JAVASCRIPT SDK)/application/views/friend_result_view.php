<?php 	
		$app_data = $app_name = $preview_pic =  $app_names = $ad_top = $m_top = $m_bottom = $ad_right_two = $ad_right = '';	
		if(!empty($front_app_query)){		
			foreach($front_app_query as $row) {			
				$app_name = $row->app_name;					
				$app_url = str_replace("?","", $app_name);		
				$app_url = strtolower(str_replace(" ", "-", $app_url));
				
				$url_end = '/'.$row->gid.'/'.$app_url;					
				$url = site_url('test').$url_end;	

				$friend_app = $row->friend_app;
				if($friend_app == 'yes') {
					$url = site_url('quiz').$url_end;	
				}
				
				$photo_app = $row->photo_app;
				if($photo_app == 'yes')
					$url =  site_url('photo').$url_end;		

						$app_data .= '<div class="col-md-4 col-xs-6">		
							<a href="'.$url.'" class="inner ann" title="'.$app_name.'">	
							  <div class="inner-col">		
							    <img src="'.site_url().$row->cover_pic.'" alt="'.$app_name.'">			
								 <p>'.$app_name.'</p>	
							  </div>						
							</a>
						</div>';	
			}	
		}

		if(!empty($ad_query)) {
			foreach ($ad_query as $r) {
				$ad_top = $r->ad_top;
				$ad_right_two = $r->ad_right_two;
				$ad_right = $r->ad_right;
				$m_top = $r->m_top;
				$m_bottom = $r->m_bottom;
			}
		}
		
?>
		
		<div class="principals container">
			<div class="row reclame">		
				<div class="col-md-12">
					<div class="aplication">
						<div class="right-inner mob-hide">
							<?php echo $ad_top; ?>
						</div>
						<div class="mob-show">
							<center><?php echo $m_top; ?></center>
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-8 col-xs-12">				
					<div class="aplication dataapps" data-generate="Generate your result">
						<div class="aplication-inner">
							<div class="overlay">
								<div class="loader">
									<p class="currentstatus">Generating New Result</p>
									<div class="icons clearfix">
										<div class="profile">
											<img src="<?php echo HTTP_APP_IMG;?>icon1.png" alt="Profile picture" data-pin-hover="true">
										</div>

										<div class="step">
											<img src="<?php echo HTTP_APP_IMG;?>icon1.png" alt="Profile icon" data-pin-hover="true">
										</div>
									</div>

									<div class="preload"></div>
								</div>
							</div>
							<p class="sharebutons clearfix" style="margin-bottom: 10px;">
								<a href="<?php echo $share_url; ?>" class="fbshare fr tooltip-right"><i class="fa fa-facebook"></i> Share on facebook </a>
							</p>
							<img src="<?php echo $share_img_url;?>" data-pin-hover="true" alt="final.jpg" />
														
							<div class="fb-like" data-href="https://www.facebook.com/indiantrollworld/" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div> 	
							<br />
							
							<p class="sharebutons clearfix secsh">
								<a href="<?php echo $share_url; ?>" class="fbshare fr tooltip-right"><i class="fa fa-facebook"></i> Share on facebook </a>
							</p>
								
						</div>
					</div>
				</div>
			

					<div class="col-md-4 right">
						<div class="aplication goo">
							<div class="right-inner">
								<center><?php echo $ad_right; ?></center>
							</div>
							<div class="mob-hide">
								<center><?php echo $ad_right_two; ?></center>
							</div>

						</div>
					</div>
								
			</div>			
			<div class="row relative">
					<div class="col-md-12">
						<div class="mob-show">
								<?php echo $m_bottom; ?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-8">	
							<div class="fb-comments" data-href="<?php echo site_url('test').'/'.$id.'/'.$app_urls; ?>" data-numposts="10" data-order-by="reverse_time" data-colorscheme="light"></div> 
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<?php echo $app_data;?>	
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>