@extends('site_app')

@section('head_title', trans('words.latest_shows').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
      <li>{{trans('words.latest_shows')}}</li>
      </ul>  
    </div>
    </div>
  </div>
</div>

{{-- @if(get_ads('shows_list_ad_top')->status!=0)
        <div class="add_banner_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                {!!get_ads('shows_list_ad_top')->ad_code!!}
              </div>
            </div>
          </div>  
        </div>
        @endif --}}


       


{{-- 
 <div class="main-wrap">
  <div class="section section-padding tv_show vfx_video_list_section text-white">
    <div class="container">
      <div class="row">
        <div class="show-listing series_listing_view">
      
        @foreach(explode(",",$home_sections->section2_latest_series) as $latest_series)            
          @if(App\Series::getSeriesInfo($latest_series,'status')==1)


            <a href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}">
            <div class="col-md-3 col-sm-4 col-xs-6 sm-top-30">
            <div class="vfx_upcomming_item_block"> 
              <img class="img-responsive" src="{{URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))}}" alt="show"> 
                <div class="vfx_upcomming_detail">
                  <h4 class="vfx_video_title">{{Str::limit(stripslashes(App\Series::getSeriesInfo($latest_series,'series_name')),25) }}</h4>
                 </div>            
             </div>                  
           </div>
           </a>  
          @endif
        @endforeach             
          
        </div>    
      </div>
    </div>
  </div>
</div>  --}}



<div class="container">  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="tab-content">
      <div id="grid" class="tab-pane fade in active">
        <div class="row">
          @foreach(explode(",",$home_sections->section2_latest_series) as $latest_series) 
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 prs_upcom_slide_first">
            <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
              <div class="prs_upcom_movie_img_box">
                <img src="{{URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))}}" alt="{{$latest_series,'series_name'}}" />@if(App\Series::getSeriesInfo($latest_series,'video_access')=='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif
                <div class="prs_upcom_movie_img_overlay"></div>
                <div class="prs_upcom_movie_img_btn_wrapper">
                  <ul>
                    <li>

                      @if(Auth::check())  
                      <a class="icon test-popup-link" href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}"><i class="flaticon-play-button"></i></a> 
                      
                      @else
                      @if(App\Series::getSeriesInfo($latest_series,'video_access')=='Paid')
                      <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                     @else
                     <a class="icon test-popup-link" href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}"><i class="flaticon-play-button"></i></a>
                      @endif   
                   @endif
                              </li>
                    {{-- <li><a href="{{ URL::to('series/'.$latest_series->series_name.'/'.$latest_series->id) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                    </li> --}}
                  </ul>
                </div>
              </div>
              <div class="prs_upcom_movie_content_box">
                <div class="prs_upcom_movie_content_box_inner">
                  <h2><a href="{{ URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id')) }}">{{Str::limit(stripslashes(App\Series::getSeriesInfo($latest_series,'series_name')),25) }}</a></h2>
                  {{-- <p><i class="fa fa-clock-o"></i> {{$latest_series->duration}}</p> --}}
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div> 
  
  {{-- @include('_particles.pagination', ['paginator' => explode(",",$latest_series)])      --}}
     
</div>
 
@endsection