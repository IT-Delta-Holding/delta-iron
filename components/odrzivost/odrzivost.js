import './odrzivost.scss';
import '@components/button_iron/button_iron';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const odrzivost = document.querySelector('.odrzivost');

if(odrzivost) {

    gsap.from(".card-1", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: ".card-1",
            start: "top 400px",
            end: "top 50%",
            scrub: 1.5,
            toggleActions: "play none none none",
            // once: true,
        }
    });

    gsap.from(".card-2", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: ".card-2",
            start: "top 400px",
            end: "top 50%",
            scrub: 1.5,
            toggleActions: "play none none none",
        }
    });

    gsap.from(".card-3", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: ".card-3",
            start: "top 400px",
            end: "top 50%",
            scrub: 1.5,
            toggleActions: "play none none none",
        }
    });

    gsap.from(".card-4", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: ".card-4",
            // start: "top 200px",
            start: "top 400px",
            end: "top 50%",
            scrub: 1.5,
            toggleActions: "play none none none",
        }
    });
}