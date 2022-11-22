<?php $__env->startSection('content'); ?>
    <h1>edit the computer</h1>

    <form action="<?php echo e(route('computer.update',$computer)); ?>" method="POST">
        <?php echo e(method_field('PUT')); ?>

        <?php echo csrf_field(); ?>
        <label for="">name</label>
        <input type="text" name="comname" value="<?php echo e($computer['name']); ?>" id="comname"><br>
        <label for="">oragin</label>
        <input type="text" name="comoragin" value="<?php echo e($computer['origan']); ?>" id="comoragin"><br>
        <label for="">price</label>
        <input type="text" name="comprice" value="<?php echo e($computer -> price); ?>" id="comprice"><br>
        <?php $__errorArgs = ['comprice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($error); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title','edit'); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/beat/resources/views/computer/edit.blade.php ENDPATH**/ ?>