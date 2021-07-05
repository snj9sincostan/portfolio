<?php get_header();?>
  <main class="l-main">
    <div class="l-contact-wrap">
      <h2 class="c-heading">Contact</h2>
      <p class="p-contact-text">お問い合わせ内容の入力をお願いします。</p>
      <form class="p-contact-form">
        <dl class="p-contact-form__items">
          <dl class="p-contact-form__title"><label for="name">お名前</label><span class="c-required">必須</span></dl>
          <dd class="p-contact-form__input-wrap"><input id="name" type="text"></dd>
        </dl>
        <dl class="p-contact-form__items">
          <dl class="p-contact-form__title"><label for="email">メールアドレス</label><span class="c-required">必須</span></dl>
          <dd class="p-contact-form__input-wrap"><input id="email" type="text"></dd>
        </dl>
        <dl class="p-contact-form__items">
          <dl class="p-contact-form__title"><label for="contact">お問い合わせ内容</label><span class="c-required">必須</span></dl>
          <dd class="p-contact-form__input-wrap"><textarea name="textarea" id="contact"></textarea></dd>
        </dl>
      </form>
      <div class="c-correct p-contact-button">
        <a class="c-correct__button" href="<?php echo home_url('/contact-confirm'); ?>">入力内容を確認<span></span></a>
      </div>
    </div>
  </main>
<?php get_footer();?>