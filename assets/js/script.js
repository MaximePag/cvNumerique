
$(document).ready(function () {
    $(document).click(function (event) {
        var clickover = $(event.target);
        var _opened = $(".navbar-collapse").hasClass("show");
        if (_opened === true && !clickover.hasClass("navbar-toggler")) {
            $(".navbar-toggler").click();
        }
    });
});


var tw = 0;
var twh2 = 'Apprenti Développeur Web & Web Mobile';
var speed = 80;
function typeWriter() {
    if (tw < twh2.length) {
        document.getElementById("typewriter").innerHTML += twh2.charAt(tw);
        tw++;
        setTimeout(typeWriter, speed);
    }
}
var blinking = document.getElementById('blinkchar');
function blinkingChar() {
    setInterval(function lel() { blinking.classList.toggle('blinking'); }, 500);
}
//HTML5 bar
var htmlBar = new ProgressBar.SemiCircle(html5, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 3,
    svgStyle: null,
    color: '#26A69A',
});
//CSS3 bar
var cssBar = new ProgressBar.SemiCircle(css3, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 3,
    svgStyle: null,
    color: '#26A69A',
});
//JS bar
var jsBar = new ProgressBar.SemiCircle(js, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 3,
    svgStyle: null,
    color: '#26A69A',
});
//Bootstrap bar
var bsBar = new ProgressBar.SemiCircle(bs, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 3,
    svgStyle: null,
    color: '#26A69A',
});
//Ubuntu bar
var ubuntuBar = new ProgressBar.Line(ubuntu, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    color: '#26A69A',
});
//Windows bar
var windowsBar = new ProgressBar.Line(windows, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    color: '#26A69A',
});
//MAC bar
var macBar = new ProgressBar.Line(mac, {
    strokeWidth: 6,
    duration: 1800,
    easing: 'easeInOut',
    trailColor: '#eeeeee',
    trailWidth: 6,
    svgStyle: null,
    color: '#26A69A',
});
//French bar
var frenchBar = new ProgressBar.Circle(french, {
    strokeWidth: 5,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 8,
    svgStyle: null,
    color: '#26A69A',
});
//English bar
var englishBar = new ProgressBar.Circle(english, {
    strokeWidth: 5,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 8,
    svgStyle: null,
    color: '#26A69A',
});
//Portuguese bar
var portugueseBar = new ProgressBar.Circle(portuguese, {
    strokeWidth: 5,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 8,
    svgStyle: null,
    color: '#26A69A',
});
//Spanish bar
var spanishBar = new ProgressBar.Circle(spanish, {
    strokeWidth: 5,
    duration: 2000,
    easing: 'bounce',
    trailColor: '#eeeeee',
    trailWidth: 8,
    svgStyle: null,
    color: '#26A69A',
});

//     window.onscroll = function(){
//     var paragraphList = document.getElementsByTagName('p');
//     var index = parseInt(window.pageYOffset / 50);
//         if(index < paragraphList.length){
//             paragraphList[index].style.display = 'block';
//         }
// }


window.onscroll = function () { animScroll() };

function animScroll() {
    console.log(window.pageYOffset)
    if (window.pageYOffset >= 8100) {
        htmlBar.animate(0.6);
        cssBar.animate(0.55);
        jsBar.animate(0.25);
    }
    if (window.pageYOffset >= 8500) {
        bsBar.animate(0.4);
    }
    if (window.pageYOffset >= 9000) {
        ubuntuBar.animate(0.4);
        windowsBar.animate(0.85);
        macBar.animate(0.05);
    }
    if (window.pageYOffset >= 9400) {
        frenchBar.animate(1.0);
        englishBar.animate(0.6);
        portugueseBar.animate(0.25);
        spanishBar.animate(0.2);
    }
}


// window.onscroll = function () { animScroll() };

// function animScroll() {
//     if (document.body.scrollTop > 8200 || document.documentElement.scrollTop > 8200) {
//         htmlBar.animate(0.6);
//         cssBar.animate(0.55);
//         jsBar.animate(0.25);
//     }
//     if (document.body.scrollTop > 8400 || document.documentElement.scrollTop > 8400) {
//         bsBar.animate(0.4);
//     }
//     if (document.body.scrollTop > 8600 || document.documentElement.scrollTop > 8600) {
//         ubuntuBar.animate(0.4);
//         windowsBar.animate(0.85);
//         macBar.animate(0.05);
//     }
//     if (document.body.scrollTop > 9000 || document.documentElement.scrollTop > 9000) {
//         frenchBar.animate(1.0);
//         englishBar.animate(0.6);
//         portugueseBar.animate(0.25);
//         spanishBar.animate(0.2);
//     }
// }