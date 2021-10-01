<?php $__env->startSection('content'); ?>

<div class="page page-home">
    <section class="section hero">
        <div class="container">
            <h1>Earth was created <br>
                <b>for all of us</b>, <br>
                not some of us.</h1>
            <a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">I Agree</a>
            <a href="#about_biodiversity" id="link-about_biodiversity" class="btn"> Hmmm.. not sure</a>
        </div>
    </section>
    <section class="section highlighted_products">
        <div class="container">
            <h2>Small Actions, Big Impacts</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptas sed veniam? Vitae autem quod blanditiis perspiciatis provident delectus, nostrum repellat earum harum! Debitis aspernatur placeat eius, iure accusantium natus?</p>
            <div class="highlighted_products-wrapper">
                <div class="card card-highlighted_product">
                    <h3>Yellow</h3>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>