<?php 	

	$app_data = '';	
    $pic =''; $i =0 ; $c=-1;
	if(!empty($app_query)){		

		foreach($app_query as $row) {			

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

            if($i%3==0) {
                $app_data .= '<div class="col-xs-12 col-sm-12 col-md-12">';
                $c = $c+3;
            }
            $app_data .= '<div class="col-xs-12 col-sm-4 col-md-4 home-activity-container">
                            <div class="quiz-wrapper">
                                <a href="'.$url.'" class="quiz-link" title="hff">
                                    <div>
                                        <img class="quiz-picture" src="'.$row->cover_pic.'" alt="'.$app_name.'">
                                        <div class="quiz-question">
                                            <div class="quiz-title">
                                                '.$app_name.'
                                            </div>
                                            <div class="quiz-arrow">
                                                <span class="glyphicon glyphicon-arrow-right activity-question-right-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="quiz-question-description quiz-question-description-home">
                                          '.$row->share_content.'
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>';
            if($c==$i) {
                $app_data .='</div>';
            }
            $i++;
	       

		}	
	} 
?>  
    <div class="container content-container">
        <section class="col-xs-12 col-sm-12 col-md-12" style="margin:8px 0px; text-align: center">Advertisement<br/> Ads
        </section>
    </div>
    <div class="container content-container">
        <div class="content-wrapper">
            <section class="col-xs-12 col-sm-12 col-md-12">
                <article class="row article-wrapper">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;text-align: center">
                        <div class="next-wrapper" style="display: inline-block">
                            <a class="green-button next-button" href="/?page=2" style="padding: 9px 12px">
                            <span class="next-previous" style="font-size: 17px">Next</span> 
                            <span class="glyphicon glyphicon-chevron-right" style="font-size: 13px"></span>
                            </a>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
    <div class="container content-container">
        <div class="content-wrapper">
            <section class="col-xs-12 col-sm-12 col-md-12">
                <article class="row main-content-wrapper">
                    <?php echo $app_data; ?>
                </article>
            </section>
        </div>
    </div>
    <div class="container content-container">
        <div class="content-wrapper">
            <section class="col-xs-12 col-sm-12 col-md-12">
                <article class="row article-wrapper">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;text-align: center">
                        <div class="next-wrapper" style="display: inline-block">
                            <a class="green-button next-button" href="/?page=2" style="padding: 9px 12px">
                            <span class="next-previous" style="font-size: 17px">Next</span> 
                            <span class="glyphicon glyphicon-chevron-right" style="font-size: 13px"></span>
                            </a>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </div>
    <div class="container content-container">
        <section class="col-xs-12 col-sm-12 col-md-12" style="margin:8px 0px; text-align: center">Advertisement<br/> Ads
        </section>
    </div>
        

</div>