@extends('site_app')

@section('head_title', trans('words.short_films').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
      <li> Short Films
        <!-- {{trans('words.sports_text')}} -->
      </li>
      </ul>  
    </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="custom_select_filter">
          <div class="custom-select">
            <select id="filter_list" class="selectpicker show-tick form-control is-invalid form-control-lg" required>
              <option value="?filter=new" @if(isset($_GET['filter']) && $_GET['filter']=='new' ) selected @endif>{{trans('words.newest')}}</option>
            <option value="?filter=old" @if(isset($_GET['filter']) && $_GET['filter']=='old' ) selected @endif>{{trans('words.oldest')}}</option>
            <option value="?filter=alpha" @if(isset($_GET['filter']) && $_GET['filter']=='alpha' ) selected @endif>{{trans('words.a_to_z')}}</option>
            <option value="?filter=rand" @if(isset($_GET['filter']) && $_GET['filter']=='rand' ) selected @endif>{{trans('words.random')}}</option>
            </select> 
          </div>      
        </div>
    </div>      
</div>    
        
        {{-- @if(get_ads('sports_video_ad_top')->status!=0)
        <div class="add_banner_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12"> --}}
                {{-- {!!get_ads('sports_video_ad_top')->ad_code!!} --}}
              {{-- </div>
            </div>
          </div>  
        </div>
        @endif --}}


        {{-- short-films section --}}
      <div class="container">  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tab-content">
            <div id="grid" class="tab-pane fade in active">
              <div class="row">
                @foreach($sports_video_list as $sports_video) 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 prs_upcom_slide_first">
                  <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                    <div class="prs_upcom_movie_img_box">
                      <img src="{{URL::to('upload/source/'.$sports_video->video_image)}}" alt="{{$sports_video->video_title}}" />@if($sports_video->video_access=='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif
                      <div class="prs_upcom_movie_img_overlay"></div>
                      <div class="prs_upcom_movie_img_btn_wrapper">
                        <ul>
                          
                          <li>

                            @if(Auth::check())  
                            <a class="icon test-popup-link" href="{{ URL::to('short-films/'.$sports_video->video_slug.'/'.$sports_video->id) }}"><i class="flaticon-play-button"></i></a> 
                            
                            @else
                            @if($sports_video->video_access=='Paid')
                            <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                           @else
                           <a class="icon test-popup-link" href="{{ URL::to('short-films/'.$sports_video->video_title.'/'.$sports_video->id) }}"><i class="flaticon-play-button"></i></a>
                            @endif  
                            @endif
                            </li>

                          {{-- <li><a href="{{ URL::to('short-films/'.$sports_video->video_title.'/'.$sports_video->id) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
                    <div class="prs_upcom_movie_content_box">
                      <div class="prs_upcom_movie_content_box_inner">
                        <h2><a href="{{ URL::to('short-films/'.$sports_video->video_slug.'/'.$sports_video->id) }}">{{Str::limit(stripslashes($sports_video->video_title),25)}}</a></h2>
                        {{-- <p><i class="fa fa-clock-o"></i> {{$sports_video->duration}}</p> --}}
                        
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div> 
        
        @include('_particles.pagination', ['paginator' => $sports_video_list])     
      </div>  

        {{-- short-films section ends--}}


      {{-- @if(get_ads('sports_video_ad_bottom')->status!=0)
        <div class="add_banner_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                {{-- {!!get_ads('sports_video_ad_bottom')->ad_code!!} --}}
              {{-- </div>
            </div>
          </div>  
        </div> --}}
        {{-- @endif   --}} --}}
 
@endsection