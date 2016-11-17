<?php

	$c = 0;
	if (have_posts()) { while (have_posts()) { the_post();

			$c++;
			
			if ($c === 3 && get_field('ctaL', 'options') ) { ?>

				<a class="post w-inline-block" href="<?php echo get_field('ctaL', 'options'); ?>">
					<?php if ( get_field('ctaI', 'options') ) { echo '<img src="'. get_field('ctaI', 'options') .'" alt="'. get_field('ctaT', 'options') .'">'; } else { echo '<img class="no-thumb" src="' . get_template_directory_uri(); echo '/img/no_thumb.jpg">'; } ?>
				</a>

				<a class="post w-inline-block" href="<?php the_permalink(); ?>">
					<h2 class="titulo-post"><?php the_title_attribute(); ?></h2>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } else { echo '<img class="no-thumb" src="' . get_template_directory_uri(); echo '/img/no_thumb.jpg">'; } ?>
					<span class="data">
						<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
							<p class="dia"><?php the_time('d');  ?></p>
							<p class="mes"><?php the_time('F');  ?></p>
						</time>
					</span>
				</a>

			<?php } else { ?>

					<a class="post w-inline-block" href="<?php the_permalink(); ?>">
						<h2 class="titulo-post"><?php the_title_attribute(); ?></h2>
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } else { echo '<img class="no-thumb" src="' . get_template_directory_uri(); echo '/img/no_thumb.jpg">'; } ?>
						<span class="data">
							<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
								<p class="dia"><?php the_time('d');  ?></p>
								<p class="mes"><?php the_time('F');  ?></p>
							</time>
						</span>
					</a>

			<?php
			}
		}
	}

	?>