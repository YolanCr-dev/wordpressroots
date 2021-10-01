<div class="content-single-partners">
    <article <?php post_class() ?>>
        <div class="container">
            <header>
                <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
                <a href="./partners">Back to overview</a>
            </header>
            <div class="entry-content">
                <div class="d-flex">
                    <div class="content-left">
                        <figure>
                            <img src="<?php echo e($partner->featured_img_url); ?>" alt="<?php echo e($partner->name); ?>" />
                        </figure>
                    </div>
                    <div class="content-right">
                        <ul class="partner_metadata">
                            <li>
                                <b>Type</b> | <?php echo e($partner->type); ?>

                            </li>
                            <li>
                                <b>website</b> | <?php echo e($partner->url); ?>

                            </li>
                            <li>
                                <b>logo</b> | <?php echo e($partner->type); ?>

                            </li>
                        </ul>
                        <?php echo $partner->full_description; ?>

                    </div>
                </div>
            </div>
        </div>
    </article>
    <section class="section section-become_partner">
        <div class="container">
            <h3>Want to become an affiliate partner?</h3>
            <button id="btn-become_partner" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-become_partner">
                Sign up for partnership
            </button>
        </div>
    </section>
</div>
