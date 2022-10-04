// COLLAPSE NAVIGATION OFFICE
const officeCollapse = document.querySelector('.navigation--office');
const officeContainer = document.querySelector('.header-navigation--office');

// OPEN AND CLOSE COLLAPSE NAVIGATION OFFICE
officeCollapse.addEventListener( 'click', () => {
    officeContainer.classList.toggle('active');
});

// CLOSE COLLAPSE NAVIGATION OFFICE WHEN WE SCROLL DOWN
window.addEventListener('scroll', () => {
    if ( officeContainer.classList.contains('active') ) {
        setTimeout( () => officeContainer.classList.remove('active'), 200 )
    }
})
