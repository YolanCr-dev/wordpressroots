<?php if(!defined('ABSPATH')) { exit; } ?>

<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?>
<?php the_post() ?>
<?php echo $__env->make('woo.partials.single-product.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endwhile; ?>
<?php do_action('woocommerce_sidebar') ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>