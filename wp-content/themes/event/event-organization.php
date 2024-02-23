<?php // Template Name: event-organization  ?>

<?php get_header(); ?>

<div class="banner" style="background-image: url('<?= the_field('banner_image') ?>')">
    <img class="banner-overlay" src="<?= get_template_directory_uri(). '/assets/images/banner-overlay.png' ?>" alt="">

    <div class="banner-content">
        <img src="<?php the_field('banner_title') ?>" title="" alt="event organization">
        <p><?php the_field('banner_description') ?></p>
    </div>
</div>

<?php
$args = array(
    'post_type' => 'slides',
    'order' => 'ASC'
);
$slider_query = new WP_Query($args);

$args2 = array(
    'post_type' => 'slides2',
    'order' => 'ASC'
);
$slider_query2 = new WP_Query($args2);

$args3 = array(
    'post_type' => 'slides3',
    'order' => 'ASC'
);
$slider_query3 = new WP_Query($args3);

if ($slider_query->have_posts() || $slider_query2->have_posts() || $slider_query3->have_posts()) {
    ?>
    <section class="sliders">
        <div class="main-container">
            <?php if ($slider_query->have_posts()) { ?>
                <div class="boxes1 boxes-item">
                    <?php while ($slider_query->have_posts()) {
                        $slider_query->the_post();
                        ?>
                        <div class="box">
                            <?php if (have_rows('slides')) : ?>
                                <div id="carouselExampleControls-<?php echo get_the_ID(); ?>" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php $first = true; ?>
                                        <?php while (have_rows('slides')) : the_row();
                                            $image = get_sub_field('background_image');
                                            $name = get_sub_field('slider_name'); ?>
                                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>" style="background: url('<?php echo esc_url($image); ?>')">
                                                <h4><?php echo esc_html($name); ?></h4>
                                                <div class="overlay"></div>
                                            </div>
                                            <?php $first = false; ?>
                                        <?php endwhile; ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls-<?php echo get_the_ID(); ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls-<?php echo get_the_ID(); ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            <?php else : ?>
                                <p>No sliders found for this post.</p>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php } ?>

            <?php if ($slider_query2->have_posts()) { ?>
                <div class="boxes2 boxes-item">
                    <?php while ($slider_query2->have_posts()) {
                        $slider_query2->the_post();
                        ?>
                        <div class="box">
                            <?php if (have_rows('slides2')) : ?>
                                <div id="carouselExampleControls2-<?php echo get_the_ID(); ?>" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php $first = true; ?>
                                        <?php while (have_rows('slides2')) : the_row();
                                            $image2 = get_sub_field('background_image2');
                                            $name2 = get_sub_field('name2'); ?>
                                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>" style="background: url('<?php echo esc_url($image2); ?>')">
                                                <h4><?php echo esc_html($name2); ?></h4>
                                                <div class="overlay"></div>
                                            </div>
                                            <?php $first = false; ?>
                                        <?php endwhile; ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls2-<?php echo get_the_ID(); ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls2-<?php echo get_the_ID(); ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            <?php else : ?>
                                <p>No sliders found for this post.</p>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php } ?>

            <?php if ($slider_query3->have_posts()) { ?>
                <div class="boxes3 boxes-item">
                    <?php while ($slider_query3->have_posts()) {
                        $slider_query3->the_post();
                        ?>
                        <div class="box">
                            <?php if (have_rows('slides3')) : ?>
                                <div id="carouselExampleControls3-<?php echo get_the_ID(); ?>" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php $first = true; ?>
                                        <?php while (have_rows('slides3')) : the_row();
                                            $image3 = get_sub_field('background_image3');
                                            $name3 = get_sub_field('name3'); ?>
                                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>" style="background: url('<?php echo esc_url($image3); ?>')">
                                                <h4><?php echo esc_html($name3); ?></h4>
                                                <div class="overlay"></div>
                                            </div>
                                            <?php $first = false; ?>
                                        <?php endwhile; ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls3-<?php echo get_the_ID(); ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls3-<?php echo get_the_ID(); ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            <?php else : ?>
                                <p>No sliders found for this post.</p>
                            <?php endif; ?>
                        </div>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>

<section class="contact">
    <img class="overlay-circle" src="<?= get_template_directory_uri(). '/assets/images/bottom-right.png' ?>" alt="">
    <div class="main-container">
        <div class="contact-wrapper">
            <div class="contact-desc">
                <h3><?php the_field('contact_title'); ?></h3>
                <p><?php the_field('contact_description'); ?></p>
                <div class="information">
                    <div class="info-item">
                        <h4>Email</h4>
                        <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
                    </div>
                    <div class="info-item">
                        <h4>Phone</h4>
                        <a href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
                    </div>
                    <div class="info-item">
                        <h4>Phone</h4>
                        <span><?php the_field('address') ?></span>
                    </div>
                </div>
            </div>

            <?= do_shortcode('[contact-form-7 id="d2c8bbe" title="Contact form 1"]') ?>
        </div>
    </div>
    </div>
</section>

<section class="services">
    <img class="overlay-circle" src="<?= get_template_directory_uri(). '/assets/images/left-overlay.png' ?>" alt="">
    <div class="main-container">
        <h2><img src="<?php the_field('image_title') ?>" class="section-title" alt="event oraginization title"></h2>
        <?php if( have_rows('services') ): ?>
            <div class="service-wrapper">
                <?php while( have_rows('services') ): the_row();
                    $title = get_sub_field('service_title');
                    $icon = get_sub_field('icon');
                    ?>
                    <div class="service-item">
                        <img src="<?php echo $icon ?>" alt="">
                        <p><?php echo $title ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="about-us">
    <img class="overlay-circle" src="<?= get_template_directory_uri(). '/assets/images/right-top.png' ?>" alt="">
    <div class="main-container">
        <h2 class="about-us-title"><img src="<?php the_field('about_us_title') ?>" class="section-title" alt="event oraginization title"></h2>
        <div class="about-us-wrapper">
            <div class="about-us-description">
                <h2>Meet Our team</h2>
                <div class="about-us-description-item">
                    <?php if( have_rows('about_services') ): ?>
                        <?php while( have_rows('about_services') ): the_row();
                            $about_service_title = get_sub_field('about_service_title');
                            $about_dervice_desc = get_sub_field('about_service_description');
                            ?>
                            <div class="about-service-item">
                                <h4><?= $about_service_title ?></h4>
                                <p><?php echo $about_dervice_desc ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="about-us-image">
                <img src="<?php the_field('about_us_image') ?>" alt="event organization about us">
            </div>
            <div class="tool-stack">
                <h2>Tool Stack</h2>
                <?php if( have_rows('services') ): ?>
                    <div class="tools-wrapper">
                        <?php while( have_rows('tools_stack') ): the_row();
                            $tools_icon = get_sub_field('tool_image');
                            ?>
                            <div class="tool-item">
                                <img src="<?php echo $tools_icon ?>" alt="">
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="what-people-say">
    <div class="main-container">
        <h2><?php the_field('what_people_say_title')?></h2>
        <div class="">
            <?php if( have_rows('what_people_say') ): ?>
                <div class="content-items">
                    <?php while( have_rows('what_people_say') ): the_row();
                        $description = get_sub_field('description');
                        $logo2 = get_sub_field('logo_2');
                        ?>
                        <div class="content-item block-desc-<?=  get_row_index() ?>">
                            <div>
                                <p><?= $description ?></p>
                                <h5>Company name - <span>sdsdsd</span></h5>
                            </div>
                            <div class="logo2">
                                <img src="<?= $logo2 ?>" alt="">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="tab-content-wrapper">
        <?php if( have_rows('what_people_say') ): ?>
            <div class="logos">
                <?php while( have_rows('what_people_say') ): the_row();
                    $logo = get_sub_field('logo');
                    ?>
                    <div class="tab-content-wrapper-logo">
                        <img src="<?= $logo ?>" data-id="<?= get_row_index() ?>" alt="">
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    </div>
</section>

<?php get_footer(); ?>
