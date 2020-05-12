//HTML5 bar
var htmlBar = new ProgressBar.SemiCircle(html5, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#59B9D0', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//CSS3 bar
var cssBar = new ProgressBar.SemiCircle(css3, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#59B9D0', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//JS bar
var jsBar = new ProgressBar.SemiCircle(js, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#59B9D0', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//Bootstrap bar
var bsBar = new ProgressBar.SemiCircle(bs, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#59B9D0', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//Ubuntu bar
var ubuntuBar = new ProgressBar.Line(ubuntu, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#59B9D0', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//Windows bar
var windowsBar = new ProgressBar.Line(windows, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#59B9D0', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//MAC bar
var macBar = new ProgressBar.Line(mac, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#59B9D0', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//French bar
var frenchBar = new ProgressBar.Circle(french, {
    strokeWidth: 6,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#1F65A6', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//English bar
var englishBar = new ProgressBar.Circle(english, {
    strokeWidth: 6,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#1F65A6', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//Portuguese bar
var portugueseBar = new ProgressBar.Circle(portuguese, {
    strokeWidth: 6,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#1F65A6', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
//Spanish bar
var spanishBar = new ProgressBar.Circle(spanish, {
    strokeWidth: 6,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    from: { color: '#1F65A6', a: 0 },
    to: { color: '#00243D', a: 1 },
    step: function (state, circle) {
        circle.path.setAttribute('stroke', state.color);
    }
});
window.onscroll = function () { animScroll() };

function animScroll() {
    if (document.body.scrollTop > 8200 || document.documentElement.scrollTop > 8200) {
        htmlBar.animate(0.6);
        cssBar.animate(0.55);
        jsBar.animate(0.25);
    }
    if (document.body.scrollTop > 8400 || document.documentElement.scrollTop > 8400) {
        bsBar.animate(0.4);
    }
    if (document.body.scrollTop > 8600 || document.documentElement.scrollTop > 8600) {
        ubuntuBar.animate(0.4);
        windowsBar.animate(0.85);
        macBar.animate(0.05);
    }
    if (document.body.scrollTop > 9000 || document.documentElement.scrollTop > 9000) {
        frenchBar.animate(1.0);
        englishBar.animate(0.6);
        portugueseBar.animate(0.25);
        spanishBar.animate(0.2);
    }
}