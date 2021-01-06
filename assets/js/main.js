// sidebar menu
function w3_open() {
    document.getElementById("menusidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("menusidebar").style.display = "none";
}
// end sidebar menu

// tabs
var tabs = document.getElementsByClassName("tabs");

for (var i = 0; i < tabs.length; i++) {
    tabs[i].onclick = (element) => {
        var itags = element.target.parentElement.getElementsByTagName('i');
        if (itags[0].style.display === "none") {
            itags[0].style.display = "block";
            itags[1].style.display = "none";
            element.target.parentElement.getElementsByClassName("contenttabs")[0].style.display = "block";
        } else {
            itags[0].style.display = "none";
            itags[1].style.display = "block";
            element.target.parentElement.getElementsByClassName("contenttabs")[0].style.display = "none";
        }
    }
}
// end tabs

// disable addtocart buttons
var add_to_cart_button = document.getElementsByClassName('add_to_cart_button');
if (add_to_cart_button.length !== 0) {
    for (var i = 0; i < add_to_cart_button.length; i++) {
        add_to_cart_button[i].onclick = (e) => {
            // console.log(e);
            e.target.style.display = "none"
        }
    }
}