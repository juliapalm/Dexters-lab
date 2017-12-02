<?php
if( have_posts() ) {

    while ( have_posts() ) {
      the_post();?>

      <section class="omgivning">

            <?php
            $mediumlarge = 'medium_large';
            $bild = get_field('bild');
            $mlbild = $bild['sizes'][ $mediumlarge ];
            $width = $bild['sizes'][ $mediumlarge . '-width' ];
            $height = $bild['sizes'][ $mediumlarge . '-height' ];
          ?>

          <?php
          if ($bild) { ?>
            <div class='omgivning_bild' style='background-image: url("<?php echo $mlbild;?>");'></div>
          <?php } ?>

              <h2><?php the_field('rubrik'); ?></h2>
              <p><?php the_field('beskrivning'); ?></p>

      </section>

    <?php } //end while
} //end if
?>
