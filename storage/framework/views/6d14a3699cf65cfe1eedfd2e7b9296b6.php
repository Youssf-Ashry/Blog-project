<!DOCTYPE html>
<html>
<head>
    <title>Blog Home</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <h2><?php echo e($post->title); ?></h2>
            <p><?php echo e($post->body); ?></p>
            <a href="<?php echo e(route('posts.show', $post)); ?>">Read More</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>