<?php get_header(); ?>
<main id="main">
  <div class="container">
    <section id="mainContent">
      <?php if(is_archive()): ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="blog-summary">
            <p class="title"><?php the_title(); ?></p>
            <div class="blog-excerpt"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="read-more">read more &raquo;</a>
          </div>
        <?php endwhile; endif; ?>
      <?php else: ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>