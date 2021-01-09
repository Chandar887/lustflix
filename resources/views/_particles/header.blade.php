<!-- <nav class="navbar navbar-default" data-spy="affix" data-offset-top="220">
  <div class="container"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      @if(getcong('site_logo'))
        <a class="navbar-brand" href="{{ URL::to('/') }}"> <img src="{{ URL::asset('upload/source/'.getcong('site_logo')) }}" alt="Site Logo"> </a> 
      @else
        <a class="navbar-brand" href="{{ URL::to('/') }}"> <img src="{{ URL::asset('site_assets/images/template/logo.png') }}" alt="Site Logo"> </a>          
      @endif
      
  </div>
    <div class="collapse navbar-collapse" id="main-nav-collapse">      
      <ul class="nav navbar-nav navbar-left">   
      <li > <a href="{{ URL::to('/') }}"> Home -->
          <!-- {{trans('words.tv_shows_text')}} -->
        <!-- </a> 
        <li > <a href="{{ URL::to('originals') }}"> -->
          <!-- {{trans('words.movies_text')}} -->
           <!-- {{trans('words.original')}}
        </a>    
        <li > <a href="{{ URL::to('series') }}">  -->
          <!-- {{trans('words.tv_shows_text')}} -->
          <!-- {{trans('words.webseries')}}
        </a> -->
          <!-- <ul class="dropdown-menu">
            <li><a href="{{ URL::to('language/series') }}">{{trans('words.language_text')}}</a></li>
            <li><a href="{{ URL::to('genres/series') }}">{{trans('words.genres_text')}}</a></li> 
          </ul> -->
        <!-- </li>   -->
        
          <!-- <ul class="dropdown-menu">
            <li><a href="{{ URL::to('language/movies') }}">{{trans('words.language_text')}}</a></li>
            <li><a href="{{ URL::to('genres/movies') }}">{{trans('words.genres_text')}}</a></li> 
          </ul> -->
        <!-- </li>
        <li > <a href="{{ URL::to('short-films') }}"> -->
          <!-- {{trans('words.sports_text')}} -->
          <!-- {{trans('words.short_films')}}
        </a> -->
          <!-- <ul class="dropdown-menu">
            @foreach(\App\SportsCategory::where('status','1')->orderBy('category_name')->get() as $sports_cat)
            <li><a href="{{ URL::to('sports/'.$sports_cat->category_slug) }}">{{$sports_cat->category_name}}</a></li>
            @endforeach 
           </ul> -->
        <!-- </li>
        <li class="dropdown"> <a href="{{ URL::to('regional') }}">   -->
          <!-- {{trans('words.live_tv')}} -->
           <!-- {{trans('words.regional')}}
        </a>
          <ul class="dropdown-menu">
            @foreach(\App\TvCategory::where('status','1')->orderBy('category_name')->get() as $tv_cat)
            <li><a href="{{ URL::to('regional/'.$tv_cat->category_slug) }}">{{$tv_cat->category_name}}</a></li>
            @endforeach 
          </ul>
        </li>
         
      </ul>
      <div class="header_top_search">       
      {!! Form::open(array('url' => 'search','class'=>'navbar-form navbar-left','id'=>'search','role'=>'form','method'=>'get')) !!}  
        <input type="search" name="s" placeholder="{{trans('words.search')}}" required>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      {!! Form::close() !!}

     
      @if(Auth::check())

      @if(Auth::User()->usertype =="Admin" OR Auth::User()->usertype =="Sub_Admin")
      <div class="user-menu">
        <div class="user-name">
          <span>            
            @if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image)))
                  <img src="{{ URL::asset('upload/'.Auth::User()->user_image) }}" alt="profile_img">
            @else  
              <img src="{{ URL::asset('site_assets/images/avatar.jpg') }}" alt="profile_img">
            @endif  
          </span>
          Hi, {{ Str::limit(Auth::User()->name,6)}}</div>
        <ul class="content-user">
          <li><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i> {{trans('words.dashboard_text')}}</a></li>
          <li><a href="{{ URL::to('admin/logout') }}"><i class="fa fa-sign-out"></i> {{trans('words.logout')}}</a></li>
        </ul>
      </div>
      @else
      <div class="user-menu">
        <div class="user-name">
          <span>
            @if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image)))
                  <img src="{{ URL::asset('upload/'.Auth::User()->user_image) }}" alt="profile_img">
            @else  
              <img src="{{ URL::asset('site_assets/images/avatar.jpg') }}" alt="profile_img">
            @endif
          </span>
          Hi, {{ Str::limit(Auth::User()->name,6)}}</div>
        <ul class="content-user">
          <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> {{trans('words.dashboard_text')}}</a></li>       
           <li><a href="{{ URL::to('profile') }}"><i class="fa fa-cog"></i> {{trans('words.profile')}}</a></li>
          <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i> {{trans('words.logout')}}</a></li>
        </ul>
      </div>
      @endif

      @else

        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::to('login') }}" style="text-transform: uppercase;">{{trans('words.subscribe')}}</a></li>
        </ul> 
        
      @endif 
      
      </div>
    </div>
  </div>
