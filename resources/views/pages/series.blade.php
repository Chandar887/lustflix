@extends('site_app')

@section('head_title', trans('words.webseries').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
      <li> {{trans('words.webseries')}}
        <!-- {{trans('words.shows_text')}} -->
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




        {{-- web series section --}}
      <div class="container">  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tab-content">
            <div id="grid" class="tab-pane fade in active">
              <div class="row">
                @foreach($series_list as $series_data) 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 prs_upcom_slide_first">
                  <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                    <div class="prs_upcom_movie_img_box">
                      <img src="{{URL::to('upload/source/'.$series_data->series_poster)}}" alt="{{$series_data->series_name}}" />@if($series_data->video_access=='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif
                      <div class="prs_upcom_movie_img_overlay"></div>
                      <div class="prs_upcom_movie_img_btn_wrapper">
                        <ul>
                          <li>

                            @if(Auth::check())  
                            <a class="icon test-popup-link" href="{{ URL::to('series/'.$series_data->video_slug.'/'.$series_data->id) }}"><i class="flaticon-play-button"></i></a> 
                            
                            @else
                            @if($series_data->video_access=='Paid')
                            <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                           @else
                           <a class="icon test-popup-link" href="{{ URL::to('series/'.$series_data->series_name.'/'.$series_data->id) }}"><i class="flaticon-play-button"></i></a>
                            @endif  
                         @endif
                                    </li>
                          {{-- <li><a href="{{ URL::to('series/'.$series_data->series_name.'/'.$series_data->id) }}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
                    <div class="prs_upcom_movie_content_box">
                      <div class="prs_upcom_movie_content_box_inner">
                        <h2><a href="{{ URL::to('series/'.$series_data->series_name.'/'.$series_data->id) }}">{{Str::limit(stripslashes($series_data->series_name),25)}}</a></h2>
                        {{-- <p><i class="fa fa-clock-o"></i> {{$series_data->duration}}</p> --}}
                        
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div> 
        
        @include('_particles.pagination', ['paginator' => $series_list])     
           
      </div>  

      

        {{-- web series section ends--}}


 
@endsection