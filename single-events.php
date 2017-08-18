<?php get_header(); ?>
  <div class="container">
    <div class="main">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <h3><?php the_field('event_date'); ?></h3>
        <p><?php the_field('event_description'); ?></p>
        <?php the_field('event_details'); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
<?php get_footer(); ?>