

<form action="<?php echo e(route('insert_query')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name">
    <input type="submit" name="submit">
</form><?php /**PATH C:\xampp\htdocs\example-app\test2\resources\views/test.blade.php ENDPATH**/ ?>