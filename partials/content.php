<div class="content">
<?php
    if (have_posts()){
      while (have_posts()){

        ?><h2><?php the_title(); ?></h2>

          <?php the_post_thumbnail();?>
          <?php the_post();?>
          <?php the_content();?>

        <?php
      }
    }
?>
</div>
