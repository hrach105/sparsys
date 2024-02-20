<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package event-organization
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'event-organization' ); ?></a>
	<header id="masthead" class="site-header">
        <a href=""><img src="<?= the_field('logo', 'options') ?>" alt=""></a>
        <div class="btns">
            <a href="https://sparsis.am/" rel="nofollow" title="Go to main page">
                Go to main page
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M0.724399 6.7244H8.81594L5.28087 10.2595C4.99835 10.542 4.99835 11.0056 5.28087 11.2881C5.56338 11.5706 6.01976 11.5706 6.30227 11.2881L11.0761 6.51432C11.3586 6.23181 11.3586 5.77544 11.0761 5.49292L6.30952 0.711887C6.027 0.429371 5.57063 0.429371 5.28811 0.711887C5.0056 0.994402 5.0056 1.45077 5.28811 1.73329L8.81594 5.2756H0.724399C0.32598 5.2756 0 5.60158 0 6C0 6.39842 0.32598 6.7244 0.724399 6.7244Z" fill="white"/>
                </svg>
            </a>
            <a href="https://sparsis.am/contacts/" rel="nofollow" title="Quick Contact">
                Quick Contact
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                    <path d="M0.724399 6.7244H8.81594L5.28087 10.2595C4.99835 10.542 4.99835 11.0056 5.28087 11.2881C5.56338 11.5706 6.01976 11.5706 6.30227 11.2881L11.0761 6.51432C11.3586 6.23181 11.3586 5.77544 11.0761 5.49292L6.30952 0.711887C6.027 0.429371 5.57063 0.429371 5.28811 0.711887C5.0056 0.994402 5.0056 1.45077 5.28811 1.73329L8.81594 5.2756H0.724399C0.32598 5.2756 0 5.60158 0 6C0 6.39842 0.32598 6.7244 0.724399 6.7244Z" fill="white"/>
                </svg>
            </a>
        </div>
	</header>
