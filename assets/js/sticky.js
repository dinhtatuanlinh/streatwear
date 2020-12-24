// console.log(comment.offsetTop);
var w = window.innerWidth;
if (w > 600 && document.getElementById("detail") !== null) {
    var pictures = document.getElementsByClassName("pictures")[0];
    var detail = document.getElementById("detail");
    var sticky = detail.offsetTop;
    var comment = document.getElementById("comment");
    var windowheight = window.innerHeight;

    var description = document.getElementsByClassName("description")[0];
    var thumbnail = document.getElementsByClassName("thumbnail")[0];
    var thumbnailwrapper = document.getElementsByClassName("thumbnailwrapper")[0];
    var removesticky = pictures.offsetTop + pictures.offsetHeight - windowheight;
    window.onscroll = () => {
        // && window.pageYOffset <= removesticky
        if (window.pageYOffset >= sticky && window.pageYOffset <= comment.offsetTop - thumbnail.offsetHeight - 50) {
            thumbnail.classList.add("sticky");
            thumbnailwrapper.classList.remove("reverse");
        } else if (window.pageYOffset < sticky) {
            thumbnailwrapper.classList.remove("reverse");
            thumbnail.classList.remove("sticky");
        } else {
            thumbnail.classList.remove("sticky");
            thumbnailwrapper.classList.add("reverse");
        }
        // if (window.pageYOffset >= sticky && window.pageYOffset <= comment.offsetTop - description.offsetHeight) {
        //     description.classList.add("sticky");
        //     // description.classList.remove("reverse");
        // } else {
        //     description.classList.remove("sticky");
        //     // description.classList.add("reverse");
        // }
    }
}