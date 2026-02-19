// import '@components/button_iron/button_iron';
//
//
// const wholePage = document.getElementById('page');
// //
// window.addEventListener('load', () => {
//     wholePage.classList.remove('preload');
// })
//
// const linksContainer = document.querySelector('.js-header__menu-links'),
//    const header = document.querySelector('.js-header-coming-soon');
    // headerHamburger = document.querySelector('.js-header-hamburger'),
    // headerHamburgerClose = document.querySelector('.js-header-hamburger--close');
//
//
//
//
// if (window.innerWidth > 1024) {
//     const cardHeader = document.querySelectorAll('.header__menu-link-card');
//
//     if (cardHeader) {
//
//         cardHeader.forEach(card => {
//             let closestArrowCircle = card.querySelector('.js-arrow-circle');
//             if (closestArrowCircle) {
//                 card.addEventListener('pointerenter', () => {
//                     closestArrowCircle.classList.add('entered');
//                     closestArrowCircle.classList.remove('left');
//
//                 })
//                 card.addEventListener('pointerleave', () => {
//                     closestArrowCircle.classList.remove('entered');
//                     closestArrowCircle.classList.add('left');
//                 })
//             }
//
//         })
//     }
// }
//
//
//
//
//
// if (header && headerHamburger && headerHamburgerClose) {
//     headerHamburger.addEventListener('click', () => {
//         header.classList.toggle('expended')
//         const menuExpanded = document.querySelector('.header__menu');
//
//         // if (window.innerWidth >= 1024) {
//             if (header.classList.contains('expended')) {
//                 menuExpanded.style.left = '0';
//             } else {
//                 menuExpanded.style.left = '-100%';
//             }
//         // }
//     })
//
//     headerHamburgerClose.addEventListener('click', () => {
//         const menuExpanded = document.querySelector('.header__menu');
//
//         // if (window.innerWidth >= 1024) {
//             if (header.classList.contains('expended')) {
//                 menuExpanded.style.left = '-100%';
//                 header.classList.remove('expended')
//             }
//             // else {
//                 // menuExpanded.style.left = '-100%';
//             // }
//         // }
//     })
//
//     let headerPosition = 0;
//     document.addEventListener('scroll', () => {
//         if (scrollY <= 10) {
//             console.log(scrollY);
//             header.classList.remove('sticky')
//         } else {
//             header.classList.add('sticky');
//         }
//         headerPosition = scrollY;
//     })
//
//     window.addEventListener('click', (e) => {
//         if (header.classList.contains('expended') && !header.contains(e.target) && !headerHamburger.contains(e.target)) {
//             header.classList.remove('expended')
//         }
//     });
// }
//
// /*
// ** Search Logic
//  */
//
// const searchModal = document.querySelector('.js-header-search-modal'),
//     searchButton = document.querySelector('.js-header-search-button'),
//     closeButton = document.querySelector('.js-header-search-modal-close'),
//     searchInput = document.querySelector('.js-header-search-modal-input'),
//     searchClear = document.querySelector('.js-search-clear'),
//     joinUsBtn = document.querySelector('.header__menu-connect-link .btn');
//
// if (joinUsBtn) {
//     joinUsBtn.setAttribute('target', '_blank');
// }
//
// if (searchButton && searchModal && header && closeButton && searchClear) {
//     const searchModalContainer = searchModal.querySelector('.container');
//     searchButton.addEventListener('click', () => {
//         searchModal.classList.toggle('active');
//         header.classList.toggle('searching');
//     })
//
//     closeButton.addEventListener('click', () => {
//         searchModal.classList.remove('active');
//         header.classList.remove('searching');
//     })
//
//     window.addEventListener('click', function (e) {
//         if (searchModal.classList.contains('active') && e.target.classList.contains('js-header-search-modal')) {
//             searchModal.classList.remove('active')
//             header.classList.remove('searching')
//         }
//     });
//
//     window.addEventListener('keydown', (e) => {
//         if (e.key === 'Escape') {
//             searchModal.classList.remove('active')
//             header.classList.remove('searching')
//             header.classList.remove('expended')
//         }
//     })
// }
//
// (function ($) {
//     $(document).ready(function () {
//         /* Blog Filters */
//
//         let searchString = '',
//             noResultsString = $('.js-header-search-modal-error').text();
//
//         $('.js-header-search-modal-input').keyup(function () {
//             searchString = $('.js-header-search-modal-input').val();
//             FilterPosts(searchString)
//         })
//
//         function FilterPosts(searchString) {
//             let entries = {
//                     action: 'post_filter_ajax',
//                     searchString: searchString,
//                     nonce: wp_ajax.nonce
//                 },
//                 output_el = document.querySelector('.js-header-search-modal-results');
//
//             output_el && (output_el.innerHTML = '');
//
//
//             jQuery.post(wp_ajax.ajax_url, entries).done(data => {
//                 let html = '';
//                 if (data.data.length > 0) {
//                     data['data'].forEach(item => {
//                         html += `<a class='header__search-modal-result'
//                                 href="${item.link}">
//                                 <img class="header__search-modal-result-img" src='${item['image']}' alt='${item['alt']}'>
//                                 <p class="header__search-modal-result-title">${item.title}</p>
//                             </a>`;
//
//                     });
//                     output_el && (output_el.innerHTML = html);
//                 } else {
//                     output_el && (output_el.innerHTML = '<p class="error__msg">' + noResultsString + '</p>')
//                 }
//
//             }).fail(
//                 function () {
//                     output_el && (output_el.innerHTML = '<p class="error__msg">Server Error</p>')
//                 }
//             );
//         }
//     })
// })(jQuery);
//
// /*
// function hasClass(el, className)
// {
//     if (el.classList)
//         return el.classList.contains(className);
//     return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
// }
//
// function addClass(el, className)
// {
//     if (el.classList)
//         el.classList.add(className)
//     else if (!hasClass(el, className))
//         el.className += " " + className;
// }
//
// function removeClass(el, className)
// {
//     if (el.classList)
//         el.classList.remove(className)
//     else if (hasClass(el, className))
//     {
//         var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
//         el.className = el.className.replace(reg, ' ');
//     }
// }
// */
