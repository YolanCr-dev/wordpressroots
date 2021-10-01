<?php $__env->startSection('content'); ?>

<div class="about-wrapper">
    <h1><?php echo e($post->post_title); ?></h1>
    <?php echo $post->post_content; ?>

</div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>