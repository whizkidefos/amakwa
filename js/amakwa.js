const menuToggler = document.querySelector('.menu-toggler');
const closeMenu = document.querySelector('.close-menu');

menuToggler.addEventListener('click', function () {
    console.log('click fired')
    document.querySelector('.main-nav').style.left = '-20px';
});

closeMenu.addEventListener('click', function () {
    document.querySelector('.main-nav').style.left = '-100%';
});