</nav> -->

           <style>
 .bg_custom {
    background: linear-gradient(45deg, #f9f9f9 16%, #5b55f1 7%);
}
               
.prs_menu_main_wrapper {
    float: left;
    margin-left: 15%;
}

.sitelogo{
  width:120px; 
  height:55px;
}

@media only screen and (max-width: 600px) {
  .bg_custom {
    background: linear-gradient(45deg, #f9f9f9 48%, #5b55f1 13%);
}

.sitelogo{
  width:110px; 
  height:50px;
}
}
           </style>


<div class="prs_navigation_main_wrapper bg_custom">
		<div class="container-fluid">
			<div id="search_open" class="gc_search_box">
				<input type="text" placeholder="Search here">
				<button><i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</div>
			<div class="prs_navi_left_main_wrapper">
				<div class="prs_logo_main_wrapper">
					<!-- <a href="index.html">
						<img src="images/header/logo.png" alt="logo" />
					</a> -->
        @if(getcong('site_logo'))
          <a  href="{{ URL::to('/') }}"> <img src="{{ URL::asset('upload/source/'.getcong('site_logo')) }}" class="sitelogo" alt="Site Logo"> </a> 
        @else
          <a  href="{{ URL::to('/') }}"> <img src="{{ URL::asset('site_assets/images/template/logo.png') }}" class="sitelogo" alt="Site Logo"> </a>          
        @endif
				</div>
				<div class="prs_menu_main_wrapper">
					<nav class="">
						<div id="dl-menu" class="xv-menuwrapper responsive-menu">
							<!-- <button class="dl-trigger">
								<img src="images/header/bars.png" alt="bar_png">
							</button>
							<div class="prs_mobail_searchbar_wrapper" id="search_button">	<i class="fa fa-search"></i>
							</div>
							<div class="clearfix"></div> -->
							<ul class="dl-menu">
								<li class="parent"><a href="{{ URL::to('/') }}">Home</a>
									
								</li>
								<li class="parent"><a href="{{ URL::to('originals') }}">{{trans('words.original')}}</a>
									
								</li>
								<li class="parent"><a href="{{ URL::to('series') }}">{{trans('words.webseries')}}</a>
									
								</li>
								<li class="parent"><a href="{{ URL::to('short-films') }}">{{trans('words.short_films')}}</a>			
								</li>
								{{-- <li class="parent"><a href="#">{{trans('words.regional')}}</a>
									<ul class="lg-submenu">
										
                  @foreach(\App\TvCategory::where('status','1')->orderBy('category_name')->get() as $tv_cat)
            <li><a href="{{ URL::to('regional/'.$tv_cat->category_slug) }}">{{$tv_cat->category_name}}</a></li>
            @endforeach 
									</ul>
								</li> --}}
							
							</ul>
						</div>
						<!-- /dl-menuwrapper -->
					</nav>
				</div>
			</div>
			<div class="prs_navi_right_main_wrapper">
				<div class="prs_slidebar_wrapper">
					<button class="second-nav-toggler" type="button">
						<img src="{{asset('site_assets/images/header/bars.png')}}" alt="bar_png">
					</button>
				</div>
				<div class="prs_top_login_btn_wrapper">
					<div class="prs_animate_btn1">
						<ul>
            @if(Auth::check())

      @if(Auth::User()->usertype =="Admin" OR Auth::User()->usertype =="Sub_Admin")
      <div class="user-menu">
        <div class="user-name">
          <span>            
            @if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image)))
                  <img src="{{ URL::asset('upload/'.Auth::User()->user_image) }}" alt="profile_img">
            @else  
              <img src="{{ URL::asset('site_assets/images/avatar.jpg') }}" alt="profile_img">
            @endif  
          </span>
          Hi, {{ Str::limit(Auth::User()->name,6)}}</div>
        <ul class="content-user">
          <li><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i> {{trans('words.dashboard_text')}}</a></li>
          <li><a href="{{ URL::to('admin/logout') }}"><i class="fa fa-sign-out"></i> {{trans('words.logout')}}</a></li>
        </ul>
      </div>
      @else
      <div class="user-menu">
        <div class="user-name">
          <span>
            @if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image)))
                  <img src="{{ URL::asset('upload/'.Auth::User()->user_image) }}" alt="profile_img">
            @else  
              <img src="{{ URL::asset('site_assets/images/avatar.jpg') }}" alt="profile_img">
            @endif
          </span>
          Hi, {{ Str::limit(Auth::User()->name,6)}}</div>
        <ul class="content-user">
          <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> {{trans('words.dashboard_text')}}</a></li>       
           <li><a href="{{ URL::to('profile') }}"><i class="fa fa-cog"></i> {{trans('words.profile')}}</a></li>
          <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i> {{trans('words.logout')}}</a></li>
        </ul>
      </div>
      @endif
      @else
							<li><a href="{{ URL::to('login') }}" class="button button--tamaya" data-text="{{trans('words.subscribe')}}" ><span>{{trans('words.subscribe')}}</span></a>
							</li>
              @endif
						</ul>
					</div>
				</div>
				<div class="product-heading">
					<div class="con">
						
            {!! Form::open(array('url' => 'search','style'=> 'display:inline-flex','id'=>'search','role'=>'form','method'=>'get')) !!} 

						<input type="text" name="s" placeholder="{{trans('words.search')}}" required style="border-radius: 10px 0px 0px 10px;">
						<button type="submit" ><i class="flaticon-tool"></i>
						</button>
            {!! Form::close() !!}
					</div>
				</div>
			</div>
			<div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
				<div class="mobail_nav_overlay"></div>
				<div class="mobile-nav-box">
					<div class="mobile-logo">
						<a href="index.html" class="mobile-main-logo">
            <img src="{{ asset('Lustflix-logo_1.png') }}" style="width: 106px;height: 55px;margin-left: -20px;">
					
						</a>	
						<a href="#" class="manu-close"><i class="fa fa-times"></i></a>
					</div>
					<ul class="mobile-list-nav">
          <li class="parent"><a href="{{ URL::to('/') }}">Home</a>
									
                  </li>
                  <li class="parent"><a href="{{ URL::to('originals') }}">{{trans('words.original')}}</a>
                    
                  </li>
                  <li class="parent"><a href="{{ URL::to('series') }}">{{trans('words.webseries')}}</a>
                    
                  </li>
                  <li class="parent"><a href="{{ URL::to('short-films') }}">{{trans('words.short_films')}}</a>			
                  </li>
                
					</ul>
					<div class="product-heading prs_slidebar_searchbar_wrapper">
						<div class="con">
						
              {!! Form::open(array('url' => 'search','style'=> 'display:inline-flex','id'=>'search','role'=>'form','method'=>'get')) !!} 

              <input type="text" name="s" placeholder="{{trans('words.search')}}" required style="border-radius: 10px 0px 0px 10px;">
              <button type="submit" ><i class="flaticon-tool"></i>
              </button>
              {!! Form::close() !!}
						</div>
					</div>
					<div class="achivement-blog">
				
					</div>
					<div class="prs_top_login_btn_wrapper prs_slidebar_searchbar_btn_wrapper">
						<div class="prs_animate_btn1">
							<ul>
              @if(Auth::check())

