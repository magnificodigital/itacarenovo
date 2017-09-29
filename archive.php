<?php get_header(); ?>
<?php if (is_author()) {
	get_template_part('inc/author','header');
} ?>
<?php get_template_part('inc/blog'); ?>
<?php get_footer(); ?>