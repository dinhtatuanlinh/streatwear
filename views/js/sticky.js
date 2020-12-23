var pictures = document.getElementsByClassName("pictures")[0];
var detail = document.getElementById("detail");
var comment = document.getElementById("comment");
var windowheight = window.innerHeight;
var sticky = detail.offsetTop;
var description = document.getElementsByClassName("description")[0];
var thumbnail = document.getElementsByClassName("thumbnail")[0];
var removesticky = pictures.offsetTop + pictures.offsetHeight - windowheight;
// console.log(comment.offsetTop);

window.onscroll = () => {
    // && window.pageYOffset <= removesticky
    if (window.pageYOffset >= sticky && window.pageYOffset <= comment.offsetTop - thumbnail.offsetHeight) {
        thumbnail.classList.add("sticky");
        thumbnail.classList.remove("reverse");
    } else {
        thumbnail.classList.remove("sticky");
        thumbnail.classList.add("reverse");
    }
    if (window.pageYOffset >= sticky && window.pageYOffset <= comment.offsetTop - description.offsetHeight) {
        description.classList.add("sticky");
        // description.classList.remove("reverse");
    } else {
        description.classList.remove("sticky");
        // description.classList.add("reverse");
    }
}