jQuery(document).ready(() => {


  const smoothScroll = ()=> {
    const speed = 700;
    const headerHeight = $('.l-header').outerHeight();
    $('a[href*="#"]').click(function(){
      let href= $(this).attr("href");
      const developmentUrl = `${location.protocol}//${location.hostname}:8888${location.pathname}`;
      const productionUrl = `${location.protocol}//${location.hostname}${location.pathname}`;
      const url = (location.href === 'localhost:8888') ? productionUrl : developmentUrl;
      href = href.replace(url, '');
      const target = $(href == "#" || href == "" ? 'html' : href);
      const position = target.offset().top - headerHeight;
      $("html, body").animate({scrollTop:position }, speed, "swing");
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

    $burgerIcon.on('click', () => {
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
        .fadeOut().promise().done(() => {
          $skillIconCategory.addClass('is-animated').fadeIn();
        });
      } else {
        $skillIconCategory.removeClass('is-animated')
        .fadeOut().promise().done(() => {
          $skillIconCategory.filter(`[data-category = "${$activeTabHaveDataFilter}"]`)
          .addClass('is-animated').fadeIn();
        })
      }
    });
  }

  const addAnimationStyle = () => {
    const $window = $(window);
    const $animationAttributeHaveElements = $('*[animation]');
    $animationAttributeHaveElements.addClass('u-invisible');

    $window.on('scroll',() => {
      $animationAttributeHaveElements.each(function () {
        const elementPosition = $(this).offset().top;
        const scroll = $(window).scrollTop();
        const position = elementPosition - (window.innerHeight * 2) / 3;

        if (this.hasAttribute('animation') && (scroll > position)) {
          const animation = this.getAttribute('animation');
          $(this).removeClass('u-invisible').addClass(animation);
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
    smoothScroll();
  }
  init();
});