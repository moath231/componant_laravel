<?php $__env->startSection('content'); ?>
    <h1>users</h1>
    <a href="<?php echo e(route('users.create')); ?>">sginUp</a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title','users'); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/beat/resources/views/Users/index.blade.php ENDPATH**/ ?>