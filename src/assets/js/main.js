// import 'lazysizes';
import './components/swiper.js';


// COLLAPSE NAVIGATION OFFICE
const officeCollapse = document.querySelector('.navigation--office');
const officeContainer = document.querySelector('.header-navigation--office');

officeCollapse.addEventListener( 'click', () => {
    console.log('click');
    officeContainer.classList.toggle('active');
    if (officeContainer.style.maxHeight){
        officeContainer.style.maxHeight = null;
        console.log('null');
    } else {
        officeContainer.style.maxHeight = officeContainer.scrollHeight + "px";
        console.log('height');
    }
});

// HAMBURGER MENU
const navProjects = document.querySelector('.navigation--projects');
const navOffice = document.querySelector('.navigation--office ');
const hamburgerButton = document.querySelector('button.hamburger');

if ( hamburgerButton ) {
    hamburgerButton.addEventListener('click', () => {
        // HAMBURGER ACTIVE
        hamburgerButton.classList.toggle('active');
        // PROJECT LINK ACTIVE
        navProjects.classList.toggle('active');
        // OFFICE BUTTIN ACTIVE
        navOffice.classList.toggle('active');

        // CLOSE OFFICE CONTAINER
        if ( hamburgerButton.classList.contains('active') ) {
        } else {
            if (officeContainer.style.maxHeight && officeContainer.classList.contains('active') ){
                officeContainer.style.maxHeight = null;
                officeContainer.classList.remove('active');
            }
        }
    });
}

// DONNEES TECHNIQUES
const donnes = document.querySelector('.single-grid--footer-container-left');
const donnesButton = document.querySelector('.donnees-techniques-button');
const donnesClose = document.querySelector('.single-grid--footer-container-left img');

// DONNEES TECHNIQUES BUTTON
if ( donnesButton ) {
    donnesButton.addEventListener( 'click', (e) => {
        e.preventDefault();
        donnes.classList.toggle('active');
    });
}

// DONNEES TECHNIQUES CLOSE BUTTON
if ( donnesClose ) {
    donnesClose.addEventListener( 'click', (e) => {
        e.preventDefault();
        donnes.classList.remove('active');
    });
}

// SHOW HEADER LOGO WHEN STICKY (NOT DONE)
let header = document.querySelector('#masthead');

let options = {
    rootMargin: "0px",
    threshold: 0.1
};

let callback = (entry, observer) => {
    if (entry.intersectionRatio >= 0.1) {
        // target.classList.add("is-visible");
        console.log('visible');
        console.log(entry);

    } else {
        // target.classList.remove("is-visible");
        console.log('not visible');
        console.log(entry);
    }
};

let observer = new IntersectionObserver(callback, options);
observer.observe(header);

