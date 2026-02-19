import '@components/hero/hero';
import '../scss/page-history.scss';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const historySection = gsap.utils.toArray(".js-history-item"),
    readMore = document.querySelectorAll('.js-history-item-expand');

historySection.forEach(section => {
    gsap.to(section, {
        scrollTrigger: {
            trigger: section,
            start: 'top center',
            onEnter: () => section.classList.add('animate'),
        },
    });
});

if (readMore) {
    readMore.forEach(rm => {
        let closestContent = rm.closest('.js-history-item'),
            innerHidden = closestContent.querySelector('.history__item-paragraphs-hidden');

        if (innerHidden) {
            let innerContentHeight = innerHidden.firstElementChild.offsetHeight;
            console.log(innerContentHeight)
            if (innerContentHeight) {
                rm.addEventListener('click', () => {
                    rm.classList.toggle('active')
                    if (innerHidden.style.maxHeight) {
                        innerHidden.style.maxHeight = null;
                        innerHidden.classList.remove('visible');
                    } else {
                        innerHidden.style.maxHeight = innerContentHeight + 'px';
                        innerHidden.classList.add('visible');
                    }
                })
            }

        }
    })
}
