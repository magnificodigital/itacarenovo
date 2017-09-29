<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">

				<header>
					<h1 class="title-blog"><?php the_title(); ?></h1>
				</header>

				<?php

				if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	            elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	            else { $paged = 1; }

				$args = array(
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 10,
					'paged'=>$paged,
				);

				global $loop;
				$loop = new WP_query( $args ); ?>

				<?php if($loop->have_posts()): ?>
				<?php while($loop->have_posts()):$loop->the_post(); ?>
				<figure class="post">
					<header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p>Postado em: <?php the_time('d/m/Y'); ?> | Por: <?php the_author_posts_link(); ?></p>
					</header>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full',array('title' => get_the_title(), 'alt' => get_the_title())); ?>
					</a>
					<div class="excerpt">
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="link">
						<a href="<?php the_permalink(); ?>" class="btn">Continue lendo</a>
					</div>
				</figure>
				<?php endwhile; endif; ?>

				<?php
	            $big = 999999999;
	            $p = array(
	                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	                'format' => '?paged=%#%',
	                'current' => max( 1, get_query_var('paged') ),
	                'total' => $loop->max_num_pages
	            );

	            echo '<div class="navigation">'.paginate_links($p).'</div>'; ?>
	            
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>