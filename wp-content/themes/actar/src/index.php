<?php get_header(); ?>

	<div class="w-container">

	  <div class="w-row wrapper">
		<div class="w-col w-col-9 coluna-principal">

			<?php get_template_part('searchform'); ?>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>

		</div>

		<?php get_sidebar(); ?>

	  </div>
	</div>

<?php get_footer(); ?>
