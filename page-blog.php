<?php get_header(); ?>
<?php if (is_page('blog')) : ?>
	<?php get_template_part('inc/blog','query'); ?>
<?php endif; ?>
<?php get_footer(); ?>