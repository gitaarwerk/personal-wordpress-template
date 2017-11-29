<?php setup_postdata( $post ); ?>
<section class="post">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="post--data"><small><?php the_date(); ?> | in: <?php the_category( ', ' ); ?></small></div>
	<?php the_content('Keep on reading: "' . get_the_title() . '" &#8594;'); ?>
</section>