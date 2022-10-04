let home = document.querySelector('.home');
let archive = document.querySelector('.archive');

let bureaux = document.querySelector('.category-bureaux');
let commercial = document.querySelector('.category-commercial');
let hospitalite = document.querySelector('.category-hospitalite');
let residentiel = document.querySelector('.category-residentiel');

let toutVoirDesktop = document.querySelector('.header-category #all-projects');
let toutVoirMobile = document.querySelector('.navigation--projects #all-projects');
let projectsItem = document.querySelectorAll('.grid-item');
let headerCategoryItems = document.querySelectorAll('.category-item');

let categoryClassesBureaux = ['hospitalite', 'commercial', 'residentiel', 'commercial'];

headerCategoryItems.forEach( item => {
    item.addEventListener('click', (e) => {

        const navProjects = document.querySelector('.navigation-projects');
        const navOffice = document.querySelector('.navigation--office');
        const navHamburger = document.querySelector('.navigation--hamburger');

        // BUREAUX
        if ( item.classList.contains('category-bureaux') ) {
            console.log( 'categorie bureaux' );

            projectsItem.forEach( gridItem => {

                // REMOVE IS FILTERED CLASS IF PRESENT
                if ( gridItem.classList.contains('is-filtered') ) {
                    gridItem.classList.remove('is-filtered');
                }
                // SHOW CATEGORY ITEM SELECTED
                if (gridItem.classList.contains('bureaux')) {
                    gridItem.classList.add('grid-item-selected');
                }
                // HIDE OTHER CATEGORY ITEM
                if (gridItem.classList.contains('hospitalite') || gridItem.classList.contains('residentiel') || gridItem.classList.contains('commercial') ) {
                    gridItem.classList.add('is-filtered');
                }
            });

            // Mobile - Close the header menu when we clicked on a category element
            if ( item.closest('.navigation--projects') ) {

                // Hamburger Menu Remove all styles if present
                const officeContainer = document.querySelector('.header-navigation--office');
                const navProjects = document.querySelector('.navigation--projects');
                const navOffice = document.querySelector('.navigation--office ');
                const hamburgerButton = document.querySelector('button.hamburger');

                if ( navProjects.classList.contains('active') && navOffice.classList.contains('active') && hamburgerButton.classList.contains('active') ) {
                    navProjects.classList.remove('active');
                    navOffice.classList.remove('active');
                    hamburgerButton.classList.remove('active');
                }
            }


            // COMMERCIAL
        } else if ( item.classList.contains('category-commercial') ) {
            console.log( 'categorie commercial' );

            projectsItem.forEach( gridItem => {
                if ( gridItem.classList.contains('is-filtered') ) {
                    gridItem.classList.remove('is-filtered');
                }
                // SHOW CATEGORY ITEM SELECTED
                if (gridItem.classList.contains('commercial')) {
                    gridItem.classList.add('grid-item-selected');
                }
                // HIDE OTHER CATEGORY ITEM
                if (gridItem.classList.contains('hospitalite') || gridItem.classList.contains('residentiel') || gridItem.classList.contains('bureaux') ) {
                    gridItem.classList.add('is-filtered');
                }
            });

            // Mobile - Close the header menu when we clicked on a category element
            if ( item.closest('.navigation--projects') ) {

                // Hamburger Menu Remove all styles if present
                const officeContainer = document.querySelector('.header-navigation--office');
                const navProjects = document.querySelector('.navigation--projects');
                const navOffice = document.querySelector('.navigation--office ');
                const hamburgerButton = document.querySelector('button.hamburger');

                if ( navProjects.classList.contains('active') && navOffice.classList.contains('active') && hamburgerButton.classList.contains('active') ) {
                    navProjects.classList.remove('active');
                    navOffice.classList.remove('active');
                    hamburgerButton.classList.remove('active');
                }
            }

        } else if ( item.classList.contains('category-hospitalite') ) {
            console.log( 'categorie hospitalite' );

            projectsItem.forEach( gridItem => {
                if ( gridItem.classList.contains('is-filtered') ) {
                    gridItem.classList.remove('is-filtered');
                }
                // SHOW CATEGORY ITEM SELECTED
                if (gridItem.classList.contains('hospitalite')) {
                    gridItem.classList.add('grid-item-selected');
                }
                // HIDE OTHER CATEGORY ITEM
                if (gridItem.classList.contains('commercial') || gridItem.classList.contains('residentiel') || gridItem.classList.contains('bureaux') ) {
                    gridItem.classList.add('is-filtered');
                }
            });

            // Mobile - Close the header menu when we clicked on a category element
            if ( item.closest('.navigation--projects') ) {

                // Hamburger Menu Remove all styles if present
                const officeContainer = document.querySelector('.header-navigation--office');
                const navProjects = document.querySelector('.navigation--projects');
                const navOffice = document.querySelector('.navigation--office ');
                const hamburgerButton = document.querySelector('button.hamburger');

                if ( navProjects.classList.contains('active') && navOffice.classList.contains('active') && hamburgerButton.classList.contains('active') ) {
                    navProjects.classList.remove('active');
                    navOffice.classList.remove('active');
                    hamburgerButton.classList.remove('active');
                }
            }

        }
        else if ( item.classList.contains('category-residentiel') ) {
            projectsItem.forEach( gridItem => {
                if ( gridItem.classList.contains('is-filtered') ) {
                    gridItem.classList.remove('is-filtered');
                }
                // SHOW CATEGORY ITEM SELECTED
                if (gridItem.classList.contains('residentiel')) {
                    gridItem.classList.add('grid-item-selected');
                }
                // HIDE OTHER CATEGORY ITEM
                if (gridItem.classList.contains('commercial') || gridItem.classList.contains('hospitalite') || gridItem.classList.contains('bureaux') ) {
                    gridItem.classList.add('is-filtered');
                }
            });

            // Mobile - Close the header menu when we clicked on a category element
            if ( item.closest('.navigation--projects') ) {

                // Hamburger Menu Remove all styles if present
                const officeContainer = document.querySelector('.header-navigation--office');
                const navProjects = document.querySelector('.navigation--projects');
                const navOffice = document.querySelector('.navigation--office ');
                const hamburgerButton = document.querySelector('button.hamburger');

                if ( navProjects.classList.contains('active') && navOffice.classList.contains('active') && hamburgerButton.classList.contains('active') ) {
                    navProjects.classList.remove('active');
                    navOffice.classList.remove('active');
                    hamburgerButton.classList.remove('active');
                }
            }
        }
    });
});

