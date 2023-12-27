<?php get_header(); ?>

    <main>
      <section>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php the_category(); ?>
            <?php the_tags(); ?>
          <?php endwhile; ?>
      </section>
    </main>

<?php get_footer(); ?>