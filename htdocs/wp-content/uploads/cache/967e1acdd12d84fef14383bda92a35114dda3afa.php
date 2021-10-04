<?php $__env->startSection('content'); ?>

<div class="page page-home">
    <section class="section hero">
        <div class="container">
            <h1>Earth was created <br>
                <b>for all of us</b>, <br>
                not some of us.</h1>
            <a href="#section_highlighted_products" class="btn btn-primary btn-lg" role="button" aria-pressed="true">I Agree</a>
            <a href="#about_biodiversity" id="link-about_biodiversity" class="btn"> Hmmm.. not sure</a>
        </div>
    </section>
    <section class="section highlighted_products" id="section_highlighted_products">
        <div class="container">
            <hgroup>
                <h2>Help reflourish our gardens</h2>
                <p>We can all do small actions to create big impacts. ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptas sed veniam? Vitae autem quod blanditiis perspiciatis provident delectus, nostrum repellat earum harum</p>
            </hgroup>

            <div class="highlighted_products-wrapper">

                <?php $__currentLoopData = $wcproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wcproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <a href="<?php echo e($wcproduct->get_permalink()); ?>" class="card-highlighted_product-wrapper">
                    <div class="card card-highlighted_product" style="background-color: <?php echo e(get_field('color', $wcproduct->get_id())); ?> ; background-image: url(<?php echo e(wp_get_attachment_url($wcproduct->get_image_id())); ?>)">
                        <h3> <?php echo e($wcproduct->get_title()); ?> </h3>
                        <span> €<?php echo e($wcproduct->get_price()); ?> </span>
                    </div>
                </a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <section class="section about_biodiversity" id="about_biodiversity">
        <div class="container">
            <hgroup>
                <h2>Why biodiversity is important</h2>
                <p>Biodiversity is important to humans for many reasons. Biodiversity is also considered by many to have intrinsic value—that is, each species has a value and a right to exist, whether or not it is known to have value to humans.</p>
            </hgroup>

            <article>
                <div class="text-left">
                    <ul>
                        <li>
                            <h5>Economic</h5>
                            <p>biodiversity provides humans with raw materials for consumption and production. Many livelihoods, such as those of farmers, fishers and timber workers, are dependent on biodiversity.</p>
                        </li>
                        <li>
                            <h5>Ecological Life Support</h5>
                            <p>biodiversity provides functioning ecosystems that supply oxygen, clean air and water, pollination of plants, pest control, wastewater treatment and many ecosystem services.</p>
                        </li>
                        <li>
                            <h5>Recreation</h5>
                            <p>many recreational pursuits rely on our unique biodiversity, such as birdwatching, hiking, camping and fishing. Our tourism industry also depends on biodiversity.</p>
                        </li>
                    </ul>
                </div>
                <figure>
                    <img src="http://wordpressroots.local/wp-content/uploads/2021/10/barometerlogo.png" alt="">
                    <button class="btn bt-large">Read Case Studies</button>
                </figure>
                <div class="text-right">
                    <ul>
                        <li>
                            <h5>Cultural</h5>
                            <p>the Australian culture is closely connected to biodiversity through the expression of identity, through spirituality and through aesthetic appreciation. Indigenous Australians have strong connections and obligations to biodiversity arising from spiritual beliefs about animals and plants.</p>
                        </li>
                        <li>
                            <h5>Scientific</h5>
                            <p>biodiversity represents a wealth of systematic ecological data that help us to understand the natural world and its origins.</p>
                        </li>
                        <li>
                            <h5>Moral reasons</h5>
                            <p>A culture that encourages respect and stewardship for wildlife and landscapes is preferable to a culture which does not take these things seriously.</p>
                        </li>
                    </ul>
                </div>
            </article>
            <p style="font-size: 0.8em; text-align: center; margin-top: 104px; color: rgba(0,0,0,0.3)">src: https://soe.environment.gov.au/theme/biodiversity/topic/2016/importance-biodiversity</p>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>