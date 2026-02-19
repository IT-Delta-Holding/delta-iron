import './floors.scss';
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";

//LAMELA 1
const lamela_1 = document.querySelector(".floors__lamela--1-pin");
const path_1 = document.querySelector(".floors__front-part--path");
const info_1 = document.querySelector(".floors__lamela--1-info");

if(lamela_1 && path_1 && info_1) {
    lamela_1.addEventListener("mouseover", function () {
        path_1.style.opacity = "0.5";
        info_1.style.opacity = "1";
    });

    lamela_1.addEventListener("mouseleave", function () {
        path_1.style.opacity = "0";
        info_1.style.opacity = "0";
    });
}

//LAMELA 2
const lamela_2 = document.querySelector(".floors__lamela--2-pin");
const path_2 = document.querySelector(".floors__left-part--path");
const info_2 = document.querySelector(".floors__lamela--2-info");
if(lamela_2 && path_2 && info_2) {
    lamela_2.addEventListener("mouseover", function () {
        path_2.style.opacity = "0.5";
        info_2.style.opacity = "1";
    });

    lamela_2.addEventListener("mouseleave", function () {
        path_2.style.opacity = "0";
        info_2.style.opacity = "0";
    });
}

//LAMELA 3
const lamela_3 = document.querySelector(".floors__lamela--3-pin");
const path_3 = document.querySelector(".floors__right-part--path");
const info_3 = document.querySelector(".floors__lamela--3-info");
if(lamela_3 && path_3 && info_3) {
    lamela_3.addEventListener("mouseover", function () {
        path_3.style.opacity = "0.5";
        info_3.style.opacity = "1";
    });

    lamela_3.addEventListener("mouseleave", function () {
        path_3.style.opacity = "0";
        info_3.style.opacity = "0";
    });
}

//LAMELA 4
const lamela_4 = document.querySelector(".floors__lamela--4-pin");
const path_4 = document.querySelector(".floors__back-part--path");
const info_4 = document.querySelector(".floors__lamela--4-info");
if(lamela_4 && path_4 && info_4) {
    lamela_4.addEventListener("mouseover", function () {
        path_4.style.opacity = "0.5";
        info_4.style.opacity = "1";
    });

    lamela_4.addEventListener("mouseleave", function () {
        path_4.style.opacity = "0";
        info_4.style.opacity = "0";
    });
}

const floors = document.querySelector(".floors");
const content = document.querySelector(".floors__content");
const scrollHidden = document.querySelector(".scroll-hidden");
const floorsText = document.querySelector(".floors__text");
const roof = document.querySelector(".floors__roof");
const floor_1 = document.querySelector(".floors__floor-1");
const floor_2 = document.querySelector(".floors__floor-2");
const floor_3 = document.querySelector(".floors__floor-3");
const floor_4 = document.querySelector(".floors__floor-4");
const atrijum = document.querySelector(".floors__atrijum");
const floors_information = document.querySelector(".floors_information");
const floors_info_1 = document.querySelector(".floors__info-1");
const floors_info_2 = document.querySelector(".floors__info-2");
const floors_info_3 = document.querySelector(".floors__info-3");
const floors_info_4 = document.querySelector(".floors__info-4");



// if( floors && content && scrollHidden && floorsText && roof && floor_1 && floor_2 && floor_3 && floor_4 && atrijum && floors_information && floors_info_1 && floors_info_2 && floors_info_3 && floors_info_2) {
if( floors) {
    if (window.innerWidth > 1023) {
        gsap.registerPlugin(ScrollTrigger);


        ScrollTrigger.create({
            trigger: ".floors",
            start: "top top",
            // end: "+=7500px",
            end: "+=5200px",
            pin: true,
            scrub: true,
        });

        gsap.to(".scroll-hidden", {
            display: "none",
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top top",
                // end: "+=1000px",
                end: "+=500px",
                scrub: true,
            }
        });

        if (window.innerWidth > 1640) {
        gsap.to(".floors__text", {
            bottom: '150px',
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top top",
                // end: "+=1000px",
                end: "+=100px",
                scrub: true,
            }
        });
        }else
            {
                gsap.to(".floors__text", {
                    bottom: '400px',
                    duration: 2,
                    scrollTrigger: {
                        trigger: ".floors__content",
                        start: "top top",
                        // end: "+=1000px",
                        end: "+=100px",
                        scrub: true,
                    }
                });
            }

        gsap.to(".floors__text", {
            x: 2000,
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                // start: "top+=1500 top",
                start: "top+=1000 top",
                // end: "+=2000px",
                end: "+=1000px",
                scrub: true,
            }
        });

        gsap.to(".floors__roof", {
            y: -700,
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=1500 top",
                // end: "+=1500px",
                end: "+=500px",
                scrub: true,
            }
        });


        gsap.to(".floors__floor-4", {
            y: -200,
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=1500 top",
                // end: "+=1500px",
                end: "+=500px",
                scrub: true,
            }
        });

        gsap.to(".floors__floor-3", {
            y: -50,
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=1500 top",
                // end: "+=1500px",
                end: "+=500px",
                scrub: true,
            }
        });

        gsap.to(".floors__floor-2", {
            y: 100,
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=1500 top",
                // end: "+=1500px",
                end: "+=500px",
                scrub: true,
            }
        });

        gsap.to(".floors__floor-1", {
            y: 250,
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=1500 top",
                // end: "+=1500px",
                end: "+=500px",
                scrub: true,
            }
        });

        gsap.to(".floors__atrijum", {
            opacity: 0,
            duration: 2,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=1500 top",
                // end: "+=1500px",
                end: "+=500px",
                scrub: true,
            }
        });

