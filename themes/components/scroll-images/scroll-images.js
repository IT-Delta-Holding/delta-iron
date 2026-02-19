import './scroll-images.scss';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";
import Swiper from "swiper";
import {Navigation, Manipulation, Pagination} from "swiper/modules";

    const image = document.querySelector('.scroll-images__images');
    if(image) {
        let scrollPart = image.scrollWidth - image.clientWidth;
        let scrollPartTotal = scrollPart + 100;


    if (window.innerWidth > 1023) {

        gsap.registerPlugin(ScrollTrigger);


        if (window.innerWidth > 1640) {
            gsap.to(".scroll-images__images", {
                // x: `-${scrollPartTotal}`,
                x: `-2500px`,
                ease: "none",
                scrollTrigger: {
                    trigger: ".scroll-images__gallery",
                    start: "top 10%",
                    // end: `+=${scrollPart / 1.5}`,
                    end: `+=1600`,
                    scrub: 2,
                    pin: true,
                }
            });
        // } else if (window.innerWidth > 1023 && window.innerWidth < 1640) {
        } else {
            gsap.to(".scroll-images__images", {
                // x: `-${scrollPart}px`,
                x: `-3000px`,
                ease: "none",
                scrollTrigger: {
                    trigger: ".scroll-images__gallery",
                    start: "top top",
                    // end: `+=${scrollPart * 1.2}`,
                    // end: `+=${scrollPart / 1.5}`,
                    end: `+=1800`,
                    scrub: 2,
                    pin: true,
                }
            });
        }
    }else{

        const SliderGallery = new Swiper('.js-slider-gallery', {
            slidesPerView: 1,
            spaceBetween: 24,
            modules: [Navigation, Manipulation, Pagination],
            navigation: {
                prevEl: '.js-swiper-gallery-prev',
                nextEl: '.js-swiper-gallery-next',
            },
            // pagination: {
            //     el: '.swiper-pagination-gallery',
            //     type: 'custom',
            //     renderCustom: function (swiper, current, total) {
            //         return formatPagination(current, total);
            //     },
            // },
        });

        // function formatPagination(current, total) {
        //     return '<div class="pagination-custom">' +
        //         '<div class="pagination-number">' + ('0' + current).slice(-2) + '</div>' + '/' + '<div class="pagination-number">' + ('0' + total).slice(-2) + '</div>' +
        //         '</div>';
        // }
    }
}