@if(Auth::User()->usertype =="Admin" OR Auth::User()->usertype =="Sub_Admin")
<div class="user-menu">
  <div class="user-name" style="color:black;">
    <span>            
      @if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image)))
            <img src="{{ URL::asset('upload/'.Auth::User()->user_image) }}" alt="profile_img">
      @else  
        <img src="{{ URL::asset('site_assets/images/avatar.jpg') }}" alt="profile_img">
      @endif  
    </span>
    Hi, {{ Str::limit(Auth::User()->name,6)}}</div>
  <ul class="content-user">
    <li><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i> {{trans('words.dashboard_text')}}</a></li>
    <li><a href="{{ URL::to('admin/logout') }}"><i class="fa fa-sign-out"></i> {{trans('words.logout')}}</a></li>
  </ul>
</div>
@else
<div class="user-menu">
  <div class="user-name" style="color:black;>
    <span>
      @if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image)))
            <img src="{{ URL::asset('upload/'.Auth::User()->user_image) }}" alt="profile_img">
      @else  
        <img src="{{ URL::asset('site_assets/images/avatar.jpg') }}" alt="profile_img">
      @endif
    </span>
    Hi, {{ Str::limit(Auth::User()->name,6)}}</div>
  <ul class="content-user">
    <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> {{trans('words.dashboard_text')}}</a></li>       
     <li><a href="{{ URL::to('profile') }}"><i class="fa fa-cog"></i> {{trans('words.profile')}}</a></li>
    <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i> {{trans('words.logout')}}</a></li>
  </ul>
</div>
@endif
@else
        <li><a href="{{ URL::to('login') }}" class="button button--tamaya" data-text="{{trans('words.subscribe')}}" ><span>{{trans('words.subscribe')}}</span></a>
        </li>
        @endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>