<?php get_header();?>
  <main class="l-main">
    <div class="l-contact-wrap u-screen-whitespace-adjust">
      <h2 class="c-heading">Contact</h2>
      <p class="p-contact-text">お問い合わせ内容をご確認ください。</p>
      <form class="p-contact-form">
        <dl class="p-contact-form__items">
          <dl class="p-contact-form__title">お名前</dl>
          <dd class="p-contact-form__input-wrap u-fz-16">田中 太郎</dd>
        </dl>
        <dl class="p-contact-form__items">
          <dl class="p-contact-form__title">メールアドレス</dl>
          <dd class="p-contact-form__input-wrap u-fz-16">XXXXXX@contact.com</dd>
        </dl>
        <dl class="p-contact-form__items">
          <dl class="p-contact-form__title">お問い合わせ内容</dl>
          <dd class="p-contact-form__input-wrap u-fz-16">
            いつもお世話になっております。
            株式会社〇〇商事の田中太郎と申します。

            〇〇の件で問い合わせいたしました。
            〇〇の件に関して折り返しのご連絡よろしくお願いいたします。
          </dd>
        </dl>
      </form>
      <div class="p-contact-button">
        <p class="c-corect">
          <a class="c-correct__button" href="<?php echo home_url('/contact-complete'); ?>">入力内容を送信<span></span></a>
        </p>
        <p class="c-fix p-contact-button__fix">
          <a class="c-fix__button" href="<?php echo home_url('/contact'); ?>">修正する</a>
        </p>
      </div>
    </div>
  </main>
<?php get_footer();?>