var pictures = document.getElementsByClassName("pictures")[0];
var slideIndex = 1;
var mobileslider = "mobileslider";
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
showDivs(slideIndex, mobileslider);

function mb_plusDivs(n) {
    showDivs(slideIndex += n, mobileslider);
}

function showDivs(n, classvar) {
    var i;
    var x = document.getElementsByClassName(classvar);
    if (n > x.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";

}