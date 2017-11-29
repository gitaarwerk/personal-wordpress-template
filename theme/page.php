<?php 
/* Template Name: Page*/ 

get_header();

?>
<div class="content">
	<section class="page">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php if (has_post_thumbnail()): 
		?>
		<div class="heading-image" 
			 style="background-image: url('<?php the_post_thumbnail_url('large');?>');"
		/></div>
		<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile;?>
	</section>
</div>
<?php get_footer(); ?>
