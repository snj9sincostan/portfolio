jQuery(document).ready(function () {
  const initVivus = () => {
    const vivusProperty =  {
      type: 'scenario-sync',
      duration: 8,
      forceRender: false ,
      animTimingFunction: Vivus.EASE
    }

    new Vivus('catchcopy-pc', vivusProperty)
    new Vivus('catchcopy-sp', vivusProperty)
  }

  const smoothScroll = () => {
    const speed = 700;
    const sectionTopDistance = 70;
    $('a[href*="#"]').on('click', function () {
      let href = $(this).attr("href");
      const developmentURL = location.protocol + "//" + location.hostname + ":8888" + location.pathname;
      const productionURL = location.protocol + "//" + location.hostname + location.pathname;
      const localURL = "localhost";
      const URL = location.href.indexOf(localURL) ? developmentURL : productionURL;
      href = href.replace(URL, "");
      const target = $(href == "#" || href == "" ? "html" : href);
      const position = target.offset().top - sectionTopDistance;
      $("html, body").animate({ scrollTop: position }, speed, "swing");
    });
  }

  const addHeaderStyle = () => {
    const $window = $(window)
    const $header = $('.l-header');
    const $firstView = $('#firstview');
    const $firstViewHeight = $firstView.outerHeight();
    const fixed = 'is-fixed';
    const headerHeight = 70;

    function toggleClass() {
      const value = $window.scrollTop();
      if ($firstViewHeight - headerHeight <= value) {
        $header.addClass(fixed);
      } else {
        $header.removeClass(fixed);
      }
    }

    $window.on('scroll', toggleClass);
  }

  const changeBurgerMenu = () => {
    const $body = $('body'); //スクロール防止
    const $header = $('.l-header');
    const $burgerIcon = $('.l-header__burger');
    const $headerNav = $('.l-header__nav');
    const $navItem = $('.l-header__item')

    const clickCloseNavMenu = () => {
      $burgerIcon.trigger('click');
    }

    $burgerIcon.on('click', function() {
      $body.toggleClass('u-no-scroll');
      $burgerIcon.toggleClass('is-open');
      $headerNav.toggleClass('is-show');
      $header.toggleClass('is-active');
      $navItem.on('click', clickCloseNavMenu);
    });
  }

  const changeSkillPanel = () => {
    const $tabDataFilter = $('#tab [data-filter]');
    const $skillIconCategory = $('#icons [data-category]');

    $tabDataFilter.on('click', function(e) {
      e.preventDefault();
      const $this = $(this);
      $tabDataFilter.removeClass('is-active');
      $this.addClass('is-active');

      const $activeTabHaveDataFilter = $this.attr('data-filter');

      if ($activeTabHaveDataFilter == 'all') {
        $skillIconCategory.removeClass('is-animated')
        .fadeOut().promise().done(function() {
          $skillIconCategory.addClass('is-animated').fadeIn();
        });
      } else {
        $skillIconCategory.removeClass('is-animated')
        .fadeOut().promise().done(function() {
          $skillIconCategory.filter('[data-category = "'+ $activeTabHaveDataFilter +'"]')
          .addClass('is-animated').fadeIn();
        })
      }
    });
  }

  const addAnimationStyle = () => {
    const $window = $(window);
    const $animationAttributeHaveElements = $('*[animation]');
    $animationAttributeHaveElements.addClass('is-invisible');

    $window.on('scroll',function () {
      $animationAttributeHaveElements.each(function () {
        const elementPosition = $(this).offset().top;
        const scroll = $(window).scrollTop();
        const position = elementPosition - (window.innerHeight * 2) / 3;

        if (this.hasAttribute('animation') && (scroll > position)) {
          const animation = this.getAttribute('animation');
          $(this).removeClass('is-invisible').addClass(animation);
        }
      });
    });
  }

  const startPlugins = () => {
    initVivus()
  }

  const init = () => {
    startPlugins()
    changeBurgerMenu();
    changeSkillPanel();
    smoothScroll();
    addHeaderStyle();
    addAnimationStyle();
  }
  init();

});