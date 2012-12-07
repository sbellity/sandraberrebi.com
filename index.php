<?php get_header(); ?>
<?php if (have_posts()) : ?>

<div  id="post-area" class="masonry">
  <?php while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="gridly-image">
      <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail( 'summary-image' );  ?>
      </a>
    </div>
    <?php } ?>
    <div class="gridly-copy">
      <h3>
        <?php the_title(); ?>
      </h3>
      <div class="gridly-category">
        <p>
          <?php the_category(', ') ?>
        </p>
      </div>
      <?php the_excerpt(); ?>
    </div>
    </div>
    
  <?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>