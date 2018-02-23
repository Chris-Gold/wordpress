<div class="sidebar">
	<div class="container text-center sidebar-module sidebar-module-inset">
	<h4>Categories</h4>
		<ul class="list-unstyled">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=1'); ?>
		</ul>
	<h4>Archives</h4>
		<ul class="list-unstyled">
			<?php wp_get_archives('type=monthly'); ?>
<?php endif; ?>
		</ul>
		<?php get_links_list(); ?>
	</div>
</div><!-- /.blog-sidebar -->
