<?php $__env->startSection('content'); ?>
  <h1>computer</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab recusandae mollitia praesentium. Maxime sit at amet
    aut facilis commodi nisi praesentium dolor aliquam voluptas. Consequatur, ad possimus dolorem magnam commodi vel
    vero dolores!</p>
  <a href="/computer/create">create</a>
  <?php if(count($computer) > 0): ?>

    <ul>
      <?php $__currentLoopData = $computer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('computer.show', [$com['id']])); ?>" style="text-decoration:none; color:black;">
          <li style="list-style: none;">
            <?php echo e($com['name']); ?> made in <?php echo e($com['origen']); ?> price: <?php echo e($com['price']); ?>

            <a style="margin-left:20px; text-decoration:none;" href="<?php echo e(route('computer.edit', [$com])); ?>">edit</a>
            
            <form action="<?php echo e(route('computer.destroy', [$com])); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <input type="submit" value="delete">
            </form>
          </li>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'computer'); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/beat/resources/views/computer/index.blade.php ENDPATH**/ ?>