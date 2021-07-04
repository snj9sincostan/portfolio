const initVivus = () => {
  const vivusProperty =  {
    type: 'scenario-sync',
    duration: 8,
    forceRender: false ,
    animTimingFunction: Vivus.EASE
  };

  new Vivus('catchcopy-pc', vivusProperty);
  new Vivus('catchcopy-sp', vivusProperty);
}

initVivus();