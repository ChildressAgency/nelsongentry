<?php get_header(); ?>
<main id="main">
  <div class="container">
    <section id="mainContent">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>