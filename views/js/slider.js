// slider control
var slideIndex = 1;
var mobileslider = "mobileslider";
var desktopslider = "desktopslider";
showDivs(slideIndex, mobileslider);
showDivs(slideIndex, desktopslider);
document.addEventListener('swiped-left', () => {

    slideIndex -= 1;
    var i;
    var x = document.getElementsByClassName(mobileslider);
    if (slideIndex > x.length) {
        slideIndex = 1;
    }
    if (slideIndex < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
});
document.addEventListener('swiped-right', () => {

    slideIndex += 1;
    var i;
    var x = document.getElementsByClassName(mobileslider);
    if (slideIndex > x.length) {
        slideIndex = 1;
    }
    if (slideIndex < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
});

function plusDivs(n) {
    showDivs(slideIndex += n, desktopslider);
}

function mb_plusDivs(n) {
    showDivs(slideIndex += n, mobileslider);
}

function showDivs(n, classvar) {
    var i;
    var x = document.getElementsByClassName(classvar);
    if (n > x.length) {
        slideIndex = 1;
    }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";

}
// end slider
// product slider
function responsiveSlider() {
    const slider = document.querySelector('.slidercontainer');
    let sliderWidth = slider.offsetWidth / 3;
    const sliderList = document.getElementById('slidewrapper');
    let items = sliderList.querySelectorAll('li').length - 2;
    let count = 1;

    window.addEventListener('resize', function() {
        sliderWidth = slider.offsetWidth;
    });

    function prevSlide() {
        if (count > 1) {
            count = count - 2;
            sliderList.style.left = '-' + count * sliderWidth + 'px';
            count++;
        } else if (count == 1) {
            count = items - 1;
            sliderList.style.left = '-' + count * sliderWidth + 'px';
            count++;
        }

    }

    function nextSlide() {
        if (count < items) {
            sliderList.style.left = '-' + count * sliderWidth + 'px';
            count++;

        } else if (count == items) {
            sliderList.style.left = '0px';
            count = 1;

        }
    }
    prev.addEventListener('click', prevSlide);
    next.addEventListener('click', nextSlide);
    setInterval(function() {
        nextSlide();
    }, 4000);
}

window.onload = function() {
        responsiveSlider();
    }
    // end product slider