window.onscroll = function () {scrollNavBar()};
function scrollNavBar() {
    var navbar = document.getElementById("navbar");
    var stycky = navbar.offsetTop;
    if (window.pageYOffset >= stycky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
    
}