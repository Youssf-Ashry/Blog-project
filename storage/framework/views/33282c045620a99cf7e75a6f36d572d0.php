<h1>Create New Post</h1>
<form action="<?php echo e(route('posts.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="body" placeholder="Body" required></textarea>
    <button type="submit">Create Post</button>
</form><?php /**PATH C:\xampp\htdocs\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>