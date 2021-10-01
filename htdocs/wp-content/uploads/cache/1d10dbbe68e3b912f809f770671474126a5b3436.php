<?php $__env->startSection('content'); ?>

<div class="page-partners">
    <section class="section partners-hero">
        <div class="container">
            <h1><?php echo e($post->post_title); ?></h1>
            <!--Post object is made available and shared by sage in setup.php-->
        </div>
    </section>

    <section class="section partners-wrapper">
        <div class="container">

            <!--All WP_Query code is handled in controller to seperate front & back-end -->

            <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card-partner-wrapper">

                <div class="card card-partner">
                    <div class="card-img">
                        <img class="card-img-top" src="<?php echo e($partner->logo_url); ?>" alt="<?php echo e($partner->logo_alt); ?>">
                    </div>
                    <div class="card-body">
                        <div class="card-body-text">
                            <span><?php echo e($partner->type[0]); ?> Partner</span>
                            <h3 class="card-title"><?php echo e($partner->name); ?></h3>
                            <p class="card-text"><?php echo e($partner->short_description); ?></p>
                            <a target="_blank" href="<?php echo e($partner->url); ?>">Go to partners website >></a>
                        </div>
                        <div class="card-body-action">
                            <a href="<?php echo e($partner->permalink); ?>" class="btn btn-primary">About our partnership</a>
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>