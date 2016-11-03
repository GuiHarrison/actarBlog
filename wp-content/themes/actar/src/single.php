<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="w-section">
	  <div class="w-container">

		<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
		<div class="foto" <?php if ( has_post_thumbnail() ) { echo 'style="background-image: url(' . $thumb . ')"'; } ?>>
		  <h1 class="title"><?php the_title_attribute(); ?></h1>
		</div>

		<div class="contemConteudo">

			<span class="date">
				<time datetime="<?php the_time('Y-m-d'); ?>">
					<?php the_date(); ?>
				</time>
			</span>

			<?php the_content(); // Dynamic Content ?>
			<p class="autor"><?php echo "Este artigo foi escrito por "; the_author(); ?></p>

		</div>

		<div class="w-embed compartilhamento"><span class="st_facebook_large" displaytext="Facebook"></span>
			<span class="st_twitter_large" displaytext="Tweet"></span>
			<span class="st_linkedin_large" displaytext="LinkedIn"></span>
			<span class="st_email_large" displaytext="Email"></span>
		</div>

		<div class="w-embed cimentrios">
			<div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-width="864 px" data-numposts="5"></div>
		</div>

	  </div>
	</div>

	<div class="w-section sugeridas">
	  <div class="w-container">
		<?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>
	  </div>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
