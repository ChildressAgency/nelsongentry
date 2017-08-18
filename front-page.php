<?php get_header(); ?>
      <div class="container">
        <div class="hp-main-image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jason-family.jpg" alt="" />
          <div class="hp-main-image-caption">
            <div class="row">
              <div class="col-sm-8">
                <h3 class="gbold-italic">Keeping Stafford Safe</h3>
              </div>
              <div class="col-sm-4">
                <h3 class="ngbold-italic"><a href="<?php echo site_url('meet-jason'); ?>" class="hp-main-img-link">FIND OUT MORE</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="main">
          <div class="row">
            <div class="col-sm-6">
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; endif; ?>
            </div>
            <div class="col-sm-6 platform">
              <div class="row">
                <?php if(have_rows('home_page_platforms')) : while(have_rows('home_page_platforms')) : the_row(); ?>
                  <div class="col-xs-4">
                    <div class="thumbnail">
                      <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('platform_title'); ?>" />
                      <div class="caption">
                        <h5><a href="<?php echo site_url('platform'); ?>" class="bbold"><?php the_sub_field('platform_title'); ?></a></h5>
                      </div>
                    </div>            
                  </div>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-text-stream container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-7 col-sm-height bluebox">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-june-9.png" alt="Vote June 9th" class="img-responsive" />
              <div class="row">
                <div class="col-sm-6">
                  <h3>Events</h3>
                  <?php $events = new WP_Query(array('post_type' => 'events', 'posts_per_page' => 10, 'order_by' => 'meta_value', 'meta_key' => 'event_date', 'meta_type' => 'DATETIME', 'order' => 'ASC')); ?>
                    <ul class="list-group">
                      <?php while($events->have_posts()) : $events->the_post(); ?>
                        <li class="list-group-item"><span class="event-date bbold"><?php the_field('event_date'); ?></span> - <a href="<?php the_permalink(); ?>" class="event-title"><?php the_title(); ?></a>
                          <?php if(get_field('event_description')) : ?>
                            <br /><span class="event-description"><?php the_field('event_description'); ?></span>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="col-sm-6">
                  <h3>Blog</h3>
                  <?php $blog = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 10)); ?>
                  <ul class="list-group">
                    <?php while($blog->have_posts()) : $blog->the_post(); ?>
                      <li class="list-group-item">
                        <a href="<?php the_permalink(); ?>" class="blog-title bbold"><?php the_title(); ?></a><br /><span class="blog-excerpt"><?php the_excerpt(); ?></span>
                      </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-5 col-sm-height">
              <div class="fb-like-box social-stream" data-href="https://www.facebook.com/JasonPelt" data-width="100%" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>
            </div>
          </div>
        </div>
      </div>  
<?php get_footer(); ?>