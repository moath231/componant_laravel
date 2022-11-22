<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(url('/app.css')); ?>">
    <script src="<?php echo e(url('/app.js')); ?>"></script>
    <title><?php echo $__env->yieldContent('title'); ?></title>

</head>

<body>

    <nav>
        <ul>
            <li><a href="<?php echo e(Route('home.index')); ?>">home</a></li>
            <li><a href="<?php echo e(Route('home.about')); ?>">about</a></li>
            <li><a href="<?php echo e(Route('home.contact')); ?>">contact</a></li>
            <li><a href="<?php echo e(Route('computer.index')); ?>">computer</a></li>
            <li><a href="<?php echo e(Route('users.index')); ?>">Users</a></li>
        </ul>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>

</body>

</html>
<?php /**PATH /opt/lampp/htdocs/beat/resources/views/master.blade.php ENDPATH**/ ?>