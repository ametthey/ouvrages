// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

const swiperContainerLeft = document.querySelector('.swiper-container-left');
const swiperContainerRight = document.querySelector('.swiper-container-right');
if ( swiperContainerLeft && swiperContainerRight ) {
    let swiperSettings = {
        // autoplay: true,
        directon: 'vertical',
        speed: 900,
        on: {
            click: () => {
                MySwiperLeft.slideNext(900, true);
            }
        }
     };
    let MySwiperLeft = new Swiper( swiperContainerLeft, swiperSettings  );
    let MySwiperRight = new Swiper( swiperContainerRight, swiperSettings  );
    MySwiperLeft.controller.control = MySwiperRight;
    MySwiperRight.controller.control = MySwiperLeft;
}

