var animation = {
    duration: 50000,
    easing: (t) => t
}

var slider = new KeenSlider("#sliderHeader", {
    loop: true,
    renderMode: "performance",
    slides: {
        perView: "auto"
    },
    created(s) {
        s.moveToIdx(11, true, animation)
    },
    updated(s) {
        s.moveToIdx(s.track.details.abs + 11, true, animation)
    },
    animationEnded(s) {
        s.moveToIdx(s.track.details.abs + 11, true, animation)
    }
});

var myNav = document.querySelector(".navbar-fixed-top");

window.onscroll = function () {
    "use strict";
    if (document.body.scrollTop >= 1 || document.documentElement.scrollTop >= 1) {
        myNav.classList.add("scrolled");
    } else {
        myNav.classList.remove("scrolled");
    }
};

window.onload = function () {
    if (document.body.scrollTop >= 1 || document.documentElement.scrollTop >= 1) {
        myNav.classList.add("scrolled");
    } else {
        myNav.classList.remove("scrolled");
    }
}

function pesquisaTodos() {
    var input, filter, div, div_item, ahref, i, txtValue;
    input = document.getElementById("pesquisaTodos");
    filter = input.value.toUpperCase();
    div = document.getElementById("accordionFlushTodos");
    div_item = div.getElementsByTagName("div");

    for (i = 0; i < div_item.length; i++) {
        ahref = div_item[i].getElementsByTagName("button")[0];
        if (ahref) {
            txtValue = ahref.textContent || ahref.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                div_item[i].style.display = "";
            } else {
                div_item[i].style.display = "none";
            }
        }
    }
}

function pesquisaBranding() {
    var input, filter, div, div_item, ahref, i, txtValue;
    input = document.getElementById("pesquisaBranding");
    filter = input.value.toUpperCase();
    div = document.getElementById("accordionFlushBranding");
    div_item = div.getElementsByTagName("div");

    for (i = 0; i < div_item.length; i++) {
        ahref = div_item[i].getElementsByTagName("button")[0];
        if (ahref) {
            txtValue = ahref.textContent || ahref.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                div_item[i].style.display = "";
            } else {
                div_item[i].style.display = "none";
            }
        }
    }
}

function pesquisaUiUx() {
    var input, filter, div, div_item, ahref, i, txtValue;
    input = document.getElementById("pesquisaUiUx");
    filter = input.value.toUpperCase();
    div = document.getElementById("accordionFlushUiUx");
    div_item = div.getElementsByTagName("div");

    for (i = 0; i < div_item.length; i++) {
        ahref = div_item[i].getElementsByTagName("button")[0];
        if (ahref) {
            txtValue = ahref.textContent || ahref.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                div_item[i].style.display = "";
            } else {
                div_item[i].style.display = "none";
            }
        }
    }
}

function pesquisaSocialMedia() {
    var input, filter, div, div_item, ahref, i, txtValue;
    input = document.getElementById("pesquisaSocialMedia");
    filter = input.value.toUpperCase();
    div = document.getElementById("accordionFlushSocialMedia");
    div_item = div.getElementsByTagName("div");

    for (i = 0; i < div_item.length; i++) {
        ahref = div_item[i].getElementsByTagName("button")[0];
        if (ahref) {
            txtValue = ahref.textContent || ahref.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                div_item[i].style.display = "";
            } else {
                div_item[i].style.display = "none";
            }
        }
    }
}