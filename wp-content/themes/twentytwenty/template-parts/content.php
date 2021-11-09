<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$class_search_page_feature_image = "";
if (is_search()) {
	$class_search_page_feature_image = "search-page-feature-image";
}
?>

<article <?php post_class($class_search_page_feature_image); ?> id="post-<?php the_ID(); ?>">
	<?php if (is_search()) { ?>
		<!-- kiểm tra nếu là trang search result -->
		<div class="container single-post-search-result">
			<div class="row">
				<div class="col-md-4">
					<?php
					if (is_search()) {
						get_template_part('template-parts/featured-image');
					}
					?>
				</div>
				<div class="col-md-8">
					<div class="row">
						<?php
						$post = get_post();
						$month = date("m", strtotime($post->post_date));
						$day = date("d", strtotime($post->post_date));
						?>
						<div class="col-md-2 topnewstime">
							<span class="topnewsdate"><?= $day ?></span><br>
							<span class="topnewsmonth">Tháng <?= $month ?></span><br>
						</div>
						<div class="col-md-10 separator-date-title">
							<?php
							get_template_part('template-parts/entry-header');
							?>
							<div class="width-text-content-post post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
								<div class="entry-content">
									<?php
									if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
										the_excerpt();
									} else {
										the_content(__('Continue reading', 'twentytwenty'));
									}
									?>
								</div><!-- .entry-content -->
							</div><!-- .post-inner -->
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php } else { ?>
		<!--nếu không phải trang search result thì cho vào else này -->
		<?php
		get_template_part('template-parts/entry-header');

		if (is_search()) {
			get_template_part('template-parts/featured-image');
		}
		?>
		<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
			<div class="entry-content">
				<?php
				if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
					the_excerpt();
				} else {
					the_content(__('Continue reading', 'twentytwenty'));
				}
				?>
			</div><!-- .entry-content -->
		</div><!-- .post-inner -->
	<?php } ?>

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__('Page', 'twentytwenty') . '"><span class="label">' . __('Pages:', 'twentytwenty') . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta(get_the_ID(), 'single-bottom');

		if (post_type_supports(get_post_type(get_the_ID()), 'author') && is_single()) {

			get_template_part('template-parts/entry-author-bio');
		}
		?>

	</div><!-- .section-inner -->

	<?php

	if (is_single()) {

		get_template_part('template-parts/navigation');
	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
	?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

	<?php
	}
	?>

</article><!-- .post -->