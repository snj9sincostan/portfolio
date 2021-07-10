<?php get_header();?>
  <main class="l-main">
    <div class="l-contact-wrap">
      <h2 class="c-headingPrimary">Contact</h2>
      <p class="p-contact-text">お問い合わせ内容の入力をお願いします。</p>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer();?>