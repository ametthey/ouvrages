// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

const swiperContainerLeft = document.querySelector('.swiper-container');
let swiperSettings = {
    // working when settings swiper-container height to auto
    autoHeight: true,
    directon: 'vertical',
    loop: true,
    speed: 900,


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
};
let MySwiperLeft = new Swiper( swiperContainerLeft, swiperSettings  );
