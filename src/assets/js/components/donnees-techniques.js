// DONNEES TECHNIQUES
const donnes = document.querySelector('.single-grid--footer-container-left');
const donnesButtons = document.querySelectorAll('.donnees-techniques-button');
const donnesClose = document.querySelector('.single-grid--footer-container-left img');
const donnesFooter = document.querySelector('.single-grid--footer-fake');
const swiperLeftButton = document.querySelector('.swiper-button-prev');

// On clique sur données techniques et on ouvre le bandeau pour voir les données
donnesButtons.forEach( donnesButton => {
    if ( donnesButton ) {
        donnesButton.addEventListener( 'click', (e) => {
            e.preventDefault();
            donnes.classList.toggle('active');
            donnesFooter.classList.toggle('active');
            swiperLeftButton.classList.add('-is-covered');

        });
    }
})

// On clique sur la croix dans le bandeau données techniques pour fermer le bandeau
if ( donnesClose ) {
    donnesClose.addEventListener( 'click', (e) => {
        e.preventDefault();
        donnes.classList.remove('active');
        donnesFooter.classList.remove('active');
        swiperLeftButton.classList.remove('-is-covered');
    });
}
