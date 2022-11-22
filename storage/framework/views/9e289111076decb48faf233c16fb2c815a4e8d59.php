<?php $__env->startSection('content'); ?>
    <h1>show</h1>

    <h2><?php echo e($computer['name']); ?> made in <?php echo e($computer['origen']); ?> price is <?php echo e($computer['price']); ?></h2>

    <a href="/computer">back</a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title','show'); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/beat/resources/views/computer/show.blade.php ENDPATH**/ ?>