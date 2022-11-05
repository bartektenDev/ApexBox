window.onload = function onLoad() {
    var circle = new ProgressBar.Circle('#progress', {
      strokeWidth: 6,
      easing: 'easeInOut',
      duration: 1400,
      color: '#FFEA82',
      trailColor: '#eee',
      trailWidth: 1,
      svgStyle: null
    });

    circle.animate(1);
};
