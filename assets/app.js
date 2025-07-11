// import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */

// import '@fortawesome/fontawesome-free/css/all.min.css';
// import '@fortawesome/fontawesome-free/js/all.js';

import './styles/app.scss';

// console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');


document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.querySelector('.burger-menu');
    const mainNav = document.querySelector('.main-nav');

    burgerMenu.addEventListener('click', function() {
        this.classList.toggle('active');
        mainNav.classList.toggle('active');
    });

    // Fermer le menu si on clique en dehors
    document.addEventListener('click', function(event) {
        if (!mainNav.contains(event.target) && !burgerMenu.contains(event.target)) {
            burgerMenu.classList.remove('active');
            mainNav.classList.remove('active');
        }
    });
});