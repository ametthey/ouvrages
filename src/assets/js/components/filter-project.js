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
    item.addEventListener('click', () => {

        // BUREAUX
        if ( item.classList.contains('category-bureaux') ) {
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

        // COMMERCIAL
        } else if ( item.classList.contains('category-commercial') ) {
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

        } else if ( item.classList.contains('category-hospitalite') ) {
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
    });
}
