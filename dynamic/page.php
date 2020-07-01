<?php get_header(); ?>
<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <section class="page-header">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section>
  <main class="container site-content">
      <article class="entry page">
        <section class="entry-content">
          <?php the_content(); ?>
      </section>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
  </main>
  <?php get_footer(); ?>
