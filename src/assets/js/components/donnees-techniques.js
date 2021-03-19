// DONNEES TECHNIQUES
const donnes = document.querySelector('.single-grid--footer-container-left');
const donnesButton = document.querySelector('.donnees-techniques-button');
const donnesClose = document.querySelector('.single-grid--footer-container-left img');
const donnesFooter = document.querySelector('.single-grid--footer-fake');


// DONNEES TECHNIQUES BUTTON
if ( donnesButton ) {
    donnesButton.addEventListener( 'click', (e) => {
        e.preventDefault();
        donnes.classList.toggle('active');
        donnesFooter.classList.toggle('active');
    });
}

// DONNEES TECHNIQUES CLOSE BUTTON
if ( donnesClose ) {
    donnesClose.addEventListener( 'click', (e) => {
        e.preventDefault();
        donnes.classList.remove('active');
        donnesFooter.classList.remove('active');
    });
}
