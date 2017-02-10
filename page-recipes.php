<?php
/* template name: Recipes */

get_header(); ?>


	<div id="content-wrap" class="container clr">

			<div id="primary" class="content-area clr">
			<div id="content" class="site-content clr">

      <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

      <!-- get the contents of the WP page first -->
			<?php while (have_posts()) : the_post(); ?>
				<!-- page title -->
				<!-- the subtitle is the content of the page -->
				<?php the_content(); ?>
			<?php endwhile; ?>
			<? wp_reset_query(); ?>
			<!-- end page content -->

      <div class="recipe-grid">
      <?php if ($paged == 1) { ?>
        <?php
						$args = array( 'post_type' => 'recipe', 'posts_per_page' => 9, 'orderby' => 'date', 'order' => 'DESC'  );
						$my_query = new WP_Query($args);
						while ($my_query->have_posts()) : $my_query->the_post();
						// $do_not_duplicate[] = $post->ID;
					?>
        <div class="recipe-card">
          <a href="<?php the_permalink(); ?>">
            <div class="thumb"><?php the_post_thumbnail( 'recipe-thumb', array('class' => 'recipe-image img-responsive') ); ?></div>
          </a>
          <div class="recipe-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
          </div>
          <div class="recipe-card-excerpt"><?php the_excerpt(); ?></div>
        </div>
        
        <?php endwhile; ?>

        <?php } ?>
      
      </div>

      </div>

      </div>
      </div>
