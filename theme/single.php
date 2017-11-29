<?php 
/* Template Name: Posts */ 
/* Template Post Type: post */

get_header();
?>

<div class="content">
single
<?php while ( have_posts() ) : the_post(); ?>
	<?php if (is_page()):?>
		<?php if (has_post_thumbnail()): 
		?>
		<div class="heading-image" 
			 style="background-image: url('<?php the_post_thumbnail_url('large');?>');"
		/></div>
		<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>

			<?=get_posts(); ?>
		</div>
	<?php else: ?>
	<div class="post">
		<h2><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<?=get_posts(['post_type' => 'post']); ?>
	</div>
	<?php endif; ?>
<?php endwhile;?>
<?php get_footer(); ?>
