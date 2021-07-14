const initVivus = () => {
  const vivusProperty =  {
    file: 'wp-content/themes/my-portfolio/assets/images/catchcopy.svg',
    type: 'scenario-sync',
    duration: 8,
    forceRender: false ,
    animTimingFunction: Vivus.EASE
  };

  const vivusPropertySp = {
    file: 'wp-content/themes/my-portfolio/assets/images/catchcopy_sp.svg',
    type: 'scenario-sync',
    duration: 8,
    forceRender: false ,
    animTimingFunction: Vivus.EASE
  };

  const newVivusProperty = (matchMedia('only screen and (max-width: 768px)').matches) ? vivusPropertySp : vivusProperty;
  // if (matchMedia('only screen and (max-width: 768px)').matches) {
  // //スマホ・タブレットの時の処理
  // new Vivus('catchcopy-sp', vivusPropertySp)
  // }else{
  // //PCの時の処理
  // new Vivus('catchcopy-pc', vivusProperty);
  // }
new Vivus('catchcopy', newVivusProperty);
}

initVivus();