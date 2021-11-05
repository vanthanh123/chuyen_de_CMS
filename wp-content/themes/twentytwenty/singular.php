<?php

/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
if (is_single()) {
?>
<div class="container">
<?php } ?>
	<main id="site-content" role="main">

		<?php

		if (have_posts()) {

			while (have_posts()) {
				the_post();

				get_template_part('template-parts/content', get_post_type());
			}
		}

		?>

	</main><!-- #site-content -->
<?php if (is_single()) { ?>
</div>
<?php } ?>
<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>