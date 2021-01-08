var menuMobile = '',
    menuMobileBtn = '';

/* CUSTOM ON LOAD FUNCTIONS */
function documentCustomLoad() {
    "use strict";
    console.log('Functions Correctly Loaded');
    menuMobileBtn = document.getElementById('menuMobileBtn');
    menuMobileBtn.addEventListener('click', menuOpener, false);
}

function menuOpener() {
    menuMobile = document.getElementById('menuMobile');
    menuMobile.classList.toggle('header-mobile-hidden');
}

document.addEventListener("DOMContentLoaded", documentCustomLoad, false);