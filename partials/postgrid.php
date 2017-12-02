<div id="mother-grid">
<?php
  $args = array(
      'post_type'     => 'project',
      'post_per_page' => -1,
  );
  $my_query = new WP_Query($args);
  if ($my_query->have_posts()):
      while ($my_query->have_posts()):
          $my_query->the_post();
          ?><div class="grid-proj">
          <a href="<?php the_permalink(); ?>">
            <div class="grid-title"><?php the_title(); ?></div>
          </a>
          <div class="grid-thumb"><?php the_post_thumbnail('grid_thumbnail'); ?></div>

          <div class="grid-skills">
            <?php
              the_terms(get_the_ID(), 'project-type', 'Project Type: ',', ','');
            ?>
          </div>
          </div>
          <?php
      endwhile;
  endif;
?>
</div>
