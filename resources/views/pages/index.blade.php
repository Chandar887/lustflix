@extends('site_app')

@section('head_title', getcong('site_name') )

@section('head_url', Request::url())


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

@section('content')

{{-- start slider section --}}
<div class="prs_main_slider_wrapper">
    <div id="rev_slider_41_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="food-carousel26" data-source="gallery" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div class="prs_slider_overlay"></div>
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_slider_41_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">

            <ul> 
                @foreach($slider as $slider_data)

                <!-- SLIDE  -->
                <li data-index="rs-145" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="The Healthy Bowl" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                  
                        <img src="{{URL::to('upload/source/'.$slider_data->slider_image)}}" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                  
                    <div class="centered">
                        <a href="{{ URL::to('originals/'.App\Movies::getMoviesInfo($slider_data->slider_post_id,'video_slug').'/'.$slider_data->slider_post_id) }}" class="test-popup-link">
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
                @endforeach
            </ul>

            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
</div>        
{{-- end slider --}}




<div class="main-wrap">   
    @if(get_ads('home_ad_top')->status!=0)
    <div class="add_banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">         
                    {{-- {!!get_ads('home_ad_top')->ad_code!!} --}}
                </div>
            </div>
        </div>  
    </div>
    @endif

    @if(Auth::check() && $recently_watched->count() >0)

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
            @foreach($recently_watched as $i=>$watched_videos)
            <li class="album-slider__item">
                <figure class="album">
                    <div class="prs_upcom_movie_box_wrapper">
                        <div class="prs_upcom_movie_img_box">
                            @if($watched_videos->video_type=="Movies")
                            <img src="{{URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_image)}}" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="{{ URL::to('originals/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id) }}" class="test-popup-link""
                                           ><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->
                                </ul>
                            </div>

                            @endif
                            @if($watched_videos->video_type=="Sports")
                            <img src="{{URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_image)}}" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="{{ URL::to('short-films/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->
                                </ul>
                            </div>

                            @endif
                            @if($watched_videos->video_type=="Episodes")
                            <?php $episode_series_id = \App\Episodes::getEpisodesInfo($watched_videos->video_id, 'episode_series_id'); ?>

                            <img src="{{URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_image)}}" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="{{ URL::to('series/'.\App\Series::getSeriesInfo($episode_series_id,'series_slug').'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->video_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id) }}"><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->
                                </ul>
                            </div>

                            @endif
                            @if($watched_videos->video_type=="LiveTV")
                            <img src="{{URL::to('upload/source/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->channel_thumb)}}" alt="movie_img" />
                            <div class="prs_upcom_movie_img_overlay"></div>
                            <div class="prs_upcom_movie_img_btn_wrapper">
                                <ul>
                                    <li><a href="{{ URL::to('regional/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->channel_slug.'/'.recently_watched_info($watched_videos->video_type,$watched_videos->video_id)->id) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                    </li>
                                    <!-- <li><a href="#">View Details</a> -->

                                </ul>
                            </div>

                            @endif
                        </div>      
                    </div>
                    <!-- End album body -->
                </figure>
                <!-- End album -->
            </li>

            @endforeach
        </ul>
        
    </div>
    @endif



   



    <div class="prs_upcom_slider_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_heading_section_wrapper">
                    <h2>

                        {{trans('words.original')}}

                    </h2>
                </div>
            </div>
            <div class="prs_upcom_slider_slides_wrapper">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="row">
                            <!-- <div class="cc_featured_second_section"> -->
                                @foreach(explode(",",$home_sections->section1_latest_movie) as $latest_movie)            
                                @if(App\Movies::getMoviesInfo($latest_movie,'status')==1)

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="prs_upcom_movie_box_wrapper">
                                    <div class="prs_upcom_movie_img_box">
                                        <img src="{{URL::to('upload/source/'.App\Movies::getMoviesInfo($latest_movie,'video_image_thumb'))}}" alt="movie_img"/>@if(App\Movies::getMoviesInfo($latest_movie,'video_access')=='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif 
                                        <div class="prs_upcom_movie_img_overlay"></div>
                                        <div class="prs_upcom_movie_img_btn_wrapper">
                                            <ul>
                                                <li>
                                             
                                                    @if(Auth::check())  
                                                    <a  href="{{ URL::to('originals/'.App\Movies::getMoviesInfo($latest_movie,'video_slug').'/'.App\Movies::getMoviesInfo($latest_movie,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                    @else
                                                    @if(App\Movies::getMoviesInfo($latest_movie,'video_access')=='Paid')
                                                    <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                                                        @else
                                                        <a href="{{ URL::to('originals/'.App\Movies::getMoviesInfo($latest_movie,'video_slug').'/'.App\Movies::getMoviesInfo($latest_movie,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                            @endif  
                                                            @endif
                                                            </li>
                                                            <!-- <li><a href="#">View Details</a> -->
                                                            
                                                            </ul>
                                        </div>
                                    </div>
                                    <div class="prs_upcom_movie_content_box">
                                        <div class="prs_upcom_movie_content_box_inner">
                                            <h2><a href="#">{{ Str::limit(stripslashes(App\Movies::getMoviesInfo($latest_movie,'video_title')),12)}}</a></h2>
                                            {{-- <p><i class="fa fa-clock-o"></i>{{App\Movies::getMoviesInfo($latest_movie,'duration')}}</p> --}}

                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                            <ul style="margin-top:20px;">
                                <li><a href="{{ URL::to('series/latest') }}" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                </li>
                            </ul>
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

                                                                                        {{trans('words.webseries')}}

                                                                                    </h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="prs_upcom_slider_slides_wrapper">
                                                                                <div class="owl-carousel owl-theme">

                                                                                    <div class="item">
                                                                                        <div class="row">
                                                                                            <!-- <div class="cc_featured_second_section"> -->
                                                                                            @foreach(explode(",",$home_sections->section2_latest_series) as $latest_series)            
                                                                                            @if(App\Series::getSeriesInfo($latest_series,'status')==1)

                                                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="prs_upcom_movie_box_wrapper">
                                                                                                    <div class="prs_upcom_movie_img_box">
                                                                                                        <img src="{{URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))}}" alt="movie_img"/>@if(App\Series::getSeriesInfo($latest_series,'video_access')=='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif 
                                                                                                        <div class="prs_upcom_movie_img_overlay"></div>
                                                                                                        <div class="prs_upcom_movie_img_btn_wrapper">
                                                                                                            <ul>
                                                                                                                <li>
                                                                                                             
                                                                                                                    @if(Auth::check())  
                                                                                                                    <a  href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                    @else
                                                                                                                    @if(App\Series::getSeriesInfo($latest_series,'video_access')=='Paid')
                                                                                                                    <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                                                                                                                        @else
                                                                                                                        <a href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                            @endif  
                                                                                                                            @endif
                                                                                                                            </li>
                                                                                                                            <!-- <li><a href="#">View Details</a> -->
                                                                                                                            
                                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="prs_upcom_movie_content_box">
                                                                                                        <div class="prs_upcom_movie_content_box_inner">
                                                                                                            <h2><a href="#">{{Str::limit(stripslashes(App\Series::getSeriesInfo($latest_series,'series_name')),25) }}</a></h2>
                                                                                                            <!-- <p><i class="fa fa-clock-o"></i>{{App\Movies::getMoviesInfo($latest_movie,'duration')}}</p>	 -->

                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif
                                                                                            @endforeach

                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                                                                            <ul style="margin-top:20px;">
                                                                                                <li><a href="{{ URL::to('series/latest') }}" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            



                                                                {{-- short films section --}}

                                                                <div class="prs_upcom_slider_main_wrapper">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="prs_heading_section_wrapper">
                                                                                    <h2>

                                                                                        {{trans('short-films')}}

                                                                                    </h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="prs_upcom_slider_slides_wrapper">
                                                                                <div class="owl-carousel owl-theme">

                                                                                    <div class="item">
                                                                                        <div class="row">
                                                                                            <!-- <div class="cc_featured_second_section"> -->
                                                                                            @foreach(explode(",",$home_sections->section6_short_films) as $short_films)            
                                                                                            @if(App\Sports::getSportsInfo($short_films,'status')==1)

                                                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                                                <div class="prs_upcom_movie_box_wrapper">
                                                                                                    <div class="prs_upcom_movie_img_box">
                                                                                                        <img src="{{URL::to('upload/source/'.App\Sports::getSportsInfo($short_films,'video_image'))}}" alt="movie_img" />/>@if(App\Sports::getSportsInfo($short_films,'video_access')=='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif
                                                                                                        <div class="prs_upcom_movie_img_overlay"></div>
                                                                                                        <div class="prs_upcom_movie_img_btn_wrapper">
                                                                                                            <ul>
                                                                                                                <li>
                                                                                                                   
                                                                                                                    @if(Auth::check())  
                                                                                                                    <a  href="{{ URL::to('short-films/'.App\Sports::getSportsInfo($short_films,'video_slug').'/'.App\Sports::getSportsInfo($short_films,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                    @else
                                                                                                                    @if(App\Sports::getSportsInfo($short_films,'video_access')=='Paid')
                                                                                                                    <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                                                                                                                        @else
                                                                                                                        <a href="{{ URL::to('short-films/'.App\Sports::getSportsInfo($short_films,'video_slug').'/'.App\Sports::getSportsInfo($short_films,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                            @endif  
                                                                                                                            @endif
                                                                                                                            </li>
                                                                                                                            <!-- <li><a href="#">View Details</a> -->
                                                                                                                            
                                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="prs_upcom_movie_content_box">
                                                                                                        <div class="prs_upcom_movie_content_box_inner">
                                                                                                            <h2><a href="#">{{Str::limit(stripslashes(App\Sports::getSportsInfo($short_films,'video_title')),25)}}</a></h2>
                                                                                                            <!-- <p><i class="fa fa-clock-o"></i>{{App\Movies::getMoviesInfo($latest_movie,'duration')}}</p>	 -->

                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endif
                                                                                            @endforeach

                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                                                                            <ul style="margin-top:20px;">
                                                                                                <li><a href="{{ URL::to('short-films') }}" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                

                                                                {{-- end short films section --}}


                                                                                                            {{-- Regional films section --}}

                                                                                                            {{-- <div class="prs_upcom_slider_main_wrapper">
                                                                                                                <div class="container">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                            <div class="prs_heading_section_wrapper">
                                                                                                                                <h2>

                                                                                                                                    {{trans('regional')}}

                                                                                                                                </h2>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="prs_upcom_slider_slides_wrapper">
                                                                                                                            <div class="owl-carousel owl-theme">

                                                                                                                                <div class="item">
                                                                                                                                    <div class="row">
                                                                                                                                        <!-- <div class="cc_featured_second_section"> -->
                                                                                                                                        @foreach(explode(",",$home_sections->section7_regional) as $regional)            
                                                                                                                                        @if(App\LiveTV::getLiveTvInfo($regional,'status')==1)

                                                                                                                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                                                                                                                            <div class="prs_upcom_movie_box_wrapper">
                                                                                                                                                <div class="prs_upcom_movie_img_box">
                                                                                                                                                    <img src="{{URL::to('upload/source/'.App\LiveTV::getLiveTvInfo($regional,'channel_thumb'))}}" alt="movie_img" />/>@if(App\LiveTV::getLiveTvInfo($regional,'video_access')=='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif
                                                                                                                                                    <div class="prs_upcom_movie_img_overlay"></div>
                                                                                                                                                    <div class="prs_upcom_movie_img_btn_wrapper">
                                                                                                                                                        <ul>
                                                                                                                                                            <li>
                                                                                                                                                                @if(Auth::check())  
                                                                                                                                                                <a  href="{{ URL::to('regional/'.App\LiveTV::getLiveTvInfo($regional,'id').'/'.App\LiveTV::getLiveTvInfo($regional,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                                                                @else
                                                                                                                                                                @if(App\LiveTV::getLiveTvInfo($regional,'video_access')=='Paid')
                                                                                                                                                                <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                                                                                                                                                                    @else
                                                                                                                                                                    <a href="{{ URL::to('regional/'.App\LiveTV::getLiveTvInfo($regional,'channel_slug').'/'.App\LiveTV::getLiveTvInfo($regional,'id')) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                                                                                                                                                                        @endif  
                                                                                                                                                                        @endif
                                                                                                                                                                        </li>
                                                                                                                                                                        <!-- <li><a href="#">View Details</a> -->
                                                                                                                                                                        
                                                                                                                                                                        </ul>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="prs_upcom_movie_content_box">
                                                                                                                                                    <div class="prs_upcom_movie_content_box_inner">
                                                                                                                                                        <h2><a href="#">{{Str::limit(stripslashes(App\LiveTV::getLiveTvInfo($regional,'channel_name')),25)}}</a></h2>
                                                                                                                                                        <!-- <p><i class="fa fa-clock-o"></i>{{App\Movies::getMoviesInfo($latest_movie,'duration')}}</p>	 -->

                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        @endif
                                                                                                                                        @endforeach

                                                                                                                                    </div>

                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                                    <div class="prs_animate_btn1 prs_upcom_main_wrapper">
                                                                                                                                        <ul style="margin-top:20px;">
                                                                                                                                            <li><a href="{{ URL::to('regional') }}" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
                                                                                                                                            </li>
                                                                                                                                        </ul>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div> --}}

                                                                                                        {{-- Regional films section end --}}

                                                                                    @endsection
