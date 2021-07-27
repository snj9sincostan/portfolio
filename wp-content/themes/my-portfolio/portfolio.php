<?
/*
Template Name: portfolio
*/
?>

<?php get_header();?>
<main class="l-main">
  <div class="p-portfolio">
    <h2 class="c-heading">Portfolio</h2>
    <div class="p-portfolio__wrapper">
      <p class="p-portfolio__image">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/Hero.png" alt="ポートフォリオ画像">
      </p>
      <div class="p-portfolio__description">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h3 class="p-portfolio__title" data-heading="What">ポートフォリオの概要</h3>
        <p class="p-portfolio__text">
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、量、字間この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、量、字間この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。
        </p>
      </div>
      <div class="p-portfolio__description">
        <h3 class="p-portfolio__title" data-heading="Why">なぜこれを作ったか</h3>
        <p class="p-portfolio__text">
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、量、字間この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、量、字間この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。
        </p>
      </div>
      <div class="p-portfolio__description">
        <h3 class="p-portfolio__title" data-heading="How">どんなことを意識して作ったか</h3>
        <p class="p-portfolio__text">
          この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、量、字間この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。
          この文章はダミーです。文字の大きさ、量、字間この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。
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