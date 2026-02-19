import './contact-form-footer.scss';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);
const form = document.querySelector('.contact-form-footer');
const footer = document.querySelector('.footer');

if(form && footer) {
    if (window.innerWidth > 1023) {
        gsap.to(".contact-form-footer", {
            scrollTrigger: {
                trigger: ".contact-form-footer",
                start: "top 90%",
                end: "top 50%",
                scrub: 1.5,
                toggleActions: "play none none none",
                onLeave: () => {
                    if (window.innerWidth < 1720) {
                        document.querySelector(".contact-form-footer").style.maxWidth = "calc(100% - 40px)";
                    } else {
                        document.querySelector(".contact-form-footer").style.maxWidth = "1680px";
                    }
                    document.querySelector(".contact-form-footer").style.marginLeft = "auto";
                    document.querySelector(".contact-form-footer").style.marginRight = "auto";
                    document.querySelector(".contact-form-footer").style.borderRadius = "28px";
                    document.querySelector(".contact-form-footer__img").style.borderRadius = "28px";
                    document.querySelector(".footer").style.opacity = "1";
                },
                onEnterBack: () => {
                    document.querySelector(".contact-form-footer").style.maxWidth = "100%";
                    // document.querySelector(".contact-form-footer").style.margin = "auto";
                    document.querySelector(".contact-form-footer").style.marginLeft = "auto";
                    document.querySelector(".contact-form-footer").style.marginRight = "auto";
                    document.querySelector(".contact-form-footer").style.borderRadius = "0";
                    document.querySelector(".contact-form-footer__img").style.borderRadius = "0";
                    document.querySelector(".footer").style.opacity = "0";
                },
            }
        });
    } else {
        gsap.to(".contact-form-footer", {
            scrollTrigger: {
                trigger: ".contact-form-footer",
                start: "top 90%",
                end: "top 50%",
                scrub: 1.5,
                toggleActions: "play none none none",
                onLeave: () => {
                    if (window.innerWidth < 1024 && window.innerWidth > 767) {
                        document.querySelector(".contact-form-footer").style.maxWidth = "680px";
                    } else {
                        document.querySelector(".contact-form-footer").style.maxWidth = "calc(100% - 40px)";
                    }
                    document.querySelector(".contact-form-footer").style.marginLeft = "auto";
                    document.querySelector(".contact-form-footer").style.marginRight = "auto";
                    document.querySelector(".contact-form-footer").style.borderRadius = "28px";
                    document.querySelector(".contact-form-footer__img").style.borderRadius = "28px";
                    document.querySelector(".footer").style.opacity = "1";
                },
                onEnterBack: () => {
                    document.querySelector(".contact-form-footer").style.maxWidth = "100%";
                    // document.querySelector(".contact-form-footer").style.margin = "auto";
                    document.querySelector(".contact-form-footer").style.marginLeft = "auto";
                    document.querySelector(".contact-form-footer").style.marginRight = "auto";
                    document.querySelector(".contact-form-footer").style.borderRadius = "0";
                    document.querySelector(".contact-form-footer__img").style.borderRadius = "0";
                    document.querySelector(".footer").style.opacity = "0";
                },
            }
        });
    }


    document.addEventListener("DOMContentLoaded", function () {
        const textarea = document.querySelector(".wpcf7-textarea");
        const counter = document.getElementById("char-counter");

        if (textarea) {
            textarea.addEventListener("input", function () {
                let count = textarea.value.length;
                counter.textContent = count + " / 1000";
            });
        }
    });
}

