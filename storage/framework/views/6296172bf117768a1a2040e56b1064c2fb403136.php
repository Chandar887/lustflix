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
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="46.996px" height="40px" viewBox="0 0 46.996 40" enable-background="new 0 0 46.996 40" xml:space="preserve">
<g>
	<g>
		<path  d="M39.919,19.833C39.919,8.88,30.984,0,19.959,0C8.937,0,0,8.88,0,19.833
			c0,10.954,8.937,19.834,19.959,19.834C30.984,39.666,39.919,30.787,39.919,19.833z M35.675,14.425
			c0.379,0,0.686,0.307,0.686,0.683s-0.305,0.683-0.686,0.683c-0.38,0-0.688-0.307-0.688-0.683S35.295,14.425,35.675,14.425z
			 M34.482,20.461c0,0.491-0.025,0.976-0.071,1.452l-11.214-4.512l6.396-7.733C32.592,12.311,34.482,16.167,34.482,20.461z
			 M19.083,2.277c0.379,0,0.687,0.305,0.687,0.682c0,0.378-0.306,0.684-0.687,0.684c-0.378,0-0.686-0.306-0.686-0.684
			C18.396,2.584,18.704,2.277,19.083,2.277z M19.959,6.031c1.916,0,3.743,0.372,5.416,1.042l-6.335,7.662l-6.252-6.82
			C14.906,6.718,17.351,6.031,19.959,6.031z M3.128,16.473c-0.378,0-0.687-0.306-0.687-0.684c0-0.377,0.307-0.682,0.687-0.682
			c0.38,0,0.686,0.305,0.686,0.682C3.814,16.167,3.508,16.473,3.128,16.473z M5.535,22.119c-0.063-0.545-0.098-1.098-0.098-1.658
			c0-3.612,1.339-6.911,3.547-9.444l6.502,7.095L5.535,22.119z M10.462,35.354c-0.379,0-0.687-0.306-0.687-0.683
			s0.307-0.682,0.687-0.682c0.379,0,0.687,0.305,0.687,0.682S10.842,35.354,10.462,35.354z M6.925,26.828l10.4-4.186l0.239,12.052
			C12.88,33.921,8.956,30.922,6.925,26.828z M19.513,22.326c-1.529,0-2.771-1.232-2.771-2.752c0-1.521,1.241-2.753,2.771-2.753
			c1.53,0,2.771,1.232,2.771,2.753C22.284,21.096,21.043,22.326,19.513,22.326z M29.939,33.99c-0.378,0-0.686-0.308-0.686-0.683
			c0-0.377,0.307-0.683,0.686-0.683s0.688,0.306,0.688,0.683C30.626,33.683,30.319,33.99,29.939,33.99z M22.482,34.672
			l-0.246-12.388l10.846,4.365C31.098,30.799,27.177,33.854,22.482,34.672z M35.314,34.585c-1.837,1.531-6.061,4.306-6.061,4.306
			C37.652,36.448,45.953,40,45.953,40l1.043-8.658C41.41,30.454,38.125,32.244,35.314,34.585z"/>
	</g>
</g>
</svg><span>Movie Pro</span>
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
	</div><?php /**PATH C:\xampp\htdocs\kiwitv_updated\resources\views/_particles/header.blade.php ENDPATH**/ ?>