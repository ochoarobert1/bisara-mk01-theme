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


</section>



        <section id="post-<?php the_ID(); ?>" class="page-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="row">
                <div class="section-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
