<?php get_header(); ?>
<main id="main">
  <div class="container">
    <section id="gentryFamily">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gentry-family.jpg" class="img-responsive center-block" alt="The Nelson Gentry Family" />
      <?php if(get_field('slogan')): ?>
        <div class="slogan">
          <h1><?php the_field('slogan'); ?></h1>
          <?php if(get_field('slogan_section_link')): ?>
            <a href="<?php the_field('slogan_section_link'); ?>" class="btn-main"><?php the_field('slogan_section_link_text'); ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </section>
    <section id="mainContent">
      <div class="row">
        <div class="col-sm-5">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-4">
              <?php if(get_field('key_issue_1_title')): ?>
                <div class="thumbnail">
                  <img src="<?php echo get_field('key_issue_1_image') ? get_field('key_issue_1_image') : get_stylesheet_directory_uri() . '/images/logo.png'; ?>" alt="" />
                  <div class="caption">
                    <h2><a href="<?php the_field('key_issue_1_link'); ?>"><?php the_field('key_issue_1_title'); ?></a></h2>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php if(get_field('key_issue_2_title')): ?>
                <div class="thumbnail">
                  <img src="<?php echo get_field('key_issue_2_image') ? get_field('key_issue_2_image') : get_stylesheet_directory_uri() . '/images/logo.png'; ?>" alt="" />
                  <div class="caption">
                    <h2><a href="<?php the_field('key_issue_2_link'); ?>"><?php the_field('key_issue_2_title'); ?></a></h2>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php if(get_field('key_issue_3_title')): ?>
                <div class="thumbnail">
                  <img src="<?php echo get_field('key_issue_3_image') ? get_field('key_issue_3_image') : get_stylesheet_directory_uri() . '/images/logo.png'; ?>" alt="" />
                  <div class="caption">
                    <h2><a href="<?php the_field('key_issue_3_link'); ?>"><?php the_field('key_issue_3_title'); ?></a></h2>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="blog-social">
      <div class="row">
        <div class="col-sm-7">
          <div class="events-blog">
            <div class="row">
              <div class="col-sm-6">
                <h2>Events</h2>
                <?php
                  $events = new WP_Query(array(
                    'post_type' => 'campaign_events', 
                    'posts_per_page' => 2,
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
                <?php endwhile; endif; ?>
              </div>
              <div class="col-sm-6">
                <h2>News &amp; Updates</h2>
                <?php 
                  $latest_news = new WP_Query(array('posts_per_page' => 1, 'post_status' => 'publish'));
                  if($latest_news->have_posts()): while($latest_news->have_posts()): $latest_news->the_post(); ?>
                    <p class="title"><strong><?php the_title(); ?></strong></p>
                    <div class="blog-excerpt"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="read-more">read more</a>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-stream-placeholder.jpg" class="img-responsive center-block" alt="Social feed" />
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>