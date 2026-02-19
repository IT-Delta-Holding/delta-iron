import './zoom-image.scss';

const zoomImages = document.querySelector('.zoom-image');

if(zoomImages) {
    if(window.innerWidth > 1023) {
        document.addEventListener("DOMContentLoaded", function () {
            const img = document.getElementById("zoomImage");
            const zoomBox = document.getElementById("zoomBox");


            img.addEventListener("mousemove", function (e) {
                const {left, top, width, height} = img.getBoundingClientRect();
                const x = ((e.clientX - left) / width) * 100;
                const y = ((e.clientY - top) / height) * 100;


                zoomBox.style.backgroundImage = `url(${img.src})`;
                zoomBox.style.backgroundPosition = `${x}% ${y}%`;


                const zoomSize = 150;
                let zoomX = e.clientX + 20;
                let zoomY = e.clientY + 20;


                const screenWidth = window.innerWidth;
                const screenHeight = window.innerHeight;

                if (zoomX + zoomSize > screenWidth) {
                    zoomX = e.clientX - zoomSize - 20;
                }

                if (zoomY + zoomSize > screenHeight) {
                    zoomY = e.clientY - zoomSize - 20;
                }

                zoomBox.style.left = `${zoomX}px`;
                zoomBox.style.top = `${zoomY}px`;
                zoomBox.style.display = "block";
            });

            img.addEventListener("mouseleave", function () {
                zoomBox.style.display = "none";
            });
        });
// });
    }
}

