<?php $__env->startSection('content'); ?>
    <form class="formsginup" action="<?php echo e(route('users.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">
            name
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>">
        </label>
        <label for="">
            username
            <input type="text" name="username" id="username">
        </label>
        <label for="">
            email
            <input type="email" name="email" id="email">
        </label>
        <label for="">
            password
            <input type="password" name="password" id="password">
        </label>
        <label for="">
            repet password
            <input type="password" name="passwordretry" id="passwordretry">
        </label>

        <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title','sginup'); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/beat/resources/views/Users/sginUp.blade.php ENDPATH**/ ?>