<?php get_header(); ?>
  <div class="container">
    <div class="main">
      <?php $events = new WP_Query(array('post_type' => 'events', 'posts_per_page' => 10, 'order_by' => 'meta_value', 'meta_key' => 'event_date', 'meta_type' => 'DATETIME', 'order' => 'ASC')); ?>      
      <?php while($events->have_posts()) : $events->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <h3><?php the_field('event_date'); ?></h3>
        <p><?php the_field('event_description'); ?></p>
        <?php the_field('event_details'); ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php get_footer(); ?>