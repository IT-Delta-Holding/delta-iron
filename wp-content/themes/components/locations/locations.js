import './locations.scss';
import '@components/button_iron/button_iron';
import {gsap} from "gsap";
// import {ScrollTrigger} from "gsap/ScrollTrigger";
//
//
// gsap.registerPlugin(ScrollTrigger);



const routes = document.querySelectorAll('.locations__route'),
    pins = document.querySelectorAll('.locations__pin'),
    pinsInfo = document.querySelectorAll('.locations__pin-info'),
    pinsNames = document.querySelectorAll('.locations__pin-name'),
    maps = document.querySelectorAll('.map'),
    pinsInformations = document.querySelectorAll('.locations__pin-informations'),
    mainMap = document.getElementById('main-map'),
    redMap = document.getElementById('red-map'),
    yellowMap = document.getElementById('yellow-map'),
    blueMap = document.getElementById('blue-map'),
    lightblueMap = document.getElementById('light-blue-map'),
    cCentar = document.getElementById('c-centar'),
    rCentar = document.getElementById('r-centar'),
    cAutoput = document.getElementById('c-autoput'),
    rAutoput = document.getElementById('r-autoput'),
    cPetrovaradin = document.getElementById('c-petrovaradin'),
    rPetrovaradin = document.getElementById('r-petrovaradin'),
    cAutobuska = document.getElementById('c-autobuska'),
    rAutobuska = document.getElementById('r-autobuska'),
    cZeleznicka = document.getElementById('c-zeleznicka'),
    rZeleznicka = document.getElementById('r-zeleznicka'),
    cTCBig = document.getElementById('c-tc-big'),
    rTCBig = document.getElementById('r-tc-big'),
    cPozoriste = document.getElementById('c-pozoriste'),
    rPozoriste = document.getElementById('r-pozoriste'),
    cTehnoloskiPark = document.getElementById('c-tehnoloski-park'),
    rTehnoloskiPark = document.getElementById('r-tehnoloski-park'),
    cSpens = document.getElementById('c-spens'),
    rSpens = document.getElementById('r-spens'),
    cSajam = document.getElementById('c-sajam'),
    rSajam = document.getElementById('r-sajam'),
    cPromenada = document.getElementById('c-promenada'),
    rPromenada = document.getElementById('r-promenada'),
    centarInformations = document.getElementById('centar-info'),
    centarinInfo = document.querySelector('.locations__pin-info--centar'),
    autoputInformations = document.getElementById('autoput-info'),
    autoputinInfo = document.querySelector('.locations__pin-info--autoput'),
    petrovaradinInformations = document.getElementById('petrovaradin-info'),
    petrovaradinInfo = document.querySelector('.locations__pin-info--petrovaradin'),
    pozoristeinInformations = document.getElementById('pozoriste-info'),
    pozoristeinInfo = document.querySelector('.locations__pin-info--pozoriste'),
    spensInformations = document.getElementById('spens-info'),
    spensinInfo = document.querySelector('.locations__pin-info--spens'),
    autobuskaInformations = document.getElementById('autobuska-info'),
    autobuskaInfo = document.querySelector('.locations__pin-info--autobuska'),
    tcBigInformations = document.getElementById('tc-big-info'),
    tcBigInfo = document.querySelector('.locations__pin-info--tc-big'),
    zeleznickaInformations = document.getElementById('zeleznicka-info'),
    zeleznickaInfo = document.querySelector('.locations__pin-info--zeleznicka'),
    tehnoloskiParkInformations = document.getElementById('tehnoloski-park-info'),
    tehnoloskiParkInfo = document.querySelector('.locations__pin-info--tehnoloski-park'),
    sajamInformations = document.getElementById('sajam-info'),
    sajamInfo = document.querySelector('.locations__pin-info--sajam'),
    promenadaInformations = document.getElementById('promenada-info'),
    promenadaInfo = document.querySelector('.locations__pin-info--promenada');


if(centarinInfo) {
    document.addEventListener("DOMContentLoaded", function () {
        if (window.innerWidth < 769) {
            centarinInfo.style.height = "50px";
        } else {
            centarinInfo.style.height = "60px";
        }
    });
}



