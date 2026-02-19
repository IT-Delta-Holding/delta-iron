import './odrzivost-animation.scss';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);


const odrzivostAnimation = document.querySelector('.odrzivost_animation');

if(odrzivostAnimation) {

    if(window.innerWidth > 1023) {
        gsap.to(".odrzivost_animation__content--solarni-omotac-content", {
            scrollTrigger: {
                trigger: ".odrzivost_animation__content--solarni-omotac-content",
                start: "top 70%",
                end: "top 80%",
                scrub: 1.5,
                toggleActions: "play none none none",
                onLeave: () => {
                    document.querySelector(".odrzivost_animation__content--solarni-omotac-content").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".odrzivost_animation__content--solarni-omotac-content").style.animation = " revealBack 1s linear forwards";
                },
            }
        });

        gsap.to(".odrzivost_animation__content--smart-sistemi-content", {
            scrollTrigger: {
                trigger: ".odrzivost_animation__content--smart-sistemi-content",
                start: "top 70%",
                end: "top 80%",
                scrub: 1.5,
                toggleActions: "play none none none",
                onLeave: () => {
                    document.querySelector(".odrzivost_animation__content--smart-sistemi-content").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".odrzivost_animation__content--smart-sistemi-content").style.animation = " revealBack 1s linear forwards";
                },
            }
        });


        // gsap.to(".box", {
        //     scrollTrigger: {
        //         trigger: ".box",
        //         start: "top 80%",
        //         end: "top 30%",
        //         scrub:true,
        //         onLeave: () => {
        //             document.querySelector(".odrzivost_animation__content--smart-sistemi-content").style.animation = " reveal 1s linear forwards";
        //         },
        //         onEnterBack: () => {
        //             document.querySelector(".odrzivost_animation__content--smart-sistemi-content").style.animation = " revealBack 1s linear forwards";
        //         },
        //     }
        // });

        gsap.to(".odrzivost_animation__content--zeleni-parking-content", {
            scrollTrigger: {
                trigger: ".odrzivost_animation__content--zeleni-parking-content",
                start: "top 70%",
                end: "top 80%",
                scrub: 1.5,
                toggleActions: "play none none none",
                onLeave: () => {
                    document.querySelector(".odrzivost_animation__content--zeleni-parking-content").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".odrzivost_animation__content--zeleni-parking-content").style.animation = " revealBack 1s linear forwards";
                },
            }
        });

        gsap.to(".odrzivost_animation__content--geotermalne-sonde-content", {
            scrollTrigger: {
                trigger: ".odrzivost_animation__content--geotermalne-sonde-content",
                start: "top 70%",
                end: "top 80%",
                scrub: 1.5,
                toggleActions: "play none none none",
                onLeave: () => {
                    document.querySelector(".odrzivost_animation__content--geotermalne-sonde-content").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".odrzivost_animation__content--geotermalne-sonde-content").style.animation = " revealBack 1s linear forwards";
                },
            }
        });

        gsap.to(".odrzivost_animation__content--reciklirani-materijali-content", {
            scrollTrigger: {
                trigger: ".odrzivost_animation__content--reciklirani-materijali-content",
                start: "top 70%",
                end: "top 80%",
                scrub: 1.5,
                toggleActions: "play none none none",
                onLeave: () => {
                    document.querySelector(".odrzivost_animation__content--reciklirani-materijali-content").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".odrzivost_animation__content--reciklirani-materijali-content").style.animation = " revealBack 1s linear forwards";
                },
            }
        });
    }
    else{

        // ScrollTrigger.create({
        //     trigger: ".odrzivost_animation",
        //     start: "top top",
        //     end: () => "+=" + document.querySelector(".odrzivost_animation__scroll").scrollHeight, // Završava se kada se unutrašnji sadržaj u potpunosti skroluje
        //     pin: true,
        //     anticipatePin: 1,
        //     scrub: false
        // });


        // let section = document.querySelector(".odrzivost_animation");

        ScrollTrigger.create({
            trigger: ".odrzivost_animation",
            start: "top top",
            pin: true,
            anticipatePin: 1
        });


    }
}