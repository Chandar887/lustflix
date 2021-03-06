<?php $__env->startSection("content"); ?>

<style type="text/css">
  .iframe-container {
  overflow: hidden;
  padding-top: 56.25% !important;
  position: relative;
}
 
.iframe-container iframe {
   border: 0;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
}
</style>
 
  <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-box">
                 
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if(Session::has('flash_message')): ?>
                      <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                          <?php echo e(Session::get('flash_message')); ?>

                      </div>
                <?php endif; ?>
                

                 <?php echo Form::open(array('url' => array('admin/home_section'),'class'=>'form-horizontal','name'=>'settings_form','id'=>'settings_form','role'=>'form','enctype' => 'multipart/form-data')); ?>  
                  
                  <input type="hidden" name="id" value="<?php echo e(isset($home_settings->id) ? $home_settings->id : null); ?>">
  
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section_1_originals')); ?>*</label>
                    <div class="col-sm-8">
                      <select name="section1_latest_movie[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Select Movies...">
                                 <?php $__currentLoopData = $movies_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($movies_data->id); ?>" <?php if(in_array($movies_data->id, explode(",",$home_settings->section1_latest_movie))): ?> selected <?php endif; ?>><?php echo e($movies_data->video_title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section_2_webseries')); ?>*</label>
                    <div class="col-sm-8">
                      <select name="section2_latest_series[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Select Series...">
                                 <?php $__currentLoopData = $series_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($series_data->id); ?>" <?php if(in_array($series_data->id, explode(",",$home_settings->section2_latest_series))): ?> selected <?php endif; ?>><?php echo e($series_data->series_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section_3_polular_movies')); ?>*</label>
                    <div class="col-sm-8">
                      <select name="section3_popular_movie[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Select Movies...">
                                 <?php $__currentLoopData = $movies_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($movies_data->id); ?>" <?php if(in_array($movies_data->id, explode(",",$home_settings->section3_popular_movie))): ?> selected <?php endif; ?>><?php echo e($movies_data->video_title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section_4_popular_series')); ?>*</label>
                    <div class="col-sm-8">
                      <select name="section3_popular_series[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Select Series...">
                                 <?php $__currentLoopData = $series_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $series_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($series_data->id); ?>" <?php if(in_array($series_data->id, explode(",",$home_settings->section3_popular_series))): ?> selected <?php endif; ?>><?php echo e($series_data->series_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                  </div> -->

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section6_short_films')); ?>*</label>
                    <div class="col-sm-8">
                      <select name="section6_short_films[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Select Video...">
                                 <?php $__currentLoopData = $short_film_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $short_film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php echo e($short_film); ?>;
                                 die;
                                  <option value="<?php echo e($short_film->id); ?>" <?php if(in_array($short_film->id, explode(",",$home_settings->section6_short_films))): ?> selected <?php endif; ?>><?php echo e($short_film->video_title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section7_regional')); ?>*</label>
                    <div class="col-sm-8">
                      <select name="section7_regional[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Select Video...">
                                 <?php $__currentLoopData = $regional_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $regional_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($regional_data->id); ?>" <?php if(in_array($regional_data->id, explode(",",$home_settings->section7_regional))): ?> selected <?php endif; ?>><?php echo e($regional_data->channel_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                  </div>
                  <hr/>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section_5_title')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="section3_title" value="<?php echo e(isset($home_settings->section3_title) ? $home_settings->section3_title : null); ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.type')); ?>*</label>
                      <div class="col-sm-8">
                            <select class="form-control" name="section3_type">
                                <option value="Movie" <?php if(isset($home_settings->section3_type) AND $home_settings->section3_type=='Movie'): ?> selected <?php endif; ?>>Originals</option>
                                <option value="Series" <?php if(isset($home_settings->section3_type) AND $home_settings->section3_type=='Series'): ?> selected <?php endif; ?>>Series</option>                            
                            </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.language_text')); ?></label>
                      <div class="col-sm-8">
                             <select class="form-control select2" name="section3_lang">
                                <option value=""><?php echo e(trans('words.select_lang')); ?></option>
                                <?php $__currentLoopData = $language_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($language_data->id); ?>" <?php if(isset($home_settings->id) && $language_data->id==$home_settings->section3_lang): ?> selected <?php endif; ?>><?php echo e($language_data->language_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                      </div>
                  </div>

                  <hr/>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section_6_title')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="section4_title" value="<?php echo e(isset($home_settings->section4_title) ? $home_settings->section4_title : null); ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.type')); ?>*</label>
                      <div class="col-sm-8">
                            <select class="form-control" name="section4_type">
                                <option value="Movie" <?php if(isset($home_settings->section4_type) AND $home_settings->section4_type=='Movie'): ?> selected <?php endif; ?>>Originals</option>
                                <option value="Series" <?php if(isset($home_settings->section4_type) AND $home_settings->section4_type=='Series'): ?> selected <?php endif; ?>>Series</option>                            
                            </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.language_text')); ?></label>
                      <div class="col-sm-8">
                             <select class="form-control select2" name="section4_lang">
                                <option value=""><?php echo e(trans('words.select_lang')); ?></option>
                                <?php $__currentLoopData = $language_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($language_data->id); ?>" <?php if(isset($home_settings->id) && $language_data->id==$home_settings->section4_lang): ?> selected <?php endif; ?>><?php echo e($language_data->language_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                      </div>
                  </div>

                  <hr/>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.section_7_title')); ?>*</label>
                    <div class="col-sm-8">
                      <input type="text" name="section5_title" value="<?php echo e(isset($home_settings->section5_title) ? $home_settings->section5_title : null); ?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.type')); ?>*</label>
                      <div class="col-sm-8">
                            <select class="form-control" name="section5_type">
                                <option value="Movie" <?php if(isset($home_settings->section5_type) AND $home_settings->section5_type=='Movie'): ?> selected <?php endif; ?>>Originals</option>
                                <option value="Series" <?php if(isset($home_settings->section5_type) AND $home_settings->section5_type=='Series'): ?> selected <?php endif; ?>>Series</option>                            
                            </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><?php echo e(trans('words.language_text')); ?></label>
                      <div class="col-sm-8">
                             <select class="form-control select2" name="section5_lang">
                                <option value=""><?php echo e(trans('words.select_lang')); ?></option>
                                <?php $__currentLoopData = $language_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($language_data->id); ?>" <?php if(isset($home_settings->id) && $language_data->id==$home_settings->section5_lang): ?> selected <?php endif; ?>><?php echo e($language_data->language_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                      </div>
                  </div>
  
                  <div class="form-group">
                    <div class="offset-sm-3 col-sm-9">
                      <button type="submit" class="btn btn-primary waves-effect waves-light"> <?php echo e(trans('words.save')); ?> </button>                      
                    </div>
                  </div>
                <?php echo Form::close(); ?> 
              </div>
            </div>            
          </div>              
        </div>
      </div>
      <?php echo $__env->make("admin.copyright", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    </div> 
 
<!--  Poster -->
<div id="model_poster" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" style="max-width: 900px;">
        <div class="modal-content">             
            <div class="modal-body">
               <div class="iframe-container">
               <iframe src="<?php echo e(URL::to('responsive_filemanager/filemanager/dialog.php?type=2&field_id=slider_image&relative_url=1')); ?>" frameborder="0"></iframe>
               </div>
            </div>
        </div> 
    </div> 
</div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.admin_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\video_script_new\resources\views/admin/pages/home_section.blade.php ENDPATH**/ ?>