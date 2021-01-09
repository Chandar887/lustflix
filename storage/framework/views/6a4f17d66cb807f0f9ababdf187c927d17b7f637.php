<?php $__env->startSection('head_title', trans('words.original').' | '.getcong('site_name') ); ?>

<?php $__env->startSection('head_url', Request::url()); ?>

<?php $__env->startSection('content'); ?>


<div class="page-header">
  <div class="vfx_page_header_overlay">
    <div class="container">
      <div class="vfx_breadcrumb">
		  <ul>
			<li><a href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('words.home')); ?></a></li>
			<li> <?php echo e(trans('words.original')); ?>

        <!-- <?php echo e(trans('words.movies_text')); ?> -->
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
		  <option value="?filter=new" <?php if(isset($_GET['filter']) && $_GET['filter']=='new' ): ?> selected <?php endif; ?>><?php echo e(trans('words.newest')); ?></option>
		  <option value="?filter=old" <?php if(isset($_GET['filter']) && $_GET['filter']=='old' ): ?> selected <?php endif; ?>><?php echo e(trans('words.oldest')); ?></option>
		  <option value="?filter=alpha" <?php if(isset($_GET['filter']) && $_GET['filter']=='alpha' ): ?> selected <?php endif; ?>><?php echo e(trans('words.a_to_z')); ?></option>
		  <option value="?filter=rand" <?php if(isset($_GET['filter']) && $_GET['filter']=='rand' ): ?> selected <?php endif; ?>><?php echo e(trans('words.random')); ?></option>
		</select> 
	  </div>      
	</div>
  </div>      
</div>

<?php if(get_ads('movie_list_ad_top')->status!=0): ?>
        <div class="add_banner_section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                
              </div>
            </div>
          </div>  
        </div>
        <?php endif; ?>


        
      <div class="container">  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="tab-content">
            <div id="grid" class="tab-pane fade in active">
              <div class="row">
                <?php $__currentLoopData = $movies_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 prs_upcom_slide_first">
                  <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                    <div class="prs_upcom_movie_img_box">
                      <img src="<?php echo e(URL::to('upload/source/'.$movies_data->video_image_thumb)); ?>" alt="<?php echo e($movies_data->video_title); ?>" />
                      <div class="prs_upcom_movie_img_overlay"></div>
                      <div class="prs_upcom_movie_img_btn_wrapper">
                        <ul>
                          
                          <li><a href="<?php echo e(URL::to('upload/source/'.$movies_data->video_image_thumb)); ?>" class="test-popup-link"><i class="flaticon-play-button"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="prs_upcom_movie_content_box">
                      <div class="prs_upcom_movie_content_box_inner">
                        <h2><a href="<?php echo e(URL::to('originals/'.$movies_data->video_title.'/'.$movies_data->id)); ?>"><?php echo e(Str::limit(stripslashes($movies_data->video_title),12)); ?></a></h2>
                        
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div> 
        
        <?php echo $__env->make('_particles.pagination', ['paginator' => $movies_list], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>     
      </div>  

        


 
    
    
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kiwitv\resources\views/pages/movies.blade.php ENDPATH**/ ?>