jQuery(document).ready(function () {

  const smoothScroll = () => {
    const $el = $("html, body");
    const $headerAnchorLink = $('a[href*="#"]');
    const headerHeight = $('.l-header').outerHeight();
    const speed = 700;

    const scrollWhenTopPage = () => {
      $headerAnchorLink.on('click', function () {
        let href = $(this).attr("href");
        const developmentURL = location.protocol + "//" + location.hostname + ":8888" + location.pathname;
        const productionURL = location.protocol + "//" + location.hostname + location.pathname;
        const localURL = "localhost";
        const URL = location.href.indexOf(localURL) ? developmentURL : productionURL;
        href = href.replace(URL, "");
        const target = $(href == "#" || href == "" ? "html" : href);
        const position = target.offset().top - headerHeight;
        $el.animate({ scrollTop: position }, speed, "swing");
      });
    }

    const scrollAfterPageTransition = () => {
      let urlHash = location.hash;
      if(urlHash) {
        setTimeout(function() {
          $el.stop().scrollTop(0);
          const target = $(urlHash);
          const position = target.offset().top - headerHeight;
          $el.stop().animate({ scrollTop: position }, speed);
        }, 300);
      }
    }

    scrollWhenTopPage();
    // if (location.pathname = "/PF/") {
    // } else {
    //   scrollAfterPageTransition();
    // }
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
      } else if ($firstViewHeight - headerHeight >= value) {
        $header.removeClass(fixed);
      }
    }

    $window.on('scroll', toggleClass);
  }

  const changeBurgerMenu = () => {
    const $body = $('body');
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

  const init = () => {
    changeBurgerMenu();
    changeSkillPanel();
    smoothScroll();
    addHeaderStyle();
    addAnimationStyle();
  }
  init();

  function a() {
    const $correctButton = $('.c-correct__button');
    function s(e) {
      const parentOffset = $(this).offset(),
          relX = e.pageX - parentOffset.left,
          relY = e.pageY - parentOffset.top;
      $(this).find('span').css({top:relY, left:relX})
      console.log($(this).offset)
    }
      $correctButton.on('mouseenter', s)
      $correctButton.on('mouseout', s);
    // $('c-correct__button').click(function(){return false});
    // $('[href=#]').click(function(){return false});
  }
  a()

});