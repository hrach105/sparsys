


<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package event-organization
 */

?>

<footer id="colophon" class="site-footer">
    <div class="footer-container">
        <div class="footer-wrapper">
            <div class="company-info">
                <a href="/">
                    <img src="<?php the_field('footer_logo','options') ?>" alt="">
                </a>
                <div class="company-info-content">
                    <h4>Yerevan Office</h4>
                    <p class="company-content-item">
                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.44444 19.5556H6.11111V12.2222H13.4444V19.5556H17.1111V8.55556L9.77778 3.05556L2.44444 8.55556V19.5556ZM0 22V7.33333L9.77778 0L19.5556 7.33333V22H11V14.6667H8.55556V22H0Z" fill="white"/>
                        </svg>
                        <?php the_field('footer_address','options') ?>
                    </p>
                    <p class="company-content-item">
                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.2 17.8002C1.595 17.8002 1.07708 17.5848 0.64625 17.1539C0.215417 16.7231 0 16.2052 0 15.6002V2.4002C0 1.7952 0.215417 1.27728 0.64625 0.846445C1.07708 0.415612 1.595 0.200195 2.2 0.200195H19.8C20.405 0.200195 20.9229 0.415612 21.3538 0.846445C21.7846 1.27728 22 1.7952 22 2.4002V15.6002C22 16.2052 21.7846 16.7231 21.3538 17.1539C20.9229 17.5848 20.405 17.8002 19.8 17.8002H2.2ZM11 10.1002L2.2 4.6002V15.6002H19.8V4.6002L11 10.1002ZM11 7.9002L19.8 2.4002H2.2L11 7.9002ZM2.2 4.6002V2.4002V15.6002V4.6002Z" fill="white"/>
                        </svg>
                        <?php the_field('footer_email','options') ?>
                    </p>
                    <a href="tel:<?php the_field('footer_phone','options') ?>"  class="company-content-item">
                        <svg width="17" height="26" viewBox="0 0 17 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.36364 26C1.71364 26 1.1572 25.7686 0.694318 25.3057C0.231439 24.8428 0 24.2864 0 23.6364V2.36364C0 1.71364 0.231439 1.1572 0.694318 0.694318C1.1572 0.231439 1.71364 0 2.36364 0H14.1818C14.8318 0 15.3883 0.231439 15.8511 0.694318C16.314 1.1572 16.5455 1.71364 16.5455 2.36364V23.6364C16.5455 24.2864 16.314 24.8428 15.8511 25.3057C15.3883 25.7686 14.8318 26 14.1818 26H2.36364ZM2.36364 22.4545V23.6364H14.1818V22.4545H2.36364ZM2.36364 20.0909H14.1818V5.90909H2.36364V20.0909ZM2.36364 3.54545H14.1818V2.36364H2.36364V3.54545Z" fill="white"/>
                        </svg>
                        <?php the_field('footer_phone','options') ?>
                    </a>
                </div>
            </div>
            <div class="menus">
                <div class="menu-1 footer_menu">
                    <a href="https://sparsis.am/about-us/">About</a>
                    <a href="https://sparsis.am/services/">Service</a>
                    <a href="https://sparsis.am/all-portfolio/">Portfolio</a>
                </div>
                <div class="menu2 footer_menu">
                    <a href="https://sparsis.am/blog/">Blog</a>
                    <a href="https://sparsis.am/join-us/">join us</a>
                    <a href="https://sparsis.am/contacts/">Contact</a>
                </div>
            </div>
            <div class="about-agency-block">
                <?php if (have_rows('footerSocials', 'options')) : ?>
                    <div class="socials-wrapper">
                        <?php while (have_rows('footerSocials', 'options')) : the_row();
                            $footerLink = get_sub_field('footer_social_link');
                            $footerIcon = get_sub_field('footerSocial_image');
                            if ($footerLink) : ?>
                                <div class="social-icon">
                                    <a href="<?= esc_url($footerLink); ?>" target="_blank">
                                        <img src="<?= $footerIcon ?>" alt="Social Icon">
                                    </a>
                                </div>
                            <?php endif;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="about-agency-block-images">
                    <img src="<?php the_field('footer_image1','options') ?>" alt="">
                    <img src="<?php the_field('footer_image2','options') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
