import '@components/hero/hero';;
import '../scss/page-management.scss';

const staffCategory = document.querySelectorAll('.js-staff-list-category');

window.addEventListener('load', ()=> {
    if (staffCategory) {
        staffCategory.forEach(sc => {
            const closesList = sc.closest('.js-staff-list'),
                closestContent = closesList.querySelector('.js-staff-list-content'),
                innerContent = closestContent.firstElementChild.offsetHeight;
            console.log(innerContent)
            if (closesList && closestContent && innerContent) {
                sc.addEventListener('click', () => {
                    closesList.classList.toggle('active')
                    if (closestContent.style.maxHeight) {
                        closestContent.style.maxHeight = null;
                    } else {
                        closestContent.style.maxHeight = innerContent + 'px';
                    }
                })
            }
        })
    }
})
