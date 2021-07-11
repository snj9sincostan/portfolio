<?php get_header();?>
<main class="l-main">
  <section class="p-home-firstview" id="firstview">
    <div class="p-home-firstview__inner">
      <div class="p-home-firstview__hero">
        <div class="p-home-firstview__hero-item">
          <div class="p-home-firstview__itemPc" id="catchcopy-pc"></div>
          <div class="p-home-firstview__itemSp" id="catchcopy-sp"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-home-about" id="about">
    <h2 class="c-headingPrimary">About</h2>
    <div class="p-home-about__inner">
      <div class="p-home-about__body">
        <div class="p-home-about__name animate__animated" animation="animate__fadeInLeft">
          <p class="p-home-about__ja">西原 伸治</p>
          <p class="p-home-about__en">Nishihara Shinji</p>
        </div>
        <div class="p-home-about__description animate__animated" animation="animate__fadeInUp">
          <p>Webフロントエンドエンジニアです。</p>
          <p>【略歴】</p>
          <p>地元専門学校を卒業後、半導体エンジニアを2年経験。その後自身のキャリアの幅を広げるべくIT業界へ。現在はフロントエンドエンジニアとして活動中です。</p>
          <p>【趣味】</p>
          <p>ボウリング/ダーツ/ゲーム/料理</p>
        </div>
      </div>
      <p class="p-home-about__icon animate__animated" animation="animate__rollIn">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/icon.png" alt="西原伸治">
      </p>
    </div>
  </section>
  <section class="p-home-portfolio" id="portfolio">
    <h2 class="c-headingPrimary">Portfolio</h2>
    <div class="p-home-portfolio__inner">
      <article class="c-card p-home-portfolio__card animate__animated" animation="animate__fadeInUp">
        <p class="c-card__image">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/Hero.png" alt="">
        </p>
        <h3 class="c-card__title">ポートフォリオ名</h3>
        <p class="c-card__text">
          テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、
        </p>
        <button class="c-buttonPrimary p-home-portfolio__button">
          <a href="<?php echo home_url('/portfolio'); ?>">Show more</a>
        </button>
      </article>
      <article class="c-card p-home-portfolio__card animate__animated" animation="animate__fadeInUp">
        <p class="c-card__image">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/Hero.png" alt="">
        </p>
        <h3 class="c-card__title">ポートフォリオ名</h3>
        <p class="c-card__text">
          テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、
        </p>
        <button class="c-buttonPrimary p-home-portfolio__button">
          <a href="<?php echo home_url('/portfolio2'); ?>">Show more</a>
        </button>
      </article>
      <article class="c-card p-home-portfolio__card animate__animated" animation="animate__fadeInUp">
        <p class="c-card__image">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/Hero.png" alt="">
        </p>
        <h3 class="c-card__title">ポートフォリオ名</h3>
        <p class="c-card__text">
          テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、テキスト、
        </p>
        <button class="c-buttonPrimary p-home-portfolio__button">
          <a href="<?php echo home_url('/portfolio3'); ?>">Show more</a>
        </button>
      </article>
    </div>
  </section>
  <section class="p-home-skill" id="skill">
    <h2 class="c-headingPrimary">Skill</h2>
    <div class="p-home-skill__body">
      <ul class="c-tab animate__animated" id="tab" animation="animate__fadeInUp">
        <li class="c-tab__item is-active" data-filter="all">All</li>
        <li class="c-tab__item" data-filter="language">Language</li>
        <li class="c-tab__item" data-filter="tools">Tools</li>
      </ul>
      <div class="p-home-skill__list animate__animated" id="icons" animation="animate__fadeInUp">
        <p class="c-skill-icon p-home-skill__icon" data-category="language">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/html5.svg" alt="HTML5" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="language">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/css3.svg" alt="CSS3" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="language">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/javascript.svg" alt="JavaScript" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="language">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/sass.svg" alt="Sass" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="language">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/jquery.svg" alt="jQuery" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="tools">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/git.svg" alt="Git" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="tools">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/github.svg" alt="GitHub" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="tools">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/wordpress.svg" alt="WordPress" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="tools">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/babel.svg" alt="BABEL" class="c-skill-icon__image">
        </p>
        <p class="c-skill-icon p-home-skill__icon" data-category="tools">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/gulp.svg" alt="Gulp" class="c-skill-icon__image">
        </p>
      </div>
    </div>
  </section>
  <section class="p-home-contact" id="contact">
    <h2 class="c-headingPrimary">Contact</h2>
    <button class="c-buttonPrimary p-home-contact__button">
      <a href="<?php echo home_url('/contact'); ?>">Contact</a>
    </button>
  </section>
</main>
<?php get_footer();?>