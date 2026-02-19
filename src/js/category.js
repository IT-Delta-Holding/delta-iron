import '@components/hero/hero';
import '../scss/category.scss';

const sliderFilter = document.querySelectorAll('.js-brands-filter'),
    sliderSlides = document.querySelectorAll('.js-brands-card');

if (sliderFilter) {
    sliderFilter.forEach(sf => {
        sf.addEventListener('click', () => {
            if (!sf.classList.contains('active')) {
                sliderFilter.forEach(sff => {
                    sff.classList.remove('active')
                })
                sf.classList.add('active')
                sliderSlides.forEach(ss => {
                    if (ss.getAttribute('data-category') === sf.getAttribute('data-category')) {
                        ss.classList.add('active')
                    } else {
                        ss.classList.remove('active')
                    }

                })
            }
        })
    })
}

