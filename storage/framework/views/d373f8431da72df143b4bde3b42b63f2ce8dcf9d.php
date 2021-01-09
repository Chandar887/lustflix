<!-- <nav class="navbar navbar-default" data-spy="affix" data-offset-top="220">
  <div class="container"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <?php if(getcong('site_logo')): ?>
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"> <img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="Site Logo"> </a> 
      <?php else: ?>
        <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>"> <img src="<?php echo e(URL::asset('site_assets/images/template/logo.png')); ?>" alt="Site Logo"> </a>          
      <?php endif; ?>
      
  </div>
    <div class="collapse navbar-collapse" id="main-nav-collapse">      
      <ul class="nav navbar-nav navbar-left">   
      <li > <a href="<?php echo e(URL::to('/')); ?>"> Home -->
          <!-- <?php echo e(trans('words.tv_shows_text')); ?> -->
        <!-- </a> 
        <li > <a href="<?php echo e(URL::to('originals')); ?>"> -->
          <!-- <?php echo e(trans('words.movies_text')); ?> -->
           <!-- <?php echo e(trans('words.original')); ?>

        </a>    
        <li > <a href="<?php echo e(URL::to('series')); ?>">  -->
          <!-- <?php echo e(trans('words.tv_shows_text')); ?> -->
          <!-- <?php echo e(trans('words.webseries')); ?>

        </a> -->
          <!-- <ul class="dropdown-menu">
            <li><a href="<?php echo e(URL::to('language/series')); ?>"><?php echo e(trans('words.language_text')); ?></a></li>
            <li><a href="<?php echo e(URL::to('genres/series')); ?>"><?php echo e(trans('words.genres_text')); ?></a></li> 
          </ul> -->
        <!-- </li>   -->
        
          <!-- <ul class="dropdown-menu">
            <li><a href="<?php echo e(URL::to('language/movies')); ?>"><?php echo e(trans('words.language_text')); ?></a></li>
            <li><a href="<?php echo e(URL::to('genres/movies')); ?>"><?php echo e(trans('words.genres_text')); ?></a></li> 
          </ul> -->
        <!-- </li>
        <li > <a href="<?php echo e(URL::to('short-films')); ?>"> -->
          <!-- <?php echo e(trans('words.sports_text')); ?> -->
          <!-- <?php echo e(trans('words.short_films')); ?>

        </a> -->
          <!-- <ul class="dropdown-menu">
            <?php $__currentLoopData = \App\SportsCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sports_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(URL::to('sports/'.$sports_cat->category_slug)); ?>"><?php echo e($sports_cat->category_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
           </ul> -->
        <!-- </li>
        <li class="dropdown"> <a href="<?php echo e(URL::to('regional')); ?>">   -->
          <!-- <?php echo e(trans('words.live_tv')); ?> -->
           <!-- <?php echo e(trans('words.regional')); ?>

        </a>
          <ul class="dropdown-menu">
            <?php $__currentLoopData = \App\TvCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(URL::to('regional/'.$tv_cat->category_slug)); ?>"><?php echo e($tv_cat->category_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </ul>
        </li>
         
      </ul>
      <div class="header_top_search">       
      <?php echo Form::open(array('url' => 'search','class'=>'navbar-form navbar-left','id'=>'search','role'=>'form','method'=>'get')); ?>  
        <input type="search" name="s" placeholder="<?php echo e(trans('words.search')); ?>" required>
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      <?php echo Form::close(); ?>


     
      <?php if(Auth::check()): ?>

      <?php if(Auth::User()->usertype =="Admin" OR Auth::User()->usertype =="Sub_Admin"): ?>
      <div class="user-menu">
        <div class="user-name">
          <span>            
            <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
                  <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
            <?php else: ?>  
              <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
            <?php endif; ?>  
          </span>
          Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
        <ul class="content-user">
          <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
          <li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
        </ul>
      </div>
      <?php else: ?>
      <div class="user-menu">
        <div class="user-name">
          <span>
            <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
                  <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
            <?php else: ?>  
              <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
            <?php endif; ?>
          </span>
          Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
        <ul class="content-user">
          <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>       
           <li><a href="<?php echo e(URL::to('profile')); ?>"><i class="fa fa-cog"></i> <?php echo e(trans('words.profile')); ?></a></li>
          <li><a href="<?php echo e(URL::to('logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
        </ul>
      </div>
      <?php endif; ?>

      <?php else: ?>

        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(URL::to('login')); ?>" style="text-transform: uppercase;"><?php echo e(trans('words.subscribe')); ?></a></li>
        </ul> 
        
      <?php endif; ?> 
      
      </div>
    </div>
  </div>
