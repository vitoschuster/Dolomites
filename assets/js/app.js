/**
 * App.js - java script used to add responsive effects to enhance the website, mostly navbar
 * @author V. Schuster
 * @version 3004
 */

//changing background of navbar on scroll
const nav = document.getElementById('navbig');
const dropdown = document.querySelector('nav#navbig ul li ul');
var navLinks = document.querySelectorAll('nav#navbig ul li a');
console.log(nav, dropdown);

window.onscroll = () => {
    if (window.scrollY > 60) {
        nav.classList.add('nav-scroll-active');
        dropdown.classList.add('nav-scroll-active');
        for (const element of navLinks) element.classList.add('a-scroll-active');

    } else {
        nav.classList.remove('nav-scroll-active');
        dropdown.classList.remove('nav-scroll-active');
        for (const element of navLinks) element.classList.remove('a-scroll-active');
    }
}

