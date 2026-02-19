import '../scss/acf-blocks.scss';
import '@components/coming-soon/coming-soon'
import '../scss/page-about-us.scss';


document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.querySelector(".wpcf7-textarea");
    const counter = document.getElementById("char-counter");

    if(textarea) {
        textarea.addEventListener("input", function () {
            let count = textarea.value.length;
            counter.textContent = count + " / 1000";
        });
    }
});

const header = document.querySelector('.js-header-coming-soon');
let headerPosition = 0;
document.addEventListener('scroll', () => {
    if (scrollY <= 20) {
        console.log(scrollY);
        header.classList.remove('sticky')
    } else {
        header.classList.add('sticky');
    }
    headerPosition = scrollY;
})