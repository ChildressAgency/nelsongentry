<?php get_header(); ?>
<main id="main">
  <div class="container">
    <section id="mainContent">
      <h1>Events</h1>
      <?php
        $events = new WP_Query(array(
          'post_type' => 'campaign_events',
          'posts_per_page' => -1,
          'post_status' => 'publish',
          'meta_key' => 'event_date',
          'orderby' => 'meta_value',
          'order' => 'ASC'
        ));
        if($events->have_posts()): while($events->have_posts()): $events->the_post(); ?>
          <div class="event-summary">
            <p class="date-title"><a href="<?php the_permalink(); ?>"><?php the_field('event_date'); ?> <span>- <?php the_title(); ?></span></a></p>
            <p class="location"><?php the_field('event_time_and_location'); ?></p>
          </div>
      <?php endwhile; else: ?>
        <p>There are no events currently scheduled.</p>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>