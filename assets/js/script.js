// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
var ProgressBar = require('progressbar.min.js')
var line = new ProgressBar.Line('#container');

var bar = new ProgressBar.SemiCircle(container, {
    strokeWidth: 6,
    easing: 'easeInOut',
    duration: 1400,
    color: '#FFEA82',
    trailColor: '#eee',
    trailWidth: 1,
    svgStyle: null
});

bar.animate(1.0);  // Number from 0.0 to 1.0