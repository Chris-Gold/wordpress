<?php
/**
 * The template for displaying all pages.
 *Template Name:musique
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package publishable Lite
 */

get_header();
$sidebar = publishable_lite_custom_sidebar(); ?>

<div id="page" class="single">
	<div class="content">
		<article class="article">
			<div id="content_box" >
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
						<div class="single_page single_post clear">
							<header>
								<h1 class="title"><?php the_title(); ?></h1>
							</header>
							<div id="content" class="post-single-content box mark-links">
								<?php the_content(); ?>
							</div><!--.post-content box mark-links-->
							<?php comments_template( '', true ); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</article>
<aside class="sidebar c-4-12">
	<div id="sidebars" class="sidebar">
		<div class="sidebar_list">
			<?php if ( ! dynamic_sidebar( $sidebar )) : ?>
				<div id="sidebar-search" class="widget">
					<h3><?php _e('Search', 'publishable-mag'); ?></h3>
					<div class="widget-wrap">
						<?php get_search_form(); ?>
					</div>
				</div>
				<div id="sidebar-archives" class="widget">
					<h3><?php _e('Archives', 'publishable-mag') ?></h3>
					<div class="widget-wrap">
						<ul>
							<?php wp_get_archives( 'type=monthly' ); ?>
						</ul>
					</div>
				</div>
				<div id="sidebar-meta" class="widget">
					<h3><?php _e('Meta', 'publishable-mag') ?></h3>
					<div class="widget-wrap">
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div><!--sidebars-->
</aside>

		<?php //get_sidebar(); ?>
		</div>
		</div>
		<?php get_footer(); ?>
