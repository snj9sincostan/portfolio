const initVivus = () => {
  const vivusProperty =  {
    type: 'scenario-sync',
    duration: 8,
    forceRender: false ,
    animTimingFunction: Vivus.EASE
  }

  new Vivus('catchcopy', vivusProperty)
}

const smoothScroll = () => {
  const speed = 700;
  const sectionTopDistance = 49;
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

const changeSkillPanel = () => {
  const active = $('is-active');
  const $skillTab = $('.c-tab__item');
  $skillTab.on('click', function() {
    this.toggleClass('is-active')
  })

}
changeSkillPanel()
initVivus()
smoothScroll()
addHeaderStyle()