</nav> -->




<div class="prs_navigation_main_wrapper" style="height: 100px;">
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
        <?php if(getcong('site_logo')): ?>
          <a  href="<?php echo e(URL::to('/')); ?>"> <img src="<?php echo e(URL::asset('upload/source/'.getcong('site_logo'))); ?>" alt="Site Logo"> </a> 
        <?php else: ?>
          <a  href="<?php echo e(URL::to('/')); ?>"> <img src="<?php echo e(URL::asset('site_assets/images/template/logo.png')); ?>" alt="Site Logo"> </a>          
        <?php endif; ?>
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
								<li class="parent"><a href="<?php echo e(URL::to('/')); ?>">Home</a>
									
								</li>
								<li class="parent"><a href="<?php echo e(URL::to('originals')); ?>"><?php echo e(trans('words.original')); ?></a>
									
								</li>
								<li class="parent"><a href="<?php echo e(URL::to('series')); ?>"><?php echo e(trans('words.webseries')); ?></a>
									
								</li>
								<li class="parent"><a href="<?php echo e(URL::to('short-films')); ?>"><?php echo e(trans('words.short_films')); ?></a>			
								</li>
								<li class="parent"><a href="#"><?php echo e(trans('words.regional')); ?></a>
									<ul class="lg-submenu">
										
                  <?php $__currentLoopData = \App\TvCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(URL::to('regional/'.$tv_cat->category_slug)); ?>"><?php echo e($tv_cat->category_name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
									</ul>
								</li>
							
							</ul>
						</div>
						<!-- /dl-menuwrapper -->
					</nav>
				</div>
			</div>
			<div class="prs_navi_right_main_wrapper">
				<div class="prs_slidebar_wrapper">
					<button class="second-nav-toggler" type="button">
						<img src="<?php echo e(asset('site_assets/images/header/bars.png')); ?>" alt="bar_png">
					</button>
				</div>
				<div class="prs_top_login_btn_wrapper">
					<div class="prs_animate_btn1">
						<ul>
            <?php if(Auth::check()): ?>

      <?php if(Auth::User()->usertype =="Admin" OR Auth::User()->usertype =="Sub_Admin"): ?>
      <div class="user-menu">
        <div class="user-name">
          <span>            
            <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
                  <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
            <?php else: ?>  
              <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
            <?php endif; ?>  
          </span>
          Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
        <ul class="content-user">
          <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
          <li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
        </ul>
      </div>
      <?php else: ?>
      <div class="user-menu">
        <div class="user-name">
          <span>
            <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
                  <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
            <?php else: ?>  
              <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
            <?php endif; ?>
          </span>
          Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
        <ul class="content-user">
          <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>       
           <li><a href="<?php echo e(URL::to('profile')); ?>"><i class="fa fa-cog"></i> <?php echo e(trans('words.profile')); ?></a></li>
          <li><a href="<?php echo e(URL::to('logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
        </ul>
      </div>
      <?php endif; ?>
      <?php else: ?>
							<li><a href="<?php echo e(URL::to('login')); ?>" class="button button--tamaya" data-text="<?php echo e(trans('words.subscribe')); ?>" ><span><?php echo e(trans('words.subscribe')); ?></span></a>
							</li>
              <?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="product-heading">
					<div class="con">
						<!-- <select >
							<option>All Categories</option>
							<option>Movie</option>
							<option>Video</option>
							<option>Music</option>
							<option>TV-Show</option>
						</select> -->
            <?php echo Form::open(array('url' => 'search','style'=> 'display:inline-flex','id'=>'search','role'=>'form','method'=>'get')); ?> 

						<input type="text" name="s" placeholder="<?php echo e(trans('words.search')); ?>" required style="border-radius: 10px 0px 0px 10px;">
						<button type="submit" ><i class="flaticon-tool"></i>
						</button>
            <?php echo Form::close(); ?>

					</div>
				</div>
			</div>
			<div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
				<div class="mobail_nav_overlay"></div>
				<div class="mobile-nav-box">
					<div class="mobile-logo">
						<a href="index.html" class="mobile-main-logo">
            <img src="<?php echo e(asset('kiwitv.png')); ?>" style="width: 125px; height: 80px; margin-left: -28px;">
						

						</a>	
						<a href="#" class="manu-close"><i class="fa fa-times"></i></a>
					</div>
					<ul class="mobile-list-nav">
          <li class="parent"><a href="<?php echo e(URL::to('/')); ?>">Home</a>
									
                  </li>
                  <li class="parent"><a href="<?php echo e(URL::to('originals')); ?>"><?php echo e(trans('words.original')); ?></a>
                    
                  </li>
                  <li class="parent"><a href="<?php echo e(URL::to('series')); ?>"><?php echo e(trans('words.webseries')); ?></a>
                    
                  </li>
                  <li class="parent"><a href="<?php echo e(URL::to('short-films')); ?>"><?php echo e(trans('words.short_films')); ?></a>			
                  </li>
                  <!-- <li class="parent"><a href="#"><?php echo e(trans('words.regional')); ?></a>
                    <ul class="mobile-list-menu">
                      
                    <?php $__currentLoopData = \App\TvCategory::where('status','1')->orderBy('category_name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(URL::to('regional/'.$tv_cat->category_slug)); ?>"><?php echo e($tv_cat->category_name); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </ul>
                  </li> -->
					</ul>
					<div class="product-heading prs_slidebar_searchbar_wrapper">
						<div class="con">
							<!-- <select>
								<option>All Categories</option>
								<option>Movie</option>
								<option>Video</option>
								<option>Music</option>
								<option>TV-Show</option>
							</select> -->
              <?php echo Form::open(array('url' => 'search','style'=> 'display:inline-flex','id'=>'search','role'=>'form','method'=>'get')); ?> 

              <input type="text" name="s" placeholder="<?php echo e(trans('words.search')); ?>" required style="border-radius: 10px 0px 0px 10px;">
              <button type="submit" ><i class="flaticon-tool"></i>
              </button>
              <?php echo Form::close(); ?>

						</div>
					</div>
					<div class="achivement-blog">
						<!-- <ul class="flat-list">
							<li>
								<a href="#">	<i class="fa fa-facebook"></i>
									<h6>Facebook</h6>
									<span class="counter">12546</span>
								</a>
							</li>
							<li>
								<a href="#">	<i class="fa fa-twitter"></i>
									<h6>Twiter</h6>
									<span class="counter">12546</span>
								</a>
							</li>
							<li>
								<a href="#">	<i class="fa fa-pinterest"></i>
									<h6>Pinterest</h6>
									<span class="counter">12546</span>
								</a>
							</li>
						</ul> -->
					</div>
					<div class="prs_top_login_btn_wrapper prs_slidebar_searchbar_btn_wrapper">
						<div class="prs_animate_btn1">
							<ul>
              <?php if(Auth::check()): ?>

<?php if(Auth::User()->usertype =="Admin" OR Auth::User()->usertype =="Sub_Admin"): ?>
<div class="user-menu">
  <div class="user-name" style="color:black;">
    <span>            
      <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
            <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
      <?php else: ?>  
        <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
      <?php endif; ?>  
    </span>
    Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
  <ul class="content-user">
    <li><a href="<?php echo e(URL::to('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>
    <li><a href="<?php echo e(URL::to('admin/logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
  </ul>
</div>
<?php else: ?>
<div class="user-menu">
  <div class="user-name" style="color:black;>
    <span>
      <?php if(Auth::User()->user_image AND file_exists(public_path('upload/'.Auth::User()->user_image))): ?>
            <img src="<?php echo e(URL::asset('upload/'.Auth::User()->user_image)); ?>" alt="profile_img">
      <?php else: ?>  
        <img src="<?php echo e(URL::asset('site_assets/images/avatar.jpg')); ?>" alt="profile_img">
      <?php endif; ?>
    </span>
    Hi, <?php echo e(Str::limit(Auth::User()->name,6)); ?></div>
  <ul class="content-user">
    <li><a href="<?php echo e(URL::to('dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('words.dashboard_text')); ?></a></li>       
     <li><a href="<?php echo e(URL::to('profile')); ?>"><i class="fa fa-cog"></i> <?php echo e(trans('words.profile')); ?></a></li>
    <li><a href="<?php echo e(URL::to('logout')); ?>"><i class="fa fa-sign-out"></i> <?php echo e(trans('words.logout')); ?></a></li>
  </ul>
</div>
<?php endif; ?>
<?php else: ?>
        <li><a href="<?php echo e(URL::to('login')); ?>" class="button button--tamaya" data-text="<?php echo e(trans('words.subscribe')); ?>" ><span><?php echo e(trans('words.subscribe')); ?></span></a>
        </li>
        <?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><?php /**PATH C:\wamp64\www\kiwitv\resources\views/_particles/header.blade.php ENDPATH**/ ?>