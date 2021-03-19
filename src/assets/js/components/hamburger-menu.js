// HAMBURGER MENU
const officeContainer = document.querySelector('.header-navigation--office');
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
