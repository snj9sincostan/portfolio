<?php get_header();?>
  <main class="l-main">
    <div class="p-confirm-wrap">
      <h2 class="c-heading">Contact</h2>
      <p class="p-confirm-text">お問い合わせ内容をご確認ください。</p>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer();?>