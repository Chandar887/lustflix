<?php $__env->startSection('head_title', getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    #owl-demo .item{
  background: #42bdc2;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}
    </style>

<?php $__env->startSection('content'); ?>


<div class="prs_main_slider_wrapper">
    <div id="rev_slider_41_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="food-carousel26" data-source="gallery" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div class="prs_slider_overlay"></div>
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_slider_41_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">

            <ul> 
                <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- SLIDE  -->
                <li data-index="rs-145" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="The Healthy Bowl" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                  
                        <img src="<?php echo e(URL::to('upload/source/'.$slider_data->slider_image)); ?>" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                  
                    <div class="centered">
                        <a href="<?php echo e(URL::to('originals/'.App\Movies::getMoviesInfo($slider_data->slider_post_id,'video_slug').'/'.$slider_data->slider_post_id)); ?>" class="test-popup-link">
                        <div class="slider_loader">
                            <i class="flaticon-play-button text-white" style="font-size: 33px;"></i>
                        </div>
                    </a>
                    </div>
                   
                    <!-- LAYERS -->
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-145-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-145-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-145-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-145-layer-1","delay":""}]' data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[14,14,14,14]" data-paddingright="[14,14,14,14]" data-paddingbottom="[14,14,14,14]" data-paddingleft="[16,16,16,16]" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;border-color:transparent;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><i class="fa-icon-remove"></i> 
                    </div>
                    
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
</div>        





<div class="main-wrap">   
    <?php if(get_ads('home_ad_top')->status!=0): ?>
    <div class="add_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">         
                    
                </div>
            </div>
        </div>  
    </div>
    <?php endif; ?>

    <?php if(Auth::check() && $recently_watched->count() >0): ?>

    <div class="prs_upcom_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_heading_section_wrapper">
                        <h2>Recent Views</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-album-slider wrap-album-slider-top-slider">
        <ul class="album-slider">
            <?php $__currentLoopData = $recently_watched; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$watched_videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="album-slider__item">
                <figure class="album">
                    <div class="prs_upcom_movie_box_wrapper">
                        <div class="prs_upcom_movie_img_box">
                            <?php if($watched_videos->video_type=="Movies"): ?>
                            <img src="<?php echo e(URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_image)); ?>" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="<?php echo e(URL::to('originals/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id)); ?>" class="test-popup-link""
                                           ><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->
                                </ul>
                            </div>

                            <?php endif; ?>
                            <?php if($watched_videos->video_type=="Sports"): ?>
                            <img src="<?php echo e(URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_image)); ?>" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="<?php echo e(URL::to('short-films/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id)); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->
                                </ul>
                            </div>

                            <?php endif; ?>
                            <?php if($watched_videos->video_type=="Episodes"): ?>
                            <?php $episode_series_id = \App\Episodes::getEpisodesInfo($watched_videos->video_id, 'episode_series_id'); ?>

                            <img src="<?php echo e(URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_image)); ?>" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="<?php echo e(URL::to('series/'.\App\Series::getSeriesInfo($episode_series_id,'series_slug').'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id)); ?>"><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->
                                </ul>
                            </div>

                            <?php endif; ?>
                            <?php if($watched_videos->video_type=="LiveTV"): ?>
                            <img src="<?php echo e(URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->channel_thumb)); ?>" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="<?php echo e(URL::to('regional/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->channel_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id)); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->

                                </ul>
                            </div>

                            <?php endif; ?>
                        </div>      
                    </div>
                    <!-- End album body -->
                </figure>
                <!-- End album -->
            </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        
    </div>
    <?php endif; ?>



    <div class="prs_upcom_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="prs_heading_section_wrapper">
                        <h2>
                            <!-- <a href="<?php echo e(URL::to('/originals')); ?>"> -->
                            <?php echo e(trans('words.original')); ?>

                            <!-- </a> -->
                        </h2>
                    </div>
                </div>
                <div class="prs_upcom_slider_slides_wrapper">
                    <div class="owl-carousel owl-theme">

                        <div class="item">
                            <div class="row">
                                <!-- <div class="cc_featured_second_section"> -->
                                <?php $__currentLoopData = explode(",",$home_sections->section1_latest_movie); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
                                <?php if(App\Movies::getMoviesInfo($latest_movie,'status')==1): ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="prs_upcom_movie_box_wrapper">
                                        <div class="prs_upcom_movie_img_box">
                                            <img src="<?php echo e(URL::to('upload/source/'.App\Movies::getMoviesInfo($latest_movie,'video_image_thumb'))); ?>" alt="movie_img" /><?php if(App\Movies::getMoviesInfo($latest_movie,'video_access')=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?>
                                            <div class="prs_upcom_movie_img_overlay"></div>
                                            <div class="prs_upcom_movie_img_btn_wrapper">
                                                <ul>
                                                    <li>
                      
                                                        <?php if(Auth::check()): ?>  
                                                        <a  href="<?php echo e(URL::to('originals/'.App\Movies::getMoviesInfo($latest_movie,'id').'/'.App\Movies::getMoviesInfo($latest_movie,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                        <?php else: ?>
                                                        <?php if(App\Movies::getMoviesInfo($latest_movie,'video_access')=='Paid'): ?>
                                                        
                                                        <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>

                                                            <?php else: ?>
                                                            <a href="<?php echo e(URL::to('originals/'.App\Movies::getMoviesInfo($latest_movie,'video_slug').'/'.App\Movies::getMoviesInfo($latest_movie,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                <?php endif; ?>  
                                                                <?php endif; ?>
                                                                </li>
                                                                <!-- <li><a href="#">View Details</a> -->
                                                    
                                                </ul>
                                                                </div>
                                                                </div>
                                                                <div class="prs_upcom_movie_content_box">
                                                                    <div class="prs_upcom_movie_content_box_inner">
                                                                        <h2><a href="#"><?php echo e(Str::limit(stripslashes(App\Movies::getMoviesInfo($latest_movie,'video_title')),12)); ?></a></h2>
                                                                        <p><i class="fa fa-clock-o"></i><?php echo e(App\Movies::getMoviesInfo($latest_movie,'duration')); ?></p>	

                                                                    </div>

                                                                </div>
                                                                </div>
                                                                </div>
                                                                <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                </div>

                                                                </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                                                            
                                                                            <ul style="margin-top:20px;">
                                                                                <li><a href="<?php echo e(URL::to('/originals')); ?>" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                                                                </li>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>

            </div>
         </div>
    </div>
</div>



                                                                <div class="prs_upcom_slider_main_wrapper">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="prs_heading_section_wrapper">
                                                                                    <h2>

                                                                                        <?php echo e(trans('words.webseries')); ?>


                                                                                    </h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="prs_upcom_slider_slides_wrapper">
                                                                                <div class="owl-carousel owl-theme">

                                                                                    <div class="item">
                                                                                        <div class="row">
                                                                                            <!-- <div class="cc_featured_second_section"> -->
                                                                                            <?php $__currentLoopData = explode(",",$home_sections->section2_latest_series); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
                                                                                            <?php if(App\Series::getSeriesInfo($latest_series,'status')==1): ?>

                                                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="prs_upcom_movie_box_wrapper">
                                                                                                    <div class="prs_upcom_movie_img_box">
                                                                                                        <img src="<?php echo e(URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))); ?>" alt="movie_img"/><?php if(App\Series::getSeriesInfo($latest_series,'video_access')=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?> 
                                                                                                        <div class="prs_upcom_movie_img_overlay"></div>
                                                                                                        <div class="prs_upcom_movie_img_btn_wrapper">
                                                                                                            <ul>
                                                                                                                <li>
                                                                                                             
                                                                                                                    <?php if(Auth::check()): ?>  
                                                                                                                    <a  href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($latest_series,'id').'/'.App\Series::getSeriesInfo($latest_series,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                    <?php else: ?>
                                                                                                                    <?php if(App\Series::getSeriesInfo($latest_series,'video_access')=='Paid'): ?>
                                                                                                                    <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                                                                                                                        <?php else: ?>
                                                                                                                        <a href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                            <?php endif; ?>  
                                                                                                                            <?php endif; ?>
                                                                                                                            </li>
                                                                                                                            <!-- <li><a href="#">View Details</a> -->
                                                                                                                            
                                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="prs_upcom_movie_content_box">
                                                                                                        <div class="prs_upcom_movie_content_box_inner">
                                                                                                            <h2><a href="#"><?php echo e(Str::limit(stripslashes(App\Series::getSeriesInfo($latest_series,'series_name')),25)); ?></a></h2>
                                                                                                            <!-- <p><i class="fa fa-clock-o"></i><?php echo e(App\Movies::getMoviesInfo($latest_movie,'duration')); ?></p>	 -->

                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php endif; ?>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                                                                            <ul style="margin-top:20px;">
                                                                                                <li><a href="<?php echo e(URL::to('series/latest')); ?>" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>



                                                                

                                                                <div class="prs_upcom_slider_main_wrapper">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="prs_heading_section_wrapper">
                                                                                    <h2>

                                                                                        <?php echo e(trans('short-films')); ?>


                                                                                    </h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="prs_upcom_slider_slides_wrapper">
                                                                                <div class="owl-carousel owl-theme">

                                                                                    <div class="item">
                                                                                        <div class="row">
                                                                                            <!-- <div class="cc_featured_second_section"> -->
                                                                                            <?php $__currentLoopData = explode(",",$home_sections->section6_short_films); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $short_films): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
                                                                                            <?php if(App\Sports::getSportsInfo($short_films,'status')==1): ?>

                                                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="prs_upcom_movie_box_wrapper">
                                                                                                    <div class="prs_upcom_movie_img_box">
                                                                                                        <img src="<?php echo e(URL::to('upload/source/'.App\Sports::getSportsInfo($short_films,'video_image'))); ?>" alt="movie_img" />/><?php if(App\Sports::getSportsInfo($short_films,'video_access')=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?>
                                                                                                        <div class="prs_upcom_movie_img_overlay"></div>
                                                                                                        <div class="prs_upcom_movie_img_btn_wrapper">
                                                                                                            <ul>
                                                                                                                <li>
                                                                                                                   
                                                            
                                                                                                                    <?php if(Auth::check()): ?>  
                                                                                                                    <a  href="<?php echo e(URL::to('short-films/'.App\Sports::getSportsInfo($short_films,'id').'/'.App\Sports::getSportsInfo($short_films,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                    <?php else: ?>
                                                                                                                    <?php if(App\Sports::getSportsInfo($short_films,'video_access')=='Paid'): ?>
                                                                                                                    <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                                                                                                                        <?php else: ?>
                                                                                                                        <a href="<?php echo e(URL::to('short-films/'.App\Sports::getSportsInfo($short_films,'video_slug').'/'.App\Sports::getSportsInfo($short_films,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                            <?php endif; ?>  
                                                                                                                            <?php endif; ?>
                                                                                                                            </li>
                                                                                                                            <!-- <li><a href="#">View Details</a> -->
                                                                                                                            
                                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="prs_upcom_movie_content_box">
                                                                                                        <div class="prs_upcom_movie_content_box_inner">
                                                                                                            <h2><a href="#"><?php echo e(Str::limit(stripslashes(App\Sports::getSportsInfo($short_films,'video_title')),25)); ?></a></h2>
                                                                                                            <!-- <p><i class="fa fa-clock-o"></i><?php echo e(App\Movies::getMoviesInfo($latest_movie,'duration')); ?></p>	 -->

                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php endif; ?>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                                                                            <ul style="margin-top:20px;">
                                                                                                <li><a href="<?php echo e(URL::to('short-films')); ?>" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>

                                                                






                                                                



                                                                                                            

                                                                                                            <div class="prs_upcom_slider_main_wrapper">
                                                                                                                <div class="container">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                            <div class="prs_heading_section_wrapper">
                                                                                                                                <h2>

                                                                                                                                    <?php echo e(trans('regional')); ?>


                                                                                                                                </h2>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="prs_upcom_slider_slides_wrapper">
                                                                                                                            <div class="owl-carousel owl-theme">

                                                                                                                                <div class="item">
                                                                                                                                    <div class="row">
                                                                                                                                        <!-- <div class="cc_featured_second_section"> -->
                                                                                                                                        <?php $__currentLoopData = explode(",",$home_sections->section7_regional); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
                                                                                                                                        <?php if(App\LiveTV::getLiveTvInfo($regional,'status')==1): ?>

                                                                                                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                                                                                                                            <div class="prs_upcom_movie_box_wrapper">
                                                                                                                                                <div class="prs_upcom_movie_img_box">
                                                                                                                                                    <img src="<?php echo e(URL::to('upload/source/'.App\LiveTV::getLiveTvInfo($regional,'channel_thumb'))); ?>" alt="movie_img" />/><?php if(App\LiveTV::getLiveTvInfo($regional,'video_access')=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?>
                                                                                                                                                    <div class="prs_upcom_movie_img_overlay"></div>
                                                                                                                                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                                                                                                                                        <ul>
                                                                                                                                                            <li>
                                                                                                                                                               
                                                                                                        
                                                                                                                                                                <?php if(Auth::check()): ?>  
                                                                                                                                                                <a  href="<?php echo e(URL::to('regional/'.App\LiveTV::getLiveTvInfo($regional,'id').'/'.App\LiveTV::getLiveTvInfo($regional,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                                                                <?php else: ?>
                                                                                                                                                                <?php if(App\LiveTV::getLiveTvInfo($regional,'video_access')=='Paid'): ?>
                                                                                                                                                                <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                                                                                                                                                                    <?php else: ?>
                                                                                                                                                                    <a href="<?php echo e(URL::to('regional/'.App\LiveTV::getLiveTvInfo($regional,'channel_slug').'/'.App\LiveTV::getLiveTvInfo($regional,'id'))); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                                                                        <?php endif; ?>  
                                                                                                                                                                        <?php endif; ?>
                                                                                                                                                                        </li>
                                                                                                                                                                        <!-- <li><a href="#">View Details</a> -->
                                                                                                                                                                        
                                                                                                                                                                        </ul>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="prs_upcom_movie_content_box">
                                                                                                                                                    <div class="prs_upcom_movie_content_box_inner">
                                                                                                                                                        <h2><a href="#"><?php echo e(Str::limit(stripslashes(App\LiveTV::getLiveTvInfo($regional,'channel_name')),25)); ?></a></h2>
                                                                                                                                                        <!-- <p><i class="fa fa-clock-o"></i><?php echo e(App\Movies::getMoviesInfo($latest_movie,'duration')); ?></p>	 -->

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <?php endif; ?>
                                                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                                                                    </div>

                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                                    <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                                                                                                                        <ul style="margin-top:20px;">
                                                                                                                                            <li><a href="<?php echo e(URL::to('regional')); ?>" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                                                                                                                            </li>
                                                                                                                                        </ul>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        




                                                                                                        






                                                                                    <!-- <div class="section section-padding vfx_movie_section_block">
                                                                                    <div class="container">
                                                                                      <div class="row">
                                                                                        <div class="col-sm-12 col-xs-6">
                                                                                          <div class="vfx_section_header">
                                                                                            <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('movies/popular')); ?>"><?php echo e(trans('words.popular_movies')); ?></a></h2>
                                                                                            <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('movies/popular')); ?>"><?php echo e(trans('words.popular_webseries')); ?></a></h2>
                                                                                          </div>
                                                                                        </div>        
                                                                                      </div>
                                                                                      <div class="row">
                                                                                        <div class="owl-carousel video-carousel" id="video-carousel">
                                                                                          
                                                                                          <?php $__currentLoopData = explode(",",$home_sections->section3_popular_movie); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
                                                                                            <?php if(App\Movies::getMoviesInfo($popular_movie,'status')==1): ?>
                                                                                            
                                                                                            <?php if(Auth::check()): ?>              
                                                                                                <a class="icon" href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id'))); ?>">              
                                                                                            <?php else: ?>
                                                                                               <?php if(App\Movies::getMoviesInfo($popular_movie,'video_access')=='Paid'): ?>
                                                                                                <a class="icon" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal">
                                                                                               <?php else: ?>
                                                                                                <a class="icon" href="<?php echo e(URL::to('movies/'.App\Movies::getMoviesInfo($popular_movie,'video_slug').'/'.App\Movies::getMoviesInfo($popular_movie,'id'))); ?>">
                                                                                               <?php endif; ?>  
                                                                                            <?php endif; ?> 
                                                                                            <div class="vfx_video_item">
                                                                                              <div class="thumb-wrap"> <img src="<?php echo e(URL::to('upload/source/'.App\Movies::getMoviesInfo($popular_movie,'video_image_thumb'))); ?>" alt="Movie Thumb"> <?php if(App\Movies::getMoviesInfo($popular_movie,'video_access')=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?>
                                                                                                <div class="thumb-hover">           
                                                                                            <i class="icon fa fa-play"></i><span class="ripple"></span>
                                                                                           
                                                                                          </div>
                                                                                              </div>
                                                                                              <div class="vfx_video_detail">
                                                                                                <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes(App\Movies::getMoviesInfo($popular_movie,'video_title')),12)); ?></h4>
                                                                                                <p class="vfx_video_length"><i class="fa fa-clock-o"></i> <?php echo e(App\Movies::getMoviesInfo($popular_movie,'duration')); ?></p>
                                                                                               </div>
                                                                                            </div>
                                                                                            </a>
                                                                                            <?php endif; ?>
                                                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                       
                                                                                      
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div> -->

                                                                                    <!-- <div class="section section-padding bg-image tv_show gray_bg">
                                                                                      <div class="container">
                                                                                        <div class="row">
                                                                                          <div class="col-sm-12 col-xs-6">
                                                                                            <div class="vfx_section_header">
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('series/popular')); ?>"><?php echo e(trans('words.popular_shows')); ?></a></h2>
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('series/popular')); ?>"><?php echo e(trans('words.original')); ?></a></h2>
                                                                                            </div>
                                                                                          </div>     
                                                                                        </div>
                                                                                        <div class="row">
                                                                                          <div class="owl-carousel video-carousel vfx_tvshow_carousel" id="vfx_tvshow_carousel">
                                                                                          <?php $__currentLoopData = explode(",",$home_sections->section3_popular_series); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular_series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
                                                                                            <?php if(App\Series::getSeriesInfo($popular_series,'status')==1): ?>
                                                                                              <a href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($popular_series,'series_slug').'/'.App\Series::getSeriesInfo($popular_series,'id'))); ?>">
                                                                                              <div class="vfx_video_item">
                                                                                                <div class="vfx_upcomming_item_block">
                                                                                                                  <img class="img-responsive" src="<?php echo e(URL::to('upload/source/'.App\Series::getSeriesInfo($popular_series,'series_poster'))); ?>" alt="show">                 
                                                                                                </div>                  
                                                                                                            <div class="vfx_upcomming_detail">
                                                                                                    <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes(App\Series::getSeriesInfo($popular_series,'series_name')),25)); ?></h4>
                                                                                                </div>            
                                                                                             </div>
                                                                                             </a>  
                                                                                            <?php endif; ?>
                                                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                  
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>  -->

                                                                                    <!-- <?php if($home_sections->section3_type=="Series"): ?>
                                                                                  
                                                                                    <div class="section section-padding bg-image tv_show gray_bg">
                                                                                      <div class="container">
                                                                                        <div class="row">
                                                                                          <div class="col-sm-12 col-xs-6">
                                                                                            <div class="vfx_section_header">
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('language/series/'.App\Language::getLanguageInfo($section3_lang_id,'language_slug'))); ?>"><?php echo e($home_sections->section3_title); ?></a></h2>
                                                                                            </div>
                                                                                          </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                          <?php if(App\Language::getLanguageInfo($section3_lang_id,'language_slug')): ?>
                                                                                          <div class="owl-carousel video-carousel vfx_tvshow_carousel" id="vfx_tvshow_carousel">
                                                                                          <?php $__currentLoopData = $home_sections_list3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list3_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                              <a href="<?php echo e(URL::to('series/'.$list3_data->series_slug.'/'.$list3_data->id)); ?>">
                                                                                              <div class="vfx_video_item">
                                                                                                            <div class="vfx_upcomming_item_block">
                                                                                                  <img class="img-responsive" src="<?php echo e(URL::to('upload/source/'.$list3_data->series_poster)); ?>" alt="show"> 
                                                                                                  <div class="vfx_upcomming_detail">
                                                                                                    <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($list3_data->series_name),25)); ?></h4>
                                                                                                  </div>            
                                                                                                </div>                  
                                                                                             </div>
                                                                                             </a>
                                                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                                                                          </div>
                                                                                          <?php endif; ?>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div> 
                                                                                  
                                                                                    <?php else: ?>  
                                                                                    <div class="section section-padding vfx_tvshow_section_block">
                                                                                      <div class="container">
                                                                                        <div class="row">
                                                                                          <div class="col-sm-12 col-xs-6">
                                                                                            <div class="vfx_section_header">
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('language/movies/'.App\Language::getLanguageInfo($section3_lang_id,'language_slug'))); ?>"><?php echo e($home_sections->section3_title); ?></a></h2>
                                                                                            </div>
                                                                                          </div>        
                                                                                        </div>
                                                                                        <div class="row">
                                                                                          <?php if(App\Language::getLanguageInfo($section3_lang_id,'language_slug')): ?>
                                                                                          <div class="owl-carousel video-carousel vfx_tvshow_carousel" id="vfx_tvshow_carousel">      
                                                                                   
                                                                                             <?php $__currentLoopData = $home_sections_list3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list3_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                              <?php if(Auth::check()): ?>              
                                                                                                  <a class="icon" href="<?php echo e(URL::to('movies/'.$list3_data->video_slug.'/'.$list3_data->id)); ?>">              
                                                                                              <?php else: ?>
                                                                                                 <?php if($list3_data->video_access=='Paid'): ?>
                                                                                                  <a class="icon" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal">
                                                                                                 <?php else: ?>
                                                                                                  <a class="icon" href="<?php echo e(URL::to('movies/'.$list3_data->video_slug.'/'.$list3_data->id)); ?>">
                                                                                                 <?php endif; ?>  
                                                                                              <?php endif; ?>
                                                                                              <div class="vfx_video_item">
                                                                                                <div class="thumb-wrap"> <img src="<?php echo e(URL::to('upload/source/'.$list3_data->video_image_thumb)); ?>" alt="Movie Thumb"> <?php if($list3_data->video_access=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?>
                                                                                                  <div class="thumb-hover"> 
                                                                                                                          <i class="icon fa fa-play"></i><span class="ripple"></span>
                                                                                                                  </div>
                                                                                                </div>
                                                                                                <div class="vfx_video_detail">
                                                                                                  <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($list3_data->video_title),12)); ?></h4>
                                                                                                  <p class="vfx_video_length"><i class="fa fa-clock-o"></i> <?php echo e($list3_data->duration); ?></p>
                                                                                                 </div>
                                                                                              </div>
                                                                                              </a>
                                                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                                                                                        
                                                                                          </div>
                                                                                          <?php endif; ?>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    
                                                                                  
                                                                                    <?php if($home_sections->section4_type=="Series"): ?>
                                                                                  
                                                                                    <div class="section section-padding bg-image tv_show gray_bg">
                                                                                      <div class="container">
                                                                                        <div class="row">
                                                                                          <div class="col-sm-12 col-xs-6">
                                                                                            <div class="vfx_section_header">
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('language/series/'.App\Language::getLanguageInfo($section4_lang_id,'language_slug'))); ?>"><?php echo e($home_sections->section4_title); ?></a></h2>
                                                                                            </div>
                                                                                          </div>
                                                                                       
                                                                                        </div>
                                                                                        <div class="row">
                                                                                          <?php if(App\Language::getLanguageInfo($section4_lang_id,'language_slug')): ?>
                                                                                          <div class="owl-carousel video-carousel vfx_tvshow_carousel" id="vfx_tvshow_carousel">
                                                                                          <?php $__currentLoopData = $home_sections_list4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list4_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                              <a href="<?php echo e(URL::to('series/'.$list4_data->series_slug.'/'.$list4_data->id)); ?>">
                                                                                              <div class="vfx_video_item">
                                                                                                <div class="vfx_upcomming_item_block"> 
                                                                                                  <img class="img-responsive" src="<?php echo e(URL::to('upload/source/'.$list4_data->series_poster)); ?>" alt="show">                 
                                                                                                </div>                  
                                                                                                            <div class="vfx_upcomming_detail">
                                                                                                                  <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($list4_data->series_name),25)); ?></h4>
                                                                                                            </div>            
                                                                                             </div>
                                                                                             </a>
                                                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                                                                          </div>
                                                                                          <?php endif; ?>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div> 
                                                                                  
                                                                                    <?php else: ?>  
                                                                                    <div class="section section-padding vfx_tvshow_section_block">
                                                                                      <div class="container">
                                                                                        <div class="row">
                                                                                          <div class="col-sm-12 col-xs-6">
                                                                                            <div class="vfx_section_header">
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('language/movies/'.App\Language::getLanguageInfo($section4_lang_id,'language_slug'))); ?>"><?php echo e($home_sections->section4_title); ?></a></h2>
                                                                                            </div>
                                                                                          </div>        
                                                                                        </div>
                                                                                        <div class="row">
                                                                                          <?php if(App\Language::getLanguageInfo($section4_lang_id,'language_slug')): ?>
                                                                                          <div class="owl-carousel video-carousel vfx_tvshow_carousel" id="vfx_tvshow_carousel">      
                                                                                   
                                                                                             <?php $__currentLoopData = $home_sections_list4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list4_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                                                                              
                                                                                              <?php if(Auth::check()): ?>              
                                                                                                  <a class="icon" href="<?php echo e(URL::to('movies/'.$list4_data->video_slug.'/'.$list4_data->id)); ?>">              
                                                                                              <?php else: ?>
                                                              <?php if($list4_data->video_access=='Paid'): ?>
                                                                                                  <a class="icon" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal">
                                                                                                 <?php else: ?>
                                                                                                  <a class="icon" href="<?php echo e(URL::to('movies/'.$list4_data->video_slug.'/'.$list4_data->id)); ?>">
                                                                                                 <?php endif; ?>  
                                                                                              <?php endif; ?>  
                                                                                              <div class="vfx_video_item">
                                                                                  
                                                                                                <div class="thumb-wrap"> <img src="<?php echo e(URL::to('upload/source/'.$list4_data->video_image_thumb)); ?>" alt="Movie Thumb"> <?php if($list4_data->video_access=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?>
                                                                                                  <div class="thumb-hover">            
                                                                                              <i class="icon fa fa-play"></i><span class="ripple"></span>
                                                                                              
                                                                                            </div>
                                                                                                </div>
                                                                                                <div class="vfx_video_detail">
                                                                                                  <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($list4_data->video_title),12)); ?></h4>
                                                                                                  <p class="vfx_video_length"><i class="fa fa-clock-o"></i> <?php echo e($list4_data->duration); ?></p>
                                                                                                 </div>
                                                                                              </div>
                                                                                              </a>
                                                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                                                                                        
                                                                                          </div>
                                                                                          <?php endif; ?>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                  
                                                                                    <?php if($home_sections->section5_type=="Series"): ?>
                                                                                  
                                                                                    <div class="section section-padding bg-image tv_show gray_bg">
                                                                                      <div class="container">
                                                                                        <div class="row">
                                                                                          <div class="col-sm-12 col-xs-6">
                                                                                            <div class="vfx_section_header">
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('language/series/'.App\Language::getLanguageInfo($section5_lang_id,'language_slug'))); ?>"><?php echo e($home_sections->section5_title); ?></a></h2>
                                                                                            </div>
                                                                                          </div>
                                                                                       
                                                                                        </div>
                                                                                        <div class="row">
                                                                                          <?php if(App\Language::getLanguageInfo($section5_lang_id,'language_slug')): ?>
                                                                                          <div class="owl-carousel video-carousel vfx_tvshow_carousel" id="vfx_tvshow_carousel">
                                                                                          <?php $__currentLoopData = $home_sections_list5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list5_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                              <a href="<?php echo e(URL::to('series/'.$list5_data->series_slug.'/'.$list5_data->id)); ?>">
                                                                                              <div class="vfx_video_item">
                                                                                                <div class="vfx_upcomming_item_block"> 
                                                                                               <img class="img-responsive" src="<?php echo e(URL::to('upload/source/'.$list5_data->series_poster)); ?>" alt="show"> 
                                                                                                  <div class="vfx_upcomming_detail">
                                                                                                    <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($list5_data->series_name),25)); ?></h4>
                                                                                                   </div>            
                                                                                               </div>                  
                                                                                             </div>
                                                                                             </a>
                                                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                                                                          </div>
                                                                                          <?php endif; ?>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div> 
                                                                                  
                                                                                    <?php else: ?>  
                                                                                    <div class="section section-padding vfx_tvshow_section_block">
                                                                                      <div class="container">
                                                                                        <div class="row">
                                                                                          <div class="col-sm-12 col-xs-6">
                                                                                            <div class="vfx_section_header">
                                                                                              <h2 class="vfx_section_title"><a href="<?php echo e(URL::to('language/movies/'.App\Language::getLanguageInfo($section5_lang_id,'language_slug'))); ?>"><?php echo e($home_sections->section5_title); ?></a></h2>
                                                                                            </div>
                                                                                          </div>        
                                                                                        </div>
                                                                                        <div class="row">
                                                                                          <?php if(App\Language::getLanguageInfo($section5_lang_id,'language_slug')): ?>
                                                                                          <div class="owl-carousel video-carousel vfx_tvshow_carousel" id="vfx_tvshow_carousel">      
                                                                                   
                                                                                             <?php $__currentLoopData = $home_sections_list5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list5_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                                                                              
                                                                                              <?php if(Auth::check()): ?>              
                                                                                                  <a class="icon" href="<?php echo e(URL::to('movies/'.$list5_data->video_slug.'/'.$list5_data->id)); ?>">              
                                                                                              <?php else: ?>
                                                                                                 <?php if($list5_data->video_access=='Paid'): ?>
                                                                                                  <a class="icon" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal">
                                                                                                 <?php else: ?>
                                                                                                  <a class="icon" href="<?php echo e(URL::to('movies/'.$list5_data->video_slug.'/'.$list5_data->id)); ?>">
                                                                                                 <?php endif; ?>  
                                                                                              <?php endif; ?>  
                                                                                              <div class="vfx_video_item">
                                                                                  
                                                                                                <div class="thumb-wrap"> <img src="<?php echo e(URL::to('upload/source/'.$list5_data->video_image_thumb)); ?>" alt="Movie Thumb"> <?php if($list5_data->video_access=='Paid'): ?><span class="premium_video"><i class="fa fa-lock"></i>Premium</span><?php endif; ?>
                                                                                                  <div class="thumb-hover"> 
                                                                                             
                                                                                              <i class="icon fa fa-play"></i><span class="ripple"></span>
                                                                                             
                                                                                            </div>
                                                                                                </div>
                                                                                                <div class="vfx_video_detail">
                                                                                                  <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes($list5_data->video_title),12)); ?></h4>
                                                                                                  <p class="vfx_video_length"><i class="fa fa-clock-o"></i> <?php echo e($list5_data->duration); ?></p>
                                                                                                 </div>
                                                                                              </div>
                                                                                              </a>
                                                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
                                                                                        
                                                                                          </div>
                                                                                          <?php endif; ?>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                  
                                                                                      
                                                                                  </div> -->

                                                                                    
                                                                                    
                                                                                                    
                                                                                                
                                                                                    


                                                                                    <!-- prs letest news Start	-->
                                                                                    <div class="prs_ln_main_wrapper">
                                                                                        <div class="container">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="prs_heading_section_wrapper">
                                                                                                        <h2>Latest News</h2>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                                    <div class="prs_ln_left_img_wrapper">
                                                                                                        <div class="prs_in_left_img_overlay"></div>
                                                                                                        <div class="prs_webseri_video_sec_icon_wrapper ">
                                                                                                            <ul>
                                                                                                                <li><a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div class="prs_prs_webseri_video_sec_icon_cont_wrapper">
                                                                                                            <p>28 Feb 2018</p>
                                                                                                            <h2>The News of theater</h2>
                                                                                                            <ul>
                                                                                                                <li><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;<a href="#">120 Like</a>
                                                                                                                </li>
                                                                                                                <li><i class="fa fa-comments-o"></i>&nbsp;&nbsp;<a href="#">52 Comments</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                                    <div class="prs_ln_right_main_wrapper">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <div class="prs_ln_right_first_box_wrapper">
                                                                                                                    <div class="prs_in_right_box_img_wrapper">
                                                                                                                        <img src="images/nl2.jpg" alt="news_img" />
                                                                                                                    </div>
                                                                                                                    <div class="prs_in_right_box_img_cont_wrapper">
                                                                                                                        <h2><a href="#">The News of theater</a></h2>
                                                                                                                        <h3>28 feb 2018</h3>
                                                                                                                        <p>Lorem ipsum dolor sit amet, consectuir adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                                                                                                        <ul>
                                                                                                                            <li><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;<a href="#">120 Like</a>
                                                                                                                            </li>
                                                                                                                            <li><i class="fa fa-comments-o"></i>&nbsp;&nbsp;<a href="#">52 comments</a>
                                                                                                                            </li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <div class="prs_ln_right_first_box_wrapper2">
                                                                                                                    <div class="prs_in_right_box_img_wrapper">
                                                                                                                        <img src="images/nl3.jpg" alt="news_img" />
                                                                                                                    </div>
                                                                                                                    <div class="prs_in_right_box_img_cont_wrapper">
                                                                                                                        <h2><a href="#">The News of theater</a></h2>
                                                                                                                        <h3>28 feb 2018</h3>
                                                                                                                        <p>Lorem ipsum dolor sit amet, consectuir adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                                                                                                        <ul>
                                                                                                                            <li><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;<a href="#">120 Like</a>
                                                                                                                            </li>
                                                                                                                            <li><i class="fa fa-comments-o"></i>&nbsp;&nbsp;<a href="#">52 comments</a>
                                                                                                                            </li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- prs letest news End -->

                                                                                    <?php $__env->stopSection(); ?>


                                                                                    
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kiwitv\resources\views/pages/index.blade.php ENDPATH**/ ?>