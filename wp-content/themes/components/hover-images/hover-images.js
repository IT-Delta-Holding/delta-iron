import './hover-images.scss';
import '@components/button_iron/button_iron';

const image_1 = document.querySelector('.hover-images__content--image-1');
const image_2 = document.querySelector('.hover-images__content--image-2');

if (window.innerWidth > 1023) {
    if (image_1 && image_2) {
        image_2.addEventListener("mouseover", function () {
            image_1.style.width = "30%";
            image_2.style.width = "70%";
        });

        image_2.addEventListener("mouseleave", function () {
            image_1.style.width = "70%";
            image_2.style.width = "30%";
        });
    }
}