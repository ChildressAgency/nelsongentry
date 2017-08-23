<?php get_header(); ?>
<main id="main">
  <div class="container">
    <section id="mainContent">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <p>Sorry, page not found.</p>
      <?php endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>