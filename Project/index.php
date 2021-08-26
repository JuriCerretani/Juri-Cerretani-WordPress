<?php get_header(); ?>
<div class="back">
  <div class='content'>
    <?php if( !is_home() ): ?>
      <?php if( have_posts() ):
        while ( have_posts() ):
          the_post(); ?>
          <p> <?php the_content();?> </p>
      <?php endwhile;
      endif;
      else: ?>
      <h2>AGGIORNAMENTI</h2>
      <br>
      <div class='update'>
        <?php if( have_posts() ):
          while ( have_posts() ): ?>
          <div class="post">
          <?php the_post(); ?>
            <h2> <?php the_title(); ?> </h2>
            <small>Pubblicato il : <?= get_the_date(); ?></small>
            <p> <?php the_content();?> </p><br>
          </div>
        <?php endwhile;
        endif; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
