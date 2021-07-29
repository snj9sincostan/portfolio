<?php get_header();?>
<main class="l-main">
  <section class="p-home-firstview" id="firstview">
    <div class="p-home-firstview__inner">
      <div class="p-home-firstview__hero">
        <div class="p-home-firstview__heroItem">
          <div class="p-home-firstview__itemPc" id="catchcopy-pc"></div>
          <div class="p-home-firstview__itemSp" id="catchcopy-sp"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-home-about" id="about">
    <h2 class="c-heading">About</h2>
    <div class="p-home-about__inner">
      <div class="p-home-about__body">
        <div class="p-home-about__nameWrap animate__animated" animation="animate__fadeInLeft">
          <p class="p-home-about__name">西原 伸治</p>
          <p class="p-home-about__ruby">Nishihara Shinji</p>
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
        <img class="p-home-about__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/icon.png" alt="西原伸治">
      </p>
    </div>
  </section>
  <section class="p-home-portfolio" id="portfolio">
    <h2 class="c-heading">Portfolio</h2>
    <div class="p-home-portfolio__inner">
      <?php
        $my_query = sub_loop();

        if ($my_query->have_posts()):
          while ($my_query->have_posts()):
            $my_query->the_post();
      ;?>
        <div class="p-home-portfolio__card animate__animated" animation="animate__fadeInUp">
          <p class="p-home-portfolio__cardImageWrap">
            <?php the_post_thumbnail("", array('class' => 'p-home-portfolio__cardImage'));?>
          </p>
          <h3 class="p-home-portfolio__cardTitle"><?php the_title();?></h3>
          <p class="p-home-portfolio__cardText">
            <?php show_as_excerpt();?>
          </p>
          <div class="c-buttonPrimary p-home-portfolio__button">
            <a class="c-buttonPrimary__link" href="<?php the_permalink(); ?>">Show more</a>
          </div>
        </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </section>
  <section class="p-home-skill" id="skill">
    <h2 class="c-heading">Skill</h2>
    <div class="p-home-skill__body">
      <ul class="p-home-skill__tab animate__animated" id="tab" animation="animate__fadeInUp">
        <li class="p-home-skill__tabItem is-active" data-filter="all">All</li>
        <li class="p-home-skill__tabItem" data-filter="language">Language</li>
        <li class="p-home-skill__tabItem" data-filter="tools">Tools</li>
      </ul>
      <div class="p-home-skill__list animate__animated" id="icons" animation="animate__fadeInUp">
        <p class="p-home-skill__icon" data-category="language">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/html5.svg" alt="HTML5">
        </p>
        <p class="p-home-skill__icon" data-category="language">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/css3.svg" alt="CSS3">
        </p>
        <p class="p-home-skill__icon" data-category="language">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/javascript.svg" alt="JavaScript">
        </p>
        <p class="p-home-skill__icon" data-category="language">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/sass.svg" alt="Sass">
        </p>
        <p class="p-home-skill__icon" data-category="language">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/jquery.svg" alt="jQuery">
        </p>
        <p class="p-home-skill__icon" data-category="tools">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/git.svg" alt="Git">
        </p>
        <p class="p-home-skill__icon" data-category="tools">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/github.svg" alt="GitHub">
        </p>
        <p class="p-home-skill__icon" data-category="tools">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/wordpress.svg" alt="WordPress">
        </p>
        <p class="p-home-skill__icon" data-category="tools">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/babel.svg" alt="BABEL">
        </p>
        <p class="p-home-skill__icon" data-category="tools">
          <img class="p-home-skill__iconImage" src="<?php echo get_template_directory_uri();?>/assets/images/gulp.svg" alt="Gulp">
        </p>
      </div>
    </div>
  </section>
  <section class="p-home-contact" id="contact">
    <h2 class="c-heading">Contact</h2>
    <div class="c-buttonPrimary p-home-contact__button">
      <a class="c-buttonPrimary__link" href="<?php echo home_url('/contact'); ?>">Contact</a>
    </div>
  </section>
</main>
<?php get_footer();?>