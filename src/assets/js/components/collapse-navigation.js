// COLLAPSE NAVIGATION OFFICE
const officeCollapse = document.querySelector('.navigation--office');
const officeContainer = document.querySelector('.header-navigation--office');

// OPEN AND CLOSE COLLAPSE NAVIGATION OFFICE
officeCollapse.addEventListener( 'click', () => {
    officeContainer.classList.toggle('active');
    if (officeContainer.style.maxHeight){
        officeContainer.style.maxHeight = null;
    } else {
        officeContainer.style.maxHeight = officeContainer.scrollHeight + "px";
    }
});

// CLOSE COLLAPSE NAVIGATION OFFICE WHEN WE SCROLL DOWN
window.addEventListener('scroll', () => {
    if ( officeContainer.classList.contains('active') ) {
        officeContainer.classList.remove('active');
        if (officeContainer.style.maxHeight){
            officeContainer.style.maxHeight = null;
        } else {
            officeContainer.style.maxHeight = officeContainer.scrollHeight + "px";
        }
    }
})
