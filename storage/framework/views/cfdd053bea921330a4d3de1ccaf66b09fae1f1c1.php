<?php $__env->startSection('head_title', trans('words.latest_shows').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
      <ul>
      <li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
      <li><?php echo e(trans('words.latest_shows')); ?></li>
      </ul>  
    </div>
    </div>
  </div>
</div>

<?php if(get_ads('shows_list_ad_top')->status!=0): ?>
        <div class="add_banner_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <?php echo get_ads('shows_list_ad_top')->ad_code; ?>

              </div>
            </div>
          </div>  
        </div>
        <?php endif; ?>

 <div class="main-wrap">
  <div class="section section-padding tv_show vfx_video_list_section text-white">
    <div class="container">
      <div class="row">
        <div class="show-listing series_listing_view">
      
        <?php $__currentLoopData = explode(",",$home_sections->section2_latest_series); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_series): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
          <?php if(App\Series::getSeriesInfo($latest_series,'status')==1): ?>


            <a href="<?php echo e(URL::to('series/'.App\Series::getSeriesInfo($latest_series,'series_slug').'/'.App\Series::getSeriesInfo($latest_series,'id'))); ?>">
            <div class="col-md-3 col-sm-4 col-xs-6 sm-top-30">
            <div class="vfx_upcomming_item_block"> 
              <img class="img-responsive" src="<?php echo e(URL::to('upload/source/'.App\Series::getSeriesInfo($latest_series,'series_poster'))); ?>" alt="show"> 
                <div class="vfx_upcomming_detail">
                  <h4 class="vfx_video_title"><?php echo e(Str::limit(stripslashes(App\Series::getSeriesInfo($latest_series,'series_name')),25)); ?></h4>
                 </div>            
             </div>                  
           </div>
           </a>  
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
          
        </div>    
      </div>
    </div>
  </div>
</div>

<?php if(get_ads('shows_list_ad_bottom')->status!=0): ?>
  <div class="add_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php echo get_ads('shows_list_ad_bottom')->ad_code; ?>

        </div>
      </div>
    </div>  
  </div>
  <?php endif; ?>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kiwitv_updated\resources\views/pages/series_latest.blade.php ENDPATH**/ ?>