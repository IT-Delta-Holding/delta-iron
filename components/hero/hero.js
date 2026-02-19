import './hero.scss';

const socialTitle = document.querySelectorAll('.hero__socials--brand');
if (socialTitle) {
    socialTitle.forEach(ac => {
        ac.addEventListener('pointerenter', () => {
            ac.parentElement.classList.add('entered');
            ac.parentElement.classList.remove('left');

        })
    })
}
const socialContainer = document.querySelectorAll('.hero__socials--container');
if (socialContainer) {
    socialContainer.forEach(ac => {
        ac.addEventListener('pointerleave', () => {
            ac.classList.remove('entered');
            ac.classList.add('left');
        })
    })
}

const animation = document.getElementById("homepage-animation-container");
if(animation) {
    animation.addEventListener("animationend", function () {
        document.getElementById("heroVideo").play();
    });
}