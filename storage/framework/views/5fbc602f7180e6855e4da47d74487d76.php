
<h1><?php echo e($post->title); ?></h1>
<p><?php echo e($post->body); ?></p>

<h2>Comments</h2>
<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <p><?php echo e($comment->body); ?></p>
        <small>By <?php echo e($comment->user->name); ?></small>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<form action="<?php echo e(route('comments.store', $post)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <textarea name="body" required></textarea>
    <button type="submit">Add Comment</button>
</form><?php /**PATH C:\xampp\htdocs\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>