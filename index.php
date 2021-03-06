<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package WordPress
	 * @subpackage FrozenBones
	 * @since 1.0
	 * @version 1.0
	 */

	get_header();
?>
			<section class="section">
				<div class="container">
					<section class="hero">
						<div class="hero-body">
							<?php if (is_home() && is_front_page()) { ?>
								<h1 class="title is-size-1"><?php bloginfo('name'); ?></h1>
								<h2 class="subtitle is-size-3"><?php bloginfo('description'); ?></h2>
							<?php } ?>
						</div>
					</section>
				</div>
				<div class="container">
					<div class="columns">
						<section id="main" class="column is-9">
							<header>
								<?php _frozen_breadcrumbs(); ?>
							</header>
							<section>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php get_template_part('templates/post/content', get_post_format()); ?>
								<?php endwhile; else : ?>
									<article class="post-not-found">
										<?php _frozen_not_found(); ?>
									</article>
								<?php endif; ?>
							</section>
							<footer>
								<?php _frozen_page_navi(); ?>
							</footer>
						</section>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
<?php get_footer(); ?>