<?php

/**
 * Template Name: Inicio
 *
 * @package bisara
 * @subpackage bisara-mk01-theme
 * @since Mk. 1.0
 */
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="main-hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <article class="main-hero-content col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </article>
                    <picture class="main-hero-picture col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    </picture>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>