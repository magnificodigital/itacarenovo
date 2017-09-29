<section id="faq">
	<div class="container">
		<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">

			<?php 
			$args = array(
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 999999,
				'paged'=>$paged,
				'post_type'=>'qa_faqs',
			);

			global $loop;
			$loop = new WP_query( $args ); ?>

			<?php if($loop->have_posts()): ?>
				<ul>
					<?php while($loop->have_posts()):$loop->the_post(); ?>					
						<li>
							<span><?php the_title(); ?></span>
							<div class="content">
								<?php the_content(); ?>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</section>