if(routes) {
    routes.forEach(route => {
        gsap.set(route, {
            strokeDashoffset: 0.001,
            duration: 0.5,
            ease: "power1.in"
        });
    });


    if (cCentar && rCentar) {
        cCentar.addEventListener('click', () => {
            animateRoute(cCentar, routes, rCentar);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            redMap.classList.remove('hiddenImg');
            redMap.classList.add('visibleImage');
            centarInformations.style.opacity = "1";
            centarinInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                centarinInfo.style.height = "50px";
            } else {
                centarinInfo.style.height = "60px";
            }
        });
    }

    // if (cAutoput && rAutoput) {
    //     cAutoput.addEventListener('click', () => {
    //         animateRoute(cAutoput, routes, rAutoput);
    //         pinsInfo.forEach(pin =>{
    //             pin.classList.add('hidden');
    //             pin.classList.remove('customWidth');
    //         })
    //         maps.forEach(map =>{
    //             map.classList.add('hiddenImg');
    //             map.classList.remove('visibleImage');
    //         })
    //         yellowMap.classList.remove('hiddenImg');
    //         yellowMap.classList.add('visibleImage');
    //         // yellowMap.style.display = "block";
    //         // mainMap.style.display = "none";
    //         // redMap.style.display = "none";
    //         // blueMap.style.display = "none";
    //         // lightblueMap.style.display = "none";
    //         autoputInformations.style.opacity = "1";
    //         autoputinInfo.classList.add('customWidth');
    //         autoputinInfo.style.height = "60px";
    //     });
    // }

    if (cPetrovaradin && rPetrovaradin) {
        cPetrovaradin.addEventListener('click', () => {
            animateRoute(cPetrovaradin, routes, rPetrovaradin);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            lightblueMap.classList.remove('hiddenImg');
            lightblueMap.classList.add('visibleImage');
            petrovaradinInformations.style.opacity = "1";
            petrovaradinInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                petrovaradinInfo.style.height = "50px";
            } else {
                petrovaradinInfo.style.height = "60px";
            }
        });
    }

    if (cAutobuska && rAutobuska) {
        cAutobuska.addEventListener('click', () => {
            animateRoute(cAutobuska, routes, rAutobuska);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            blueMap.classList.remove('hiddenImg');
            blueMap.classList.add('visibleImage');
            autobuskaInformations.style.opacity = "1";
            autobuskaInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                autobuskaInfo.style.height = "50px";
            } else {
                autobuskaInfo.style.height = "60px";
            }
        });
    }

    if (cZeleznicka && rZeleznicka) {
        cZeleznicka.addEventListener('click', () => {
            animateRoute(cZeleznicka, routes, rZeleznicka);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            blueMap.classList.remove('hiddenImg');
            blueMap.classList.add('visibleImage');
            zeleznickaInformations.style.opacity = "1";
            zeleznickaInfo.classList.add('customWidth');
            zeleznickaInfo.style.height = "60px";
        });
    }

    if (cTCBig && rTCBig) {
        cTCBig.addEventListener('click', () => {
            animateRoute(cTCBig, routes, rTCBig);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            yellowMap.classList.remove('hiddenImg');
            yellowMap.classList.add('visibleImage');
            tcBigInformations.style.opacity = "1";
            tcBigInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                tcBigInfo.style.height = "50px";
            } else {
                tcBigInfo.style.height = "60px";
            }
        });
    }

    if (cPozoriste && rPozoriste) {
        cPozoriste.addEventListener('click', () => {
            animateRoute(cPozoriste, routes, rPozoriste);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            redMap.classList.remove('hiddenImg');
            redMap.classList.add('visibleImage');
            pozoristeinInformations.style.opacity = "1";
            pozoristeinInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                pozoristeinInfo.style.height = "50px";
            } else {
                pozoristeinInfo.style.height = "60px";
            }
        });
    }

    if (cTehnoloskiPark && rTehnoloskiPark) {
        cTehnoloskiPark.addEventListener('click', () => {
            animateRoute(cTehnoloskiPark, routes, rTehnoloskiPark);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            lightblueMap.classList.remove('hiddenImg');
            lightblueMap.classList.add('visibleImage');
            tehnoloskiParkInformations.style.opacity = "1";
            tehnoloskiParkInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                tehnoloskiParkInfo.style.height = "50px";
            } else {
                tehnoloskiParkInfo.style.height = "60px";
            }
        });
    }

    if (cSpens && rSpens) {
        cSpens.addEventListener('click', () => {
            animateRoute(cSpens, routes, rSpens);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            redMap.classList.remove('hiddenImg');
            redMap.classList.add('visibleImage');
            spensInformations.style.opacity = "1";
            spensinInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                spensinInfo.style.height = "50px";
            } else {
                spensinInfo.style.height = "60px";
            }
        });
    }

    if (cSajam && rSajam) {
        cSajam.addEventListener('click', () => {
            animateRoute(cSajam, routes, rSajam);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            blueMap.classList.remove('hiddenImg');
            blueMap.classList.add('visibleImage');
            sajamInformations.style.opacity = "1";
            sajamInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                sajamInfo.style.height = "50px";
            } else {
                sajamInfo.style.height = "60px";
            }
        });
    }
    if (cPromenada && rPromenada) {
        cPromenada.addEventListener('click', () => {
            animateRoute(cPromenada, routes, rPromenada);
            pinsInfo.forEach(pin => {
                pin.classList.add('hidden');
                pin.classList.remove('customWidth');
            })
            maps.forEach(map => {
                map.classList.add('hiddenImg');
                map.classList.remove('visibleImage');
            })
            lightblueMap.classList.remove('hiddenImg');
            lightblueMap.classList.add('visibleImage');
            promenadaInformations.style.opacity = "1";
            promenadaInfo.classList.add('customWidth');
            if (window.innerWidth < 769) {
                promenadaInfo.style.height = "50px";
            } else {
                promenadaInfo.style.height = "60px";
            }
        });
    }


    function animateRoute(circle, routes, currentRoute) {
        pins.forEach(pin => {
            pin.classList.remove('active');
        });
        // pinsInformations
        pinsInfo.forEach(pinInfo => {
            if (window.innerWidth < 769) {
                pinInfo.style.height = "25px";
            } else {
                pinInfo.style.height = "32px";
            }
        });

        pinsInformations.forEach(info => {
            info.style.opacity = "0";
        });

        const path = currentRoute;
        const pathLength = path.getTotalLength();
        currentRoute.style.strokeDasharray = pathLength;
        currentRoute.style.strokeDashoffset = pathLength;

        routes.forEach(route => {
            const allRoute = route;
            const allRouteLength = allRoute.getTotalLength();
            if (route !== currentRoute) {
                gsap.to(route, {
                    strokeDashoffset: allRouteLength,
                    strokeDasharray: [0, 999999],
                    duration: 0.5,
                    ease: "power1.in",
                });
            }
        });


        gsap.to(currentRoute, {
            strokeDashoffset: 0,
            duration: 1.5,
            ease: "power1.out"
        });

        let closestPin = null;

        if (circle) {
            closestPin = circle.closest('.locations__pin');
        }

        if (closestPin) {
            closestPin.classList.add('active');
        }
    }


    const container = document.querySelector('.locations__bottom-content');
    if(container) {
        window.addEventListener('load', function () {


            const scrollWidth = container.scrollWidth;
            const visibleWidth = container.clientWidth;


            container.scrollLeft = (scrollWidth - visibleWidth) / 2;


            // const target = document.getElementById('r-centar');
            //
            // const containerWidth = container.clientWidth;
            //
            // if(target){
            //     const targetOffset = target.offsetLeft;
            //     const targetWidth = target.offsetWidth;
            //     console.log(target.offsetLeft);
            //     console.log(targetOffset);
            //     console.log(targetWidth);
            // }
            //
            // container.scrollLeft = targetOffset - (containerWidth / 2) + (targetWidth / 2);
        });
    }
}