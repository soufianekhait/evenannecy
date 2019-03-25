document.addEventListener("DOMContentLoaded", function(){

    let buttonBegin = document.getElementById("button-home");
    var header = document.getElementById("navbar-wrapper");
    var navbarUl = document.getElementById("navbar");

    if(window.location.pathname == "/"){
        buttonBegin.addEventListener("mouseout", function(){
            this.style.transition = "all 1s ease";
        });

        window.addEventListener("scroll",function(){
            if(document.getElementById("title-home").getBoundingClientRect().top <= 100){
                header.style.backgroundColor = "#222";
                header.style.transitionDuration = "0.2s";
                navbarUl.style.transform = "translateY(-10px)";
                navbarUl.style.transitionDuration = "0.3s";
            } else{
                header.style.backgroundColor = "transparent";
                header.style.transitionDuration = "0.2s";
                navbarUl.style.transform = "translateY(0px)";
                navbarUl.style.transitionDuration = "0.3s";
            }
        });

        let homeBtn = document.getElementById("button-home");

        homeBtn.addEventListener("click", function(){
            window.scrollTo(0,document.getElementById("subscription").offsetHeight);
        });
    } else{
        header.style.backgroundColor = "#222";
        header.style.transitionDuration = "0.2s";
        navbarUl.style.transform = "translateY(-10px)";
        navbarUl.style.transitionDuration = "0.3s";
    }
});