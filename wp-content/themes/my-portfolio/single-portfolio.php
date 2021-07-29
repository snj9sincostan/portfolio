<?php get_header();?>
<main class="l-main">
  <div class="p-portfolio">
    <h2 class="c-heading"><?php the_field('portfolio-title');?></h2>
    <div class="p-portfolio__wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <p class="p-portfolio__image">
        <?php the_post_thumbnail();?>
      </p>
      <div class="p-portfolio__description">
        <h3 class="p-portfolio__title" data-heading="What">ポートフォリオの概要</h3>
        <p class="p-portfolio__text">
          <?php the_field('portfolio-description');?>
        </p>
      </div>
      <div class="p-portfolio__description">
        <h3 class="p-portfolio__title" data-heading="Why">なぜこれを作ったか</h3>
        <p class="p-portfolio__text">
          <?php the_field('portfolio-make-why');?>
        </p>
      </div>
      <div class="p-portfolio__description">
        <h3 class="p-portfolio__title" data-heading="How">どんなことを意識して作ったか</h3>
        <p class="p-portfolio__text">
          <?php the_field('portfolio-make-consciously');?>
        </p>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <div class="c-buttonPrimary p-portfolio__button">
      <a class="c-buttonPrimary__link" href="<?php echo home_url(); ?>">トップへ戻る</a>
    </div>
  </div>
</main>
<?php get_footer();?>