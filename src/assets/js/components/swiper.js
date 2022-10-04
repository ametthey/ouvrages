// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

const swiperContainerLeft = document.querySelector('.swiper-container-left');
const swiperContainerRight = document.querySelector('.swiper-container-right');
if ( swiperContainerLeft && swiperContainerRight ) {
    let swiperSettings = {
        // allowTouchMove: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        speed: 900,
    };
    let swiperRightSettings = {
        allowTouchMove: false,
        speed: 900,
    };
    let MySwiperLeft = new Swiper( swiperContainerLeft, swiperSettings  );
    let MySwiperRight = new Swiper( swiperContainerRight, swiperRightSettings );
    MySwiperLeft.controller.control = MySwiperRight;
    // MySwiperRight.controller.control = MySwiperLeft;
}