//
        gsap.to(".floors__info-1", {
            scrollTrigger: {
                trigger: ".floors__content",
                // start: "top+=3000 top",
                // end: "+=2000px",
                start: "top+=2500 top",
                end: "+=1000px",
                scrub: true,
            }
        });

        gsap.to(".floors__info-2", {
            scrollTrigger: {
                trigger: ".floors__content",
                // start: "top+=3500 top",
                // end: "+=2000px",
                start: "top+=3000 top",
                end: "+=1000px",
                scrub: true,
            }
        });

        gsap.to(".floors__info-3", {
            scrollTrigger: {
                trigger: ".floors__content",
                // start: "top+=4000 top",
                // end: "+=2000px",
                start: "top+=3500 top",
                end: "+=1000px",
                scrub: true,
            }
        });

        gsap.to(".floors__info-4", {
            scrollTrigger: {
                trigger: ".floors__content",
                // start: "top+=4500 top",
                // end: "+=2000px",
                start: "top+=4000 top",
                end: "+=1000px",
                scrub: true,
            }
        });

        if (window.innerWidth > 1640) {
            gsap.to(".floors__content", {
                x: -950,
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    start: "top+=2500 top",
                    // end: "+=1500px",
                    end: "+=1000px",
                    scrub: true,
                    toggleActions: "play none none none",
                    onLeave: () => {
                        document.querySelector(".floors__informations").style.opacity = "1";
                        document.querySelector(".floors__informations").style.right = "0";
                    },
                    onEnterBack: () => {
                        gsap.to(".floors__content", {x: -950})
                        gsap.to(".floors__roof", {y: -700})
                        gsap.to(".floors__floor-4", {y: -200})
                        gsap.to(".floors__floor-3", {y: -50})
                        gsap.to(".floors__floor-2", {y: 100})
                        gsap.to(".floors__floor-1", {y: 250})
                    },
                }
            });

        } else {
            gsap.to(".floors__content", {
                x: -650,
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    start: "top+=2500 top",
                    // end: "+=1500px",
                    end: "+=1000px",
                    scrub: true,
                    toggleActions: "play none none none",
                    onEnterBack: () => {
                        gsap.to(".floors__content", {x: -650})
                        gsap.to(".floors__roof", {y: -700})
                        gsap.to(".floors__floor-4", {y: -200})
                        gsap.to(".floors__floor-3", {y: -50})
                        gsap.to(".floors__floor-2", {y: 100})
                        gsap.to(".floors__floor-1", {y: 250})
                    },
                }
            });
        }

        gsap.to(".floors__informations", {
            scrollTrigger: {
                trigger: ".floors__content",
                // start: "top+=3000 top",
                start: "top+=2500 top",
                end: "+=500px",
                scrub: true,
                onLeave: () => {
                    document.querySelector(".floors__informations").style.right = "0";
                    document.querySelector(".floors__informations").style.opacity = "1";
                },
                onEnterBack: () => {
                    document.querySelector(".floors__informations").style.right = "-100%";
                    document.querySelector(".floors__informations").style.opacity = "0";
                },
            }
        });

        if (window.innerWidth > 1640) {
            gsap.to(".floors__info-1", {
                right: "15%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=3500 top",
                    // end: "+=500px",
                    start: "top+=3000 top",
                    end: "+=500px",
                    scrub: true,
                }
            });

            gsap.to(".floors__info-2", {
                right: "15%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=4000 top",
                    // end: "+=500px",
                    start: "top+=3500 top",
                    end: "+=500px",
                    scrub: true,
                }
            });

            gsap.to(".floors__info-3", {
                right: "15%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=5000 top",
                    // end: "+=500px",
                    start: "top+=4000 top",
                    end: "+=500px",
                    scrub: true,
                }
            });

            gsap.to(".floors__info-4", {
                right: "15%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=6000 top",
                    // end: "+=500px",
                    start: "top+=4500 top",
                    end: "+=500px",
                    scrub: true,
                }
            });
        }
        else{
            gsap.to(".floors__info-1", {
                right: "5%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=3500 top",
                    // end: "+=500px",
                    start: "top+=3000 top",
                    end: "+=500px",
                    scrub: true,
                }
            });

            gsap.to(".floors__info-2", {
                right: "5%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=4000 top",
                    // end: "+=500px",
                    start: "top+=3500 top",
                    end: "+=500px",
                    scrub: true,
                }
            });

            gsap.to(".floors__info-3", {
                right: "5%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=5000 top",
                    // end: "+=500px",
                    start: "top+=4000 top",
                    end: "+=500px",
                    scrub: true,
                }
            });

            gsap.to(".floors__info-4", {
                right: "5%",
                duration: 2,
                scrollTrigger: {
                    trigger: ".floors__content",
                    // start: "top+=6000 top",
                    // end: "+=500px",
                    start: "top+=4500 top",
                    end: "+=500px",
                    scrub: true,
                }
            });
        }
    }
    else{
        gsap.registerPlugin(ScrollTrigger);




        gsap.to(".scroll-hidden-mobile", {
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top top",
                end: "+=200px",
                scrub: 1,
            }
        });
        gsap.to(".animationPath", {
            opacity: 0,
            ease: "none",
            duration: 1,
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top top",
                end: "+=200px",
                scrub: 1,
            }
        });


        ScrollTrigger.create({
            trigger: ".floors",
            start: "top top",
            // end: "+=5500px",
            end: "+=1200px",
            pin: true,
            // scrub: 2,
        });


        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=500 top",
                // end: "+=1000",
                end: "+=200",
                scrub: true,
            }
        });

        tl.to(".floors__atrijum", { opacity: 0, duration: 1 })
            .to(".floors__roof", { y: -700, duration: 1 })
            .to(".floors__floor-4", { y: -200, duration: 1 } )
            .to(".floors__floor-3", { y: -100, duration: 1 } )
            .to(".floors__floor-2", { y: 0, duration: 1 } )
            .to(".floors__floor-1", { y: 100, duration: 1 } )
            .to(".floors__atrijum", { opacity: 0, duration: 1 });




        let tl2 = gsap.timeline({
            scrollTrigger: {
                trigger: ".floors__content",
                start: "top+=700 top",
                // end: "+=1000",
                end: "+=200",
                scrub: true,
                // markers: true
            }
        });

        if(window.innerWidth < 769) {
            tl2.to(".floors__content", {x: -220, duration: 1})
                .to(".floors__informations", {x: -220, duration: 1}, "-=0.5")
        }
        else{
            tl2.to(".floors__content", {x: -400, duration: 1})
                .to(".floors__informations", {x: -420, duration: 1}, "-=0.5")
        }












        // gsap.to(".scroll-hidden-mobile", {
        //     opacity: 1,
        //     duration: 1,
        //     scrollTrigger: {
        //         trigger: ".floors__content",
        //         start: "top 70%",
        //         end: "top 20%",
        //         scrub: 1,
        //     }
        // });
        // gsap.to(".animationPath", {
        //     opacity: 0.5,
        //     ease: "none",
        //     duration: 1,
        //     scrollTrigger: {
        //         trigger: ".floors__content",
        //         start: "top 70%",
        //         end: "top 20%",
        //         scrub: 1,
        //     }
        // });
        //
        //
        // ScrollTrigger.create({
        //     trigger: ".floors",
        //     start: "top top",
        //     // end: "+=5500px",
        //     end: "+=3500px",
        //     pin: true,
        //     // scrub: 2,
        // });
        //
        // gsap.to(".scroll-hidden-mobile", {
        //     opacity: 0,
        //     duration: 1,
        //     ease: "none",
        //     scrollTrigger: {
        //         trigger: ".floors__content",
        //         // start: "top+=500 top",
        //         start: "top top",
        //         end: "+=500",
        //         scrub: 1,
        //     }
        // });
        // gsap.to(".animationPath", {
        //     opacity: 0,
        //     duration: 1,
        //     ease: "none",
        //     scrollTrigger: {
        //         trigger: ".floors__content",
        //         // start: "top+=700 top",
        //         start: "top top",
        //         end: "+=500",
        //         scrub: 1,
        //     }
        // });
        //
        //
        // let tl = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".floors__content",
        //         start: "top+=500 top",
        //         // end: "+=1000",
        //         end: "+=500",
        //         scrub: true,
        //     }
        // });
        //
        // tl.to(".floors__atrijum", { opacity: 0, duration: 1 })
        //     .to(".floors__roof", { y: -700, duration: 1 })
        //     .to(".floors__floor-4", { y: -200, duration: 1 } )
        //     .to(".floors__floor-3", { y: -100, duration: 1 } )
        //     .to(".floors__floor-2", { y: 0, duration: 1 } )
        //     .to(".floors__floor-1", { y: 100, duration: 1 } )
        //     .to(".floors__atrijum", { opacity: 0, duration: 1 });
        //
        //
        //
        //
        // let tl2 = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".floors__content",
        //         start: "top+=2000 top",
        //         // end: "+=1000",
        //         end: "+=500",
        //         scrub: true,
        //         // markers: true
        //     }
        // });
        //
        // if(window.innerWidth < 769) {
        //     tl2.to(".floors__content", {x: -220, duration: 1})
        //         .to(".floors__informations", {x: -220, duration: 1}, "-=0.5")
        // }
        // else{
        //     tl2.to(".floors__content", {x: -400, duration: 1})
        //         .to(".floors__informations", {x: -420, duration: 1}, "-=0.5")
        // }

    }
}