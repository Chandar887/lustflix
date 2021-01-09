@extends('site_app')

@section('head_title', trans('words.original').' | '.getcong('site_name') )

@section('head_url', Request::url())

@section('content')


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
		  <ul>
			<li><a href="{{ URL::to('/') }}">{{trans('words.home')}}</a></li>
			<li> {{trans('words.original')}}
        <!-- {{trans('words.movies_text')}} -->
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


        {{-- originals section --}}
      <div class="container">  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tab-content">
            <div id="grid" class="tab-pane fade in active">
              <div class="row">
                @foreach($movies_list as $movies_data) 
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 prs_upcom_slide_first">
                  <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                    <div class="prs_upcom_movie_img_box">
                      <img src="{{URL::to('upload/source/'.$movies_data->video_image_thumb)}}" alt="{{$movies_data->video_title}}" />@if($movies_data->video_access =='Paid')<span class="premium_video"><i class="fa fa-lock"></i>Premium</span>@endif
                      <div class="prs_upcom_movie_img_overlay"></div>
                      <div class="prs_upcom_movie_img_btn_wrapper">
                       
                        <ul>
                          <li>

                              @if(Auth::check())  
                              <a class="icon test-popup-link" href="{{ URL::to('originals/'.$movies_data->video_slug.'/'.$movies_data->id) }}"><i class="flaticon-play-button"></i></a> 
                              
                              @else
                              @if($movies_data->video_access=='Paid')
                              <a class="icon test-popup-link" href="Javascript::void();" data-toggle="modal" data-target="#loginAlertModal"><i class="flaticon-play-button"></i></a>
                             @else
                             <a class="icon test-popup-link" href="{{ URL::to('originals/'.$movies_data->video_slug.'/'.$movies_data->id) }}"><i class="flaticon-play-button"></i></a>
                              @endif  
                           @endif
                                      </li>
                                      <!-- <li><a href="#">View Details</a> -->
                          
                      </ul>

                        {{-- <ul>
                          <li><a href="{{URL::to('upload/source/'.$movies_data->video_image_thumb)}}" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                          </li>
                        </ul> --}}
                        
                      </div>
                    </div>
                    <div class="prs_upcom_movie_content_box">
                      <div class="prs_upcom_movie_content_box_inner">
                        <h2><a href="{{ URL::to('originals/'.$movies_data->video_title.'/'.$movies_data->id) }}">{{Str::limit(stripslashes($movies_data->video_title),12)}}</a></h2>
                        {{-- <p><i class="fa fa-clock-o"></i> {{$movies_data->duration}}</p> --}}
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
               
                @endforeach
              </div>
            </div>
          </div>
        </div> 
        
        @include('_particles.pagination', ['paginator' => $movies_list])     
      </div>  

        {{-- originals section ends--}}
 
@endsection