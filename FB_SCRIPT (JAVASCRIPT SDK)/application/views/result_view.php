<?php 	
		$app_data = $app_name = $preview_pic =  $app_names = $ad_top = $m_top = $m_bottom = $ad_right_two = $ad_right = '';	
		$i = 0; $c=-1;
		if(!empty($front_app_query)){		
			foreach($front_app_query as $row) {			
				$app_name = $row->app_name;					
				
				$url_end = '/'.$row->gid;					
				$url = site_url('test').$url_end;	

				$friend_app = $row->friend_app;
				if($friend_app == 'yes') {
					$url = site_url('quiz').$url_end;	
				}
				
				$photo_app = $row->photo_app;
				if($photo_app == 'yes')
					$url =  site_url('photo').$url_end;

				if($i%4==0) {
					$app_data .= '<div class="col-xs-12 col-sm-12 col-md-12">';
					$c=$c+4;
				}
				$app_data .= '
						<div class="col-xs-12 col-sm-3 col-md-3 next-quiz-container">
							<div class="activity-wrapper sidebar-activity-wrapper">
								<a href="'.$url.'" class="next-quiz" title="'.$app_name.'">
									<img class="activity-picture showcases-activity-picture" src="'.site_url().$row->cover_pic.'" alt="'.$app_name.'">
									<div class="side-title">'.$app_name.'</div>
								</a>
							</div>
						</div>';
				if($c==$i) {
					$app_data .= '</div>';
				}

				$i++;
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
	
	<script type="text/javascript">
		var quiz_ids = '<?php echo $id; ?>';
		var share_url = '<?php echo $share_url; ?>';
	</script>
	<div class="container content-container">
        <section class="col-xs-12 col-sm-12 col-md-12" style="margin:8px 0px; text-align: center">Advertisement
        	<div class="right-inner mob-hide">
				<?php echo $ad_top; ?>
			</div>
			<div class="mob-show">
				<center><?php echo $m_top; ?></center>
			</div>
        </section>
    </div>
    <div class="container content-container question-container">
    	<section class="col-xs-12 col-sm-12 col-md-12">
    		<article class="row main-content-wrapper">
    			<div class="col-xs-12 col-sm-8 col-md-8">
    				<article class="row question-row" data-generate="Generate your result">
    					<div class="aplication-inner" style="text-align:left;">
    						<article class="row answer-question-wrapper" style="padding: 10px 0px 5px;">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="answer-question">
										<span style="font-size: 17px;color: #000000"><?php echo $app_name_title; ?></span>
									</div>
								</div>
							</article>
    						<center>
	    						<p class="sharebutons clearfix" style="margin-bottom: 10px;">
									<a href="#" class="fbshare fr tooltip-right"><i class="fa fa-facebook-square"></i> Share on facebook </a>
								</p>
							</center>
    						<div class="final_img">
								<img src="<?php echo $share_img_url;?>" data-pin-hover="true" alt="final.jpg" />
							</div>
							<article style="padding: 0px 0px 15px; overflow:auto">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<center><div class="fb-like" data-href="https://www.facebook.com/indiantrollworld/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
									</center>
								</div>
							</article>
								
							<article class="row answer-description-wrapper" >
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="answer-description">
										<span><?php echo $result_content; ?></span>
									</div>
								</div>
							</article>
							<center>
								<p class="sharebutons clearfix">
									<a href="#" class="fbshare fr tooltip-right"><i class="fa fa-facebook-square"></i> Share on facebook </a>
								</p>
							</center>
    					</div>
    				</article>
    				<article class="row next-up-header">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="next-up-header-text">Next Quiz </div>
						</div>
					</article>
    			</div>
    			<div class="col-xs-12 col-sm-4 col-md-4 sidebar-activities">
    				<center>Adverstisement</center>
    				<div class="mob-hide">
						<center><?php echo $ad_right; ?></center>
					</div>
					<div class="mob-hide">
						<center><?php echo $ad_right_two; ?></center>
					</div>
    			</div>
    		</article>
    	</section>
    </div>
    <div class="container content-container question-container">
    	<section class="col-xs-12 col-sm-12 col-md-12">
    		<article class="row main-content-wrapper">
    			<?php echo $app_data; ?>
    		</article>
    	</section>
    </div>

		
	</div>

	<script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>myscriptsfbs.js"></script>
    <script type="text/javascript">
        QuizApp.init_quiz();
    </script>
  