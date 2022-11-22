<?php $__env->startSection('content'); ?>
    <h1>cteate new computer</h1>

    <form action="<?php echo e(route('computer.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">name</label>
        <input type="text" name="comname" id="comname" value="<?php echo e(old('comname')); ?>">
        <?php $__errorArgs = ['comname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <label for="">oragin</label>
        <input type="text" name="comoragin" id="comoragin" value="<?php echo e(old('comoragin')); ?>">
        <?php $__errorArgs = ['comoragin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <label for="">price</label>
        <input type="text" name="comprice" id="comprice" value="<?php echo e(old('comprice')); ?>">
        <?php $__errorArgs = ['comprice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title','create'); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/beat/resources/views/computer/create.blade.php ENDPATH**/ ?>