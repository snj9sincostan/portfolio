<?php get_header();?>
  <main class="l-main">
    <div class="l-contact-wrap">
      <h2 class="c-headingPrimary">Contact</h2>
      <p class="c-contactText">お問い合わせ内容の入力をお願いします。</p>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer();?>


<div class="p-contact-form">
  <dl class="p-contact-form__items">
    <dt class="p-contact-form__title">
      <label for="username">お名前</label><span class="p-contact-form__required">必須</span>[mwform_error keys="username"]
    </dt>
    <dd class="p-contact-form__inputWrap u-fz-16">[mwform_text name="username" class="p-contact-form__input"]</dd>
  </dl>
  <dl class="p-contact-form__items">
    <dt class="p-contact-form__title">
      <label for="email">メールアドレス</label><span class="p-contact-form__required">必須</span>[mwform_error keys="email"]
    </dt>
    <dd class="p-contact-form__inputWrap u-fz-16">[mwform_email name="email" class="p-contact-form__input"]</dd>
  </dl>
  <dl class="p-contact-form__items">
    <dt class="p-contact-form__title">
      <label for="contact">お問い合わせ内容</label><span class="p-contact-form__required">必須</span>[mwform_error keys="textarea"]
    </dt>
    <dd class="p-contact-form__inputWrap u-fz-16">[mwform_textarea name="textarea" id="contact" class="p-contact-form__textarea"]</dd>
  </dl>
  <div class="p-contact-form__button">
  [mwform_submitButton name="mwform_submitButton-495" class="c-button--correct" confirm_value="入力内容を確認" submit_value="入力内容を送信"]
  [mwform_backButton class="c-button--fix" value="修正する"]
  </div>
</div>