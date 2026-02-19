import './zakupci.scss';
import Splide from '@splidejs/splide';

const slider =  document.querySelector(".zakupci");

if(slider) {

    new Splide('.splide', {
        type: 'loop',
        perPage: 5,
        focus: 'center',
        navigation: {
            nextEl: '.splide__arrow--next',
            prevEl: '.splide__arrow--prev',
        },
        pagination: false,
        padding: 0,
        breakpoints: {
            768: {perPage: 1, padding: '25%',},
            1024: {perPage: 3,},
            1400: {perPage: 5,},
        }
    }).mount();

}