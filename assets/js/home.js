/**
 * Home.js - javascript to change the behavior of the home page when scrolling
 * @author V. Schuster
 * @version 3004
 */

//changing the opacity of the image on scroll: https://stackoverflow.com/questions/43569824/changing-opacity-when-scrolling

const background = document.querySelector('#hero');

window.addEventListener('scroll', () => {
    var currentScrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0; // for all browsers
    background.style.opacity = (currentScrollPos > 60) ? -currentScrollPos / 420 + 1.75 : 1;
});

