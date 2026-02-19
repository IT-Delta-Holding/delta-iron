import '../scss/single.scss';
import PhotoSwipeLightbox from "photoswipe/lightbox";
import Swiper from "swiper";
import {Navigation, Manipulation, Pagination} from "swiper/modules";

const rightArrowSVGString = '<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 53 53"><path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="m30.8 22.9 5.1 3.7-5.1 3.7M18.4 26.6h16.9"/><path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M52.5 26.5c0 14.4-11.6 26-26 26s-26-11.6-26-26 11.6-26 26-26 26 11.6 26 26z"/></svg>';
const leftArrowSVGString = '<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 53 53"><path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="m22.2 30.1-5.1-3.7 5.1-3.7M34.6 26.4H17.7"/><path fill="none" stroke="#ffffff" stroke-miterlimit="10" d="M.5 26.5c0-14.4 11.6-26 26-26s26 11.6 26 26-11.6 26-26 26-26-11.6-26-26z"/></svg>';




const SliderPostsCards = new Swiper('.js-related-posts-cards', {
    slidesPerView: "auto",
    spaceBetween: 24,
    modules: [Navigation, Manipulation, Pagination],
    navigation: {
        prevEl: '.js-related-posts-prev',
        nextEl: '.js-related-posts-next'
    },
    pagination: {
        el: '.swiper-pagination-related-posts-mobile',
        type: 'custom',
        renderCustom: function (swiper, current, total) {
            var formattedCurrent = current.toString().padStart(2, '0');
            var formattedTotal = total.toString().padStart(2, '0');

            var formattedCurrentWithhColor = '<span style="color: #003A64;">' + formattedCurrent + '</span>';
            var formattedTotalWithColor = '<span style="color: #B8BDD9;">' + formattedTotal + '</span>';
            return formattedCurrentWithhColor + ' <span style="color: #B8BDD9;">/</span> ' + formattedTotalWithColor;
        },
    },
    // breakpoints: {
    //     1024: {
    //         spaceBetween: 12,
    //         navigation: {
    //             prevEl: '.js-swiper-posts-prev-desk',
    //             nextEl: '.js-swiper-posts-next-desk'
    //         },
    //         pagination: {
    //             el: '.swiper-pagination',
    //             type: 'custom',
    //             renderCustom: function (swiper, current, total) {
    //                 var formattedCurrent = current.toString().padStart(2, '0');
    //                 var formattedTotal = total.toString().padStart(2, '0');
    //
    //                 var formattedCurrentWithhColor = '<span style="color: #003A64;">' + formattedCurrent + '</span>';
    //                 var formattedTotalWithColor = '<span style="color: #B8BDD9;">' + formattedTotal + '</span>';
    //                 return formattedCurrentWithhColor + ' <span style="color: #B8BDD9;">/</span> ' + formattedTotalWithColor;
    //             },
    //         },
    //     }
    // }
});













const lightbox = new PhotoSwipeLightbox({
    // may select multiple "galleries"
    gallery: '.js-post-gallery',
    arrowPrevSVG: leftArrowSVGString,
    arrowNextSVG: rightArrowSVGString,

    tapAction: 'close',
    // Elements within gallery (slides)
    children: 'a',
    pswpModule: () => import('photoswipe')
});
lightbox.init();

