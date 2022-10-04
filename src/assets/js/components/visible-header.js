const el = document.querySelector(".header-navigation")
const mastHead = document.querySelector('#masthead');
const headerCategory = document.querySelector('.header-category');
const observer = new IntersectionObserver(

    ([e]) => {
        e.target.classList.toggle("is-pinned", e.intersectionRatio < 1);

        if ( e.target.classList.contains('is-pinned') ) {
            mastHead.classList.add('is-pinned');
            headerCategory.classList.add('is-pinned');
        } else {
            mastHead.classList.remove('is-pinned');
            headerCategory.classList.remove('is-pinned');
        }
    },
    { threshold: [1] }
);

observer.observe(el);