// TOUT VOIR
if ( home || archive ){
    toutVoirDesktop.addEventListener( 'click', () => {
        // remove is-filtered class from grid-item
        projectsItem.forEach( project => {
            if ( project.classList.contains('is-filtered') || project.classList.contains('grid-item-selected') ) {
                project.classList.remove('is-filtered');
                project.classList.remove('grid-item-selected');
            }
        });
    });
    toutVoirMobile.addEventListener( 'click', () => {
        // remove is-filtered class from grid-item
        projectsItem.forEach( project => {
            if ( project.classList.contains('is-filtered') || project.classList.contains('grid-item-selected') ) {
                project.classList.remove('is-filtered');
                project.classList.remove('grid-item-selected');
            }
        });

        // Hamburger Menu Remove all styles if present
        const officeContainer = document.querySelector('.header-navigation--office');
        const navProjects = document.querySelector('.navigation--projects');
        const navOffice = document.querySelector('.navigation--office ');
        const hamburgerButton = document.querySelector('button.hamburger');

        if ( navProjects.classList.contains('active') && navOffice.classList.contains('active') && hamburgerButton.classList.contains('active') ) {
            navProjects.classList.remove('active');
            navOffice.classList.remove('active');
            hamburgerButton.classList.remove('active');
        }
    });
}
