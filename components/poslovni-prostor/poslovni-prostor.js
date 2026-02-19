import './poslovni-prostor.scss';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

const images = document.querySelector('.poslovni_prostor__images');

if(images) {

    gsap.registerPlugin(ScrollTrigger);


    if (window.innerWidth > 1680) {


        let textAnim = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top 80%",
                end: "top 10%",
                scrub: 2,
                // markers: true,
                // pin: true,
            }
        });

        textAnim.to(".poslovni_prostor__images-content-1--text-2", { left: '135px', duration: 3 })
                .to(".poslovni_prostor__images-content-1--text", { top: '175px', duration: 3 });



        let imgAnim = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top+=200 top",
                end: "+=800px",
                scrub: true,
            }
        });

        imgAnim.to(".poslovni_prostor__images-content-2", { width: '100%', marginRight: 0, duration: 2 })
            .to(".poslovni_prostor__images-content-1", { width: '74%', duration: 2 });



        let textAnim2 = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top+=300 top",
                end: "+=500px",
                scrub: 2,
                // markers: true,
            }
        });

        textAnim2.to(".poslovni_prostor__images-content-2--text", { bottom: '100px', duration: 3 })
            .to(".poslovni_prostor__images-content-2--text-2", { left: '135px', duration: 3 });


    } else if (window.innerWidth > 1023 && window.innerWidth < 1680) {

        let textAnim = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top 60%",
                end: "top 40%",
                scrub: 2,
                // pin: true,
            }
        });

        textAnim.to(".poslovni_prostor__images-content-1--text-2", { left: '135px', duration: 3 })
            .to(".poslovni_prostor__images-content-1--text", { top: '50px', duration: 3 });



        let imgAnim = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top 10%",
                end: "+=800px",
                scrub: true,
                // markers: true,
            }
        });

        imgAnim.to(".poslovni_prostor__images-content-2", { width: '100%', marginRight: 0, duration: 2 })
            .to(".poslovni_prostor__images-content-1", { width: '74%', duration: 2 });



        let textAnim2 = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top+=200 top",
                end: "+=300px",
                scrub: 2,
                // markers: true,
            }
        });

        textAnim2.to(".poslovni_prostor__images-content-2--text", { bottom: '165px', duration: 3 })
            .to(".poslovni_prostor__images-content-2--text-2", { left: '135px', duration: 3 });


    } else if (window.innerWidth > 767 && window.innerWidth < 1024) {

        let textAnim = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top 60%",
                end: "top 40%",
                scrub: 2,
                // pin: true,
            }
        });

        textAnim.to(".poslovni_prostor__images-content-1--text-2", { left: '135px', duration: 2 })
            .to(".poslovni_prostor__images-content-1--text", { top: '50px', duration: 2 });



        let imgAnim = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top 10%",
                end: "+=800px",
                scrub: true,
                // markers: true,
            }
        });

        imgAnim.to(".poslovni_prostor__images-content-2", { width: '100%', marginRight: 0, duration: 2 })
            .to(".poslovni_prostor__images-content-1", { width: '74%', duration: 2 });



        let textAnim2 = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top+=200 top",
                end: "+=300px",
                scrub: 2,
                // markers: true,
            }
        });

        textAnim2.to(".poslovni_prostor__images-content-2--text", { bottom: '165px', duration: 2 })
            .to(".poslovni_prostor__images-content-2--text-2", { left: '135px', duration: 2 });
    } else {

        // let textAnim = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".poslovni_prostor__images",
        //         start: "top 60%",
        //         end: "top 40%",
        //         scrub: true,
        //         // pin: true,
        //     }
        // });
        //
        // textAnim.to(".poslovni_prostor__images-content-1--text-2", { left: '20px', duration: 2 })
        //     .to(".poslovni_prostor__images-content-1--text", { top: '50px', duration: 2 });



        let imgAnim = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top 20%",
                end: "+=300px",
                scrub: true,
                // markers: true,
            }
        });

        imgAnim.to(".poslovni_prostor__images-content-2", { width: '100%', marginRight: 0, duration: 2 })
            .to(".poslovni_prostor__images-content-1", { width: '90%', duration: 2 })
            .to(".poslovni_prostor__images-content-1--text", { opacity: 0, duration: 2 })
            .to(".poslovni_prostor__images-content-1--text-2", { opacity: 0, duration: 2 });



        let textAnim2 = gsap.timeline({
            scrollTrigger: {
                trigger: ".poslovni_prostor__images",
                start: "top 40%",
                end: "+=200px",
                scrub: true,
                // markers: true,
            }
        });

        textAnim2.to(".poslovni_prostor__images-content-2--text", { bottom: '165px', duration: 2 })
            .to(".poslovni_prostor__images-content-2--text-2", { left: '20px', duration: 2 });
    }
}











