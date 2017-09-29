<?php get_header(); the_post(); ?>
<article id="single-post" class="post">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<header>
					<?php get_template_part('inc/breadcrumbs'); ?>
					<h1><?php the_title(); ?></h1>
					<p>Postado em: <?php the_time('d/m/Y'); ?> | Por: <?php the_author_posts_link(); ?></p>
				</header>
				<?php the_post_thumbnail('full',array('title' => get_the_title(), 'alt' => get_the_title())); ?>
				<section class="content">
					<?php the_content(); ?>
				</section>
				<div class="tags">
					<?php the_tags('Tags: ','',''); ?>
				</div>
				<?php get_template_part('inc/share'); ?>
				<?php if (is_single()) : ?>
				<div class="fb-comments" data-href="http://itacareparadise.com.br" data-width="100%" data-numposts="5"></div>
				<?php endif; ?>
				<div class="related-posts">
					<?php wp_related_posts()?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</article>
<?php get_footer(); ?>