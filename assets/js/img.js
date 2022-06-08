/**
 * Img.js - javascript to change the behavior of images in the photo gallery
 * @author V. Schuster
 * @version 3004
 */


const cards = document.getElementsByClassName('card');
const cardsTall = document.getElementsByClassName('card-tall');
const cardsWide = document.getElementsByClassName('card-wide');

//for smalles displays, change only the height
const mediaQuery = '(max-width: 768px)';
const mediaQueryList = window.matchMedia(mediaQuery);
var isMobile = false;

mediaQueryList.addEventListener('change', event => {
    isMobile = (event.matches) ? true : false;
})

//enlarge image onclick
function zoomImage(img) {

    if (img.classList.contains('card-tall') && !isMobile) {
        if (img.style.width == "100%") {
            img.style.width = "150%";
        } else {
            img.style.width = "100%";
        }
    } else if (img.classList.contains('card-wide') || isMobile) {
        if (img.style.height == "100%") {
            img.style.height = "150%";
        } else {
            img.style.height = "100%";
        }
    } else {
        if (img.style.width == "100%" && img.style.height == "100%") {
            img.style.height = "150%";
            img.style.width = "150%";
        } else {
            img.style.height = "100%";
            img.style.width = "100%";
        }
    }

    //resize all images back to original size when cliecked away
    var imgLen = cards.length;
    for (let i = 0; i < imgLen; i++) {
        if (cards[i].id != img.id) {
            cards[i].style.width = "100%";
            cards[i].style.height = "100%";
        }
    }
}