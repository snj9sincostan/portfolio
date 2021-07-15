<?php get_header();?>
  <main class="l-main">
    <div class="l-contact-wrap u-screen-whitespace-adjust">
      <h2 class="c-headingPrimary">Contact</h2>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <div class="p-complete-button">
        <a class="c-button--correct" href="<?php echo home_url(); ?>">トップへ戻る<span></span></a>
      </div>
    </div>
  </main>
<?php get_footer();?>