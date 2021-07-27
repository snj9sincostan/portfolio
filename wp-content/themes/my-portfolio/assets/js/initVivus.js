const initVivus = () => {
  const vivusProperty =  {
    file: 'wp-content/themes/my-portfolio/assets/images/animated/catchcopy.svg',
    type: 'scenario-sync',
    duration: 8,
    forceRender: false ,
    animTimingFunction: Vivus.EASE
  };

  const vivusPropertySp = {
    file: 'wp-content/themes/my-portfolio/assets/images/animated/catchcopy_sp.svg',
    type: 'scenario-sync',
    duration: 8,
    forceRender: false ,
    animTimingFunction: Vivus.EASE
  };

    new Vivus('catchcopy-pc', vivusProperty);
    new Vivus('catchcopy-sp', vivusPropertySp)
}

initVivus();