import './atrijum-animation.scss';
import '@components/button_iron/button_iron';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

const atrijum = document.querySelector(".atrijum-animation");

if(atrijum) {
    if (window.innerWidth > 1023) {
        gsap.registerPlugin(ScrollTrigger);

        ScrollTrigger.create({
            trigger: ".atrijum-animation",
            start: "top top",
            // end: "+=4000px",
            end: "+=2000px",
            pin: true,
            scrub: true,
        });

        gsap.to(".atrijum-animation__red-circle", {
            scrollTrigger: {
                trigger: ".atrijum-animation__content",
                // start: "top+=500 top",
                // end: "+=2000px",
                start: "top top",
                end: "+=500px",
                scrub: true,
                onLeave: () => {
                    if (window.innerWidth < 1701 && window.innerWidth > 1439) {
                        document.querySelector(".atrijum-animation__red-circle").style.transform = "scale(97)";
                    } else if (window.innerWidth < 1440) {
                        document.querySelector(".atrijum-animation__red-circle").style.transform = "scale(71)";
                    } else {
                        document.querySelector(".atrijum-animation__red-circle").style.transform = "scale(125)";
                    }
                    document.querySelector(".atrijum-animation__red-circle").style.opacity = "1";
                    document.querySelector(".atrijum-animation__info-1").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".atrijum-animation__info-1").style.animation = " revealBack 1s linear forwards";
                    document.querySelector(".atrijum-animation__red-circle").style.transform = "scale(0)";
                    document.querySelector(".atrijum-animation__red-circle").style.opacity = "0";
                },
            }
        });

        gsap.to(".atrijum-animation__yellow-circle", {
            scrollTrigger: {
                trigger: ".atrijum-animation__content",
                // start: "top+=1000 top",
                // end: "+=1000px",
                start: "top+=500 top",
                end: "+=500px",
                scrub: true,
                onLeave: () => {
                    if (window.innerWidth < 1701 && window.innerWidth > 1439) {
                        document.querySelector(".atrijum-animation__yellow-circle").style.transform = "scale(75)";
                    } else if (window.innerWidth < 1440) {
                        document.querySelector(".atrijum-animation__yellow-circle").style.transform = "scale(57)";
                    } else {
                        document.querySelector(".atrijum-animation__yellow-circle").style.transform = "scale(97)";
                    }
                    document.querySelector(".atrijum-animation__yellow-circle").style.opacity = "1";
                    document.querySelector(".atrijum-animation__info-2").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".atrijum-animation__info-2").style.animation = " revealBack 1s linear forwards";
                    document.querySelector(".atrijum-animation__yellow-circle").style.transform = "scale(0)";
                    document.querySelector(".atrijum-animation__yellow-circle").style.opacity = "0";
                },
            }
        });


        gsap.to(".atrijum-animation__blue-circle", {
            scrollTrigger: {
                trigger: ".atrijum-animation__content",
                // start: "top+=4500 top",
                // end: "+=2000px",
                // start: "top+=2000 top",
                // end: "+=1000px",
                start: "top+=1000 top",
                end: "+=500px",
                scrub: true,
                onLeave: () => {
                    if (window.innerWidth < 1701 && window.innerWidth > 1439) {
                        document.querySelector(".atrijum-animation__blue-circle").style.transform = "scale(137)";
                    } else if (window.innerWidth < 1440) {
                        document.querySelector(".atrijum-animation__blue-circle").style.transform = "scale(99)";
                    } else {
                        document.querySelector(".atrijum-animation__blue-circle").style.transform = "scale(176)";
                    }
                    document.querySelector(".atrijum-animation__blue-circle").style.opacity = "1";
                    document.querySelector(".atrijum-animation__info-3").style.animation = " reveal 1s linear forwards";
                },
                onEnterBack: () => {
                    document.querySelector(".atrijum-animation__info-3").style.animation = " revealBack 1s linear forwards";
                    document.querySelector(".atrijum-animation__blue-circle").style.transform = "scale(0)";
                    document.querySelector(".atrijum-animation__blue-circle").style.opacity = "0";
                },
            }
        });


    } else {
        gsap.registerPlugin(ScrollTrigger);


        gsap.to(".atrijum-animation__red-circle", {
            scrollTrigger: {
                trigger: ".atrijum-animation__content",
                // start: "top+=500 top",
                // end: "+=1000px",
                start: "top 80%",
                end: "top 50%",
                scrub: true,
                onLeave: () => {
                    if (window.innerWidth < 769) {
                        document.querySelector(".atrijum-animation__red-circle").style.transform = "scale(52)";
                        document.querySelector(".atrijum-animation__yellow-circle").style.transform = "scale(40)";
                        document.querySelector(".atrijum-animation__blue-circle").style.transform = "scale(74)";
                        document.querySelector(".atrijum-animation__info-1").style.opacity = "1";
                    } else {
                        document.querySelector(".atrijum-animation__red-circle").style.transform = "scale(90)";
                        document.querySelector(".atrijum-animation__yellow-circle").style.transform = "scale(70)";
                        document.querySelector(".atrijum-animation__blue-circle").style.transform = "scale(126)";
                        document.querySelector(".atrijum-animation__info-1").style.opacity = "1";
                    }
                    document.querySelector(".atrijum-animation__red-circle").style.opacity = "1";
                    document.querySelector(".atrijum-animation__yellow-circle").style.opacity = "1";
                    document.querySelector(".atrijum-animation__blue-circle").style.opacity = "1";
                },
                onEnterBack: () => {
                    document.querySelector(".atrijum-animation__red-circle").style.transform = "scale(0)";
                    document.querySelector(".atrijum-animation__yellow-circle").style.transform = "scale(0)";
                    document.querySelector(".atrijum-animation__blue-circle").style.transform = "scale(0)";
                    document.querySelector(".atrijum-animation__red-circle").style.opacity = "0";
                    document.querySelector(".atrijum-animation__yellow-circle").style.opacity = "0";
                    document.querySelector(".atrijum-animation__blue-circle").style.opacity = "0";
                    document.querySelector(".atrijum-animation__info-1").style.opacity = "0";
                },
            }
        });

        ScrollTrigger.create({
            trigger: ".atrijum-animation",
            start: "top top",
            // end: "+=4000px",
            end: "+=2000px",
            pin: true,
            scrub: true,
        });





        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".atrijum-animation__content",
                start: "top+=200 top",
                // end: "+=3000",
                end: "+=1500",
                scrub: true,
            }
        });



        // let tl = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".atrijum-animation__content",
        //         start: "top+=200 top",
        //         // end: "+=3000",
        //         end: "+=1500",
        //         scrub: true,
        //     }
        // });

        tl.fromTo(".atrijum-animation__info-1",
            { x: "150%", opacity: 0 },
            { x: "0%", opacity: 1, duration: 2, ease: "power2.out" }
        );

        tl.to(".atrijum-animation__info-1", {
            x: "-150%",
            duration: 2,
            ease: "power2.inOut"
        });


        tl.fromTo(".atrijum-animation__info-2",
            { x: "150%", opacity: 0 },
            { x: "0%", opacity: 1, duration: 2, ease: "power2.out" }
        );

        tl.to(".atrijum-animation__info-2", {
            x: "-150%",
            duration: 2,
            ease: "power2.inOut"
        });


        tl.fromTo(".atrijum-animation__info-3",
            { x: "150%", opacity: 0 },
            { x: "0%", opacity: 1, duration: 2, ease: "power2.out" }
        );

        // tl.to(".atrijum-animation__info-3", {
        //     x: "-150%",
        //     duration: 2,
        //     ease: "power2.inOut"
        // });



    }
}