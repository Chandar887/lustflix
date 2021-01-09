    <option value="">Select Season</option>
<?php $__currentLoopData = $season_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <option value="<?php echo e($season->id); ?>"><?php echo e($season->season_name); ?></option>    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\wamp64\www\kiwitv\resources\views/admin/pages/ajax_season_list.blade.php ENDPATH**/ ?>