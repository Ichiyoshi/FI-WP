<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Learn more here: http://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress Theme
 * @since 1.0
 */

get_header(); ?>

<div id="post" class="col span_8 clr">	

    <div id="page-heading">
        <h1><?php _e('404: Page Not Found','att'); ?></h1>
    </div><!-- /page-heading -->
		
	<p id="error-page-text">
		<?php _e('Unfortunately, the page you tried accessing could not be retrieved. Please visit the','att'); ?> <a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php _e('homepage','att'); ?></a>.
    </p>
</div><!-- #error-page -->

<?php
get_sidebar();
get_footer();