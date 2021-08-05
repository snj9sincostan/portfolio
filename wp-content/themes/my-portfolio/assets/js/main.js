jQuery(document).ready(() => {

  const smoothScroll = ()=> {
    const speed = 700;
    const headerHeight = $(".l-header").outerHeight();
    const $headerLink = $(`a[href*="#"]`);

    const init = (event) => {
      const $this = $(event.currentTarget);
      let href= $this.attr("href");
      const developmentUrl = `${location.protocol}//${location.hostname}:8888${location.pathname}`;
      const productionUrl = `${location.protocol}//${location.hostname}${location.pathname}`;
      const url = (location.href === "localhost:8888") ? productionUrl : developmentUrl;
      href = href.replace(url, "");
      const target = $(href == "#" || href == "" ? "html" : href);
      const position = target.offset().top - headerHeight;
      $("html, body").animate({scrollTop:position }, speed, "swing");
    }

    $headerLink.on("click", init);
  }

  const addHeaderStyle = () => {
    const $window = $(window);
    const $header = $(".l-header");
    const $firstView = $("#firstview");
    const $firstViewHeight = $firstView.outerHeight();
    const fixed = "is-fixed";
    const headerHeight = 70;

    const init = () => {
      const value = $window.scrollTop();
      if ($firstViewHeight - headerHeight <= value) {
        $header.addClass(fixed);
      } else if ($firstViewHeight - headerHeight >= value) {
        $header.removeClass(fixed);
      }
    }

    $window.on("scroll", init);
  }

  const changeBurgerMenu = () => {
    const $body = $("body");
    const $header = $(".l-header");
    const $burgerIcon = $(".l-header__burger");
    const $headerNav = $(".l-header__nav");
    const $navItem = $(".l-header__item");

    const clickCloseNavMenu = () => {
      $burgerIcon.trigger("click");
    }

    const init = () => {
      $body.toggleClass("u-no-scroll");
      $burgerIcon.toggleClass("is-open");
      $headerNav.toggleClass("is-show");
      $header.toggleClass("is-active");
      $navItem.on("click", clickCloseNavMenu);
    }

    $burgerIcon.on("click", init);
  }

  const changeSkillPanel = () => {
    const $tabDataFilter = $("#tab [data-filter]");
    const $skillIconCategory = $("#icons [data-category]");

    const init = (event) => {
      event.preventDefault();
      const $this = $(event.currentTarget);
      $tabDataFilter.removeClass("is-active");
      $this.addClass("is-active");
      const $activeTabHaveDataFilter = $this.attr("data-filter");
      if ($activeTabHaveDataFilter == "all") {
        $skillIconCategory.removeClass("is-animated").fadeOut().promise().done(() => {
          $skillIconCategory.addClass("is-animated").fadeIn();
        });
      } else {
        $skillIconCategory.removeClass("is-animated").fadeOut().promise().done(() => {
          $skillIconCategory.filter(`[data-category = "${$activeTabHaveDataFilter}"]`).addClass("is-animated").fadeIn();
        });
      }
    }

    $tabDataFilter.on("click", init);
  }

  const showAnimation = () => {
    const $window = $(window);
    const $animationAttributeHaveElements = $("[animation]");
    $animationAttributeHaveElements.addClass("u-invisible");

    const addAnimationStyle = () => {
      $animationAttributeHaveElements.each((index, element) => {
        const $this = $(element);
        const $element = $(element)[0];
        const elementPosition = $this .offset().top;
        const scroll = $window.scrollTop();
        const position = elementPosition - (window.innerHeight * 2) / 5;
        if ($element.hasAttribute("animation") && (scroll > position)) {
          const animation = $element.getAttribute("animation");
          $this.removeClass("u-invisible").addClass(animation);
        }
      });
    }

    $window.on("scroll", addAnimationStyle);
  }

  const init = () => {
    changeBurgerMenu();
    changeSkillPanel();
    smoothScroll();
    addHeaderStyle();
    showAnimation();
  }
  init();
});