import '@components/button_iron/button_iron';


const wholePage = document.getElementById('page');

window.addEventListener('load', () => {
    wholePage.classList.remove('preload');
})

const linksContainer = document.querySelector('.js-header__menu-links'),
    header = document.querySelector('.js-header'),
    headerHamburger = document.querySelector('.js-header-hamburger'),
    headerHamburgerClose = document.querySelector('.js-header-hamburger--close'),
    menu = document.querySelector('.header__menu'),
    menuContact = document.querySelector('.header__contact'),
    contactFormButton = menuContact.querySelector('.button-iron');

// console.log(contactFormButton);

// if(contactFormButton) {
//     contactFormButton.addEventListener('click', () => {
//         header.classList.toggle('expended')
//         const menuExpanded = document.querySelector('.header__menu');
//
//         if (header.classList.contains('expended')) {
//             menuExpanded.style.left = '0';
//         } else {
//             menuExpanded.style.left = '-100%';
//         }
//     })
// }


if (window.innerWidth > 1024) {
    const cardHeader = document.querySelectorAll('.header__menu-link-card');

    if (cardHeader) {

        cardHeader.forEach(card => {
            let closestArrowCircle = card.querySelector('.js-arrow-circle');
            if (closestArrowCircle) {
                card.addEventListener('pointerenter', () => {
                    closestArrowCircle.classList.add('entered');
                    closestArrowCircle.classList.remove('left');

                })
                card.addEventListener('pointerleave', () => {
                    closestArrowCircle.classList.remove('entered');
                    closestArrowCircle.classList.add('left');
                })
            }

        })
    }
}





if (header && headerHamburger && headerHamburgerClose) {
    headerHamburger.addEventListener('click', () => {
        header.classList.toggle('expended')
        const menuExpanded = document.querySelector('.header__menu');
        const menuContact = menuExpanded.querySelector('.header__contact');
        const contactFormButton = menuContact.querySelector('.button-iron');

        const headerButtons = menuExpanded.querySelector('.header__menu--content-buttons');
        const contactFormButtonMobile = headerButtons.querySelector('.button-iron');
        // console.log(contactFormButtonMobile);

        // if (window.innerWidth >= 1024) {
            if (header.classList.contains('expended')) {
                menuExpanded.style.left = '0';

                contactFormButton.addEventListener('click', () => {
                    header.classList.remove('expended')
                    menuExpanded.style.left = '-100%';
                })

                if(window.innerWidth < 1024) {
                    contactFormButtonMobile.addEventListener('click', () => {
                        header.classList.remove('expended')
                        menuExpanded.style.left = '-100%';
                    })
                }


            } else {
                menuExpanded.style.left = '-100%';
            }
        // }
    })

    headerHamburgerClose.addEventListener('click', () => {
        const menuExpanded = document.querySelector('.header__menu');

        // if (window.innerWidth >= 1024) {
            if (header.classList.contains('expended')) {
                menuExpanded.style.left = '-100%';
                header.classList.remove('expended')
            }
            // else {
                // menuExpanded.style.left = '-100%';
            // }
        // }
    })

    let headerPosition = 0;
    document.addEventListener('scroll', () => {
        if (scrollY <= 50) {
            header.classList.remove('sticky')
        } else {
            header.classList.add('sticky');
        }
        headerPosition = scrollY;
    })

    window.addEventListener('click', (e) => {
        if (header.classList.contains('expended') && !header.contains(e.target) && !headerHamburger.contains(e.target)) {
            header.classList.remove('expended')
        }
    });



    document.addEventListener("DOMContentLoaded", function () {
        let path = window.location.pathname;
        // let lastSegment = path.substring(path.lastIndexOf("/") + 1);
        // console.log(path);

        if (path === "/") {
            document.getElementById("početna").classList.add("active");
        } else if (path === "/odrzivost/") {
            document.getElementById("održivost").classList.add("active");
        } else if (path === "/poslovni-prostor/" ) {
            document.getElementById("poslovni-prostor").classList.add("active");
        }

        if ( path === "/en/") {
            document.getElementById("homepage").classList.add("active");
        } else if ( path === "/en/sustainability/") {
            document.getElementById("sustainability").classList.add("active");
        } else if (path === "/en/office-space/") {
            document.getElementById("office-space").classList.add("active");
        }
    });

}

/*
** Search Logic
 */

const searchModal = document.querySelector('.js-header-search-modal'),
    searchButton = document.querySelector('.js-header-search-button'),
    closeButton = document.querySelector('.js-header-search-modal-close'),
    searchInput = document.querySelector('.js-header-search-modal-input'),
    searchClear = document.querySelector('.js-search-clear'),
    joinUsBtn = document.querySelector('.header__menu-connect-link .btn');

if (joinUsBtn) {
    joinUsBtn.setAttribute('target', '_blank');
}

if (searchButton && searchModal && header && closeButton && searchClear) {
    const searchModalContainer = searchModal.querySelector('.container');
    searchButton.addEventListener('click', () => {
        searchModal.classList.toggle('active');
        header.classList.toggle('searching');
    })

    closeButton.addEventListener('click', () => {
        searchModal.classList.remove('active');
        header.classList.remove('searching');
    })

    window.addEventListener('click', function (e) {
        if (searchModal.classList.contains('active') && e.target.classList.contains('js-header-search-modal')) {
            searchModal.classList.remove('active')
            header.classList.remove('searching')
        }
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            searchModal.classList.remove('active')
            header.classList.remove('searching')
            header.classList.remove('expended')
        }
    })
}

(function ($) {
    $(document).ready(function () {
        /* Blog Filters */

        let searchString = '',
            noResultsString = $('.js-header-search-modal-error').text();

        $('.js-header-search-modal-input').keyup(function () {
            searchString = $('.js-header-search-modal-input').val();
            FilterPosts(searchString)
        })

        function FilterPosts(searchString) {
            let entries = {
                    action: 'post_filter_ajax',
                    searchString: searchString,
                    nonce: wp_ajax.nonce
                },
                output_el = document.querySelector('.js-header-search-modal-results');

            output_el && (output_el.innerHTML = '');


            jQuery.post(wp_ajax.ajax_url, entries).done(data => {
                let html = '';
                if (data.data.length > 0) {
                    data['data'].forEach(item => {
                        html += `<a class='header__search-modal-result'
                                href="${item.link}">
                                <img class="header__search-modal-result-img" src='${item['image']}' alt='${item['alt']}'>
                                <p class="header__search-modal-result-title">${item.title}</p>
                            </a>`;

                    });
                    output_el && (output_el.innerHTML = html);
                } else {
                    output_el && (output_el.innerHTML = '<p class="error__msg">' + noResultsString + '</p>')
                }

            }).fail(
                function () {
                    output_el && (output_el.innerHTML = '<p class="error__msg">Server Error</p>')
                }
            );
        }
    })
})(jQuery);


