<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div> id:<?php echo e($row->id); ?>, name:<?php echo e($row->name); ?></div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\example-app\test2\resources\views/show.blade.php ENDPATH**/ ?>