<?php get_header();?>
  <main class="l-main">
    <div class="l-contact-wrap u-screen-whitespace-adjust">
      <h2 class="c-headingPrimary">Contact</h2>
      <p class="c-contactText">お問い合わせ内容をご確認ください。</p>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer();?>