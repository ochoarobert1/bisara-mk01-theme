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

        <section id="about" class="main-about-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row row-about align-items-start justify-content-between">
                    <?php $arr_about = get_post_meta(get_the_ID(), 'bsr_home_about_group', true); ?>
                    <?php if (!empty($arr_about)) : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($arr_about as $item) { ?>
                            <article class="main-about-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <?php if ($i <= 1) { ?>
                                    <div class="main-about-item-wrapper">
                                        <h2><?php echo $item['title']; ?></h2>
                                        <?php echo apply_filters('the_content', $item['desc']); ?>
                                    </div>
                                    <picture>
                                        <?php $bg_banner = wp_get_attachment_image_src($item['bg_image_id'], 'full', false); ?>
                                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" data-aos="fade" data-aos-delay="<?php echo $delay; ?>" />
                                    </picture>
                                <?php } else { ?>
                                    <picture class="d-xl-block d-lg-block d-md-block d-sm-none d-none">
                                        <?php $bg_banner = wp_get_attachment_image_src($item['bg_image_id'], 'full', false); ?>
                                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" data-aos="fade" data-aos-delay="<?php echo $delay; ?>" />
                                    </picture>
                                    <div class="main-about-item-wrapper">
                                        <h2><?php echo $item['title']; ?></h2>
                                        <?php echo apply_filters('the_content', $item['desc']); ?>
                                    </div>
                                    <picture class="d-xl-none d-lg-none d-md-none d-sm-block d-block">
                                        <?php $bg_banner = wp_get_attachment_image_src($item['bg_image_id'], 'full', false); ?>
                                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" data-aos="fade" data-aos-delay="<?php echo $delay; ?>" />
                                    </picture>
                                <?php } ?>
                            </article>
                        <?php $i++;
                        } ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>