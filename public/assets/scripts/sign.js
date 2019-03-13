document.addEventListener("DOMContentLoaded", function(){

    var header = document.getElementById("navbar-wrapper");
    var navbarUl = document.getElementById("navbar");

    if(window.location.pathname == "/"){
        header.style.backgroundColor = "transparent";
        header.style.transitionDuration = "0.2s";
        navbarUl.style.transform = "translateY(0px)";
        navbarUl.style.transitionDuration = "0.3s";
    } else{
        header.style.backgroundColor = "#222";
        header.style.transitionDuration = "0.2s";
        navbarUl.style.transform = "translateY(-10px)";
        navbarUl.style.transitionDuration = "0.3s";
    }

});