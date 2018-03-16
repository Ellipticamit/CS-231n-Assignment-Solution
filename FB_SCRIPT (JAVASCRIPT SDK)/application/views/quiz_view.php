<?php 

	$app_data = $app_name = $app_names = $ad_top = $ad_right_two = $m_top = $m_bottom = $ad_right = '';
	$c = -1; $i=0;
	if(!empty($front_app_query)){

		foreach($front_app_query as $row) {
			$app_name = $row->app_name;				

			$url_end = '/'.$row->gid;					
			$url = site_url('test').$url_end;	

			$friend_app = $row->friend_app;
			if($friend_app == 'yes') 
				$url = site_url('quiz').$url_end;	
			
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

	if(!empty($app_query)) {
		foreach($app_query as $rows) {
			$cover_pic = site_url().$rows->cover_pic;
			$app_names = $rows->app_name;
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
        var start_quiz_url = '<?php echo site_url('friend');?>';
        var quiz_ids = '<?php echo $id; ?>';
        var icon2_url = '<?php echo site_url('src/app_img/icon2.png');?>';
        var icon3_url = '<?php echo site_url('src/app_img/icon3.png');?>';
        var icon4_url = '<?php echo site_url('src/app_img/icon4.png');?>';
        var icon5_url = '<?php echo site_url('src/app_img/icon5.png');?>';
        var result_url = '<?php echo site_url('result').'/'.$id.'/friend/'; ?>';
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
    					<div class="aplication-inner">
                            <div class="overlay">
                                <div class="loader">
                                    <p class="currentstatus">Checking connection status with facebook</p>
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
                                <h1><?php echo $app_name; ?></h1>
                                <div class="preview_img">
                                    <img src="<?php echo $cover_pic;?>" alt="<?php echo $app_names;?>">
                                </div>
                                <div class="fb-like" data-href="https://www.facebook.com/indiantrollworld/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                                
                            <div class="button-wrapper fb-login centered submit-div">
                                <a class="submit fb_login" href="#" data-loading="Connecting To Facebook"><i class="fa fa-facebook-square"></i> Start Quiz</a>
                            </div>
                             <p class="note">You will be required to Login with Facebook.</p>
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

    <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>myscriptsfbs.js"></script>
    <script type="text/javascript">
        QuizApp.init_quiz();
    </script>

