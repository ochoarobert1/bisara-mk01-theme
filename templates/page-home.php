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

        <section id="values" class="main-values-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-values-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Valores', 'bisara'); ?></h2>
                    </div>
                    <?php $arr_values = get_post_meta(get_the_ID(), 'bsr_home_values_group', true); ?>
                    <?php if (!empty($arr_values)) : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($arr_values as $item) { ?>
                    <article class="main-values-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="media">
                            <?php $bg_banner = wp_get_attachment_image_src($item['bg_image_id'], 'avatar', false); ?>
                            <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($item['bg_image_id'], '_wp_attachment_image_alt', true); ?>" class="img-fluid align-self-start" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" data-aos="fade" data-aos-delay="<?php echo $delay; ?>" />
                            <div class="media-body">
                                <h3><?php echo $item['title']; ?></h3>
                                <?php echo apply_filters('the_content', $item['desc']); ?>
                            </div>
                        </div>
                    </article>
                    <?php $i++;
                        } ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="services" class="main-services-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <article class="main-services-content col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2><?php echo get_post_meta(get_the_ID(), 'bsr_home_services_title', true); ?></h2>
                        <div class="main-services-content-wrapper">
                            <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'bsr_home_services_desc', true)); ?>
                        </div>
                    </article>
                    <picture class="main-services-image col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'bsr_home_services_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'full', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" data-aos="fade" data-aos-delay="700" />
                    </picture>
                </div>
            </div>
        </section>

        <section id="contact" class="main-contact-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="main-contact-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php _e('Para más información contáctenos', 'bisara'); ?></h2>
                    </div>
                    <article class="main-contact-content col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'bsr_home_contact_desc', true)); ?>
                    </article>
                    <div class="main-contact-form col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                        <?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'bsr_home_contact_form', true)); ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>
<?php get_footer(); ?>