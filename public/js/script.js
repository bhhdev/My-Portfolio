const wrapperEl = document.querySelector('.wrapper');
const navLinkEls = document.querySelectorAll('.nav-section .wrapper .nav-link');
const navbarBurgerEl = document.querySelector('.navbar-burger');

[...navLinkEls].forEach(el => {
    el.addEventListener('click', () => {
        wrapperEl.classList.add('active');
        wrapperEl.classList.remove('inactive');
        navbarBurgerEl.classList.remove('is-active');
    })
})
console.log(wrapperEl);

const handleOpenNav = () => {
    wrapperEl.classList.remove('inactive');
    wrapperEl.classList.add('active');
}
const handleCloseNav = () => {
    wrapperEl.classList.remove('active');
    wrapperEl.classList.add('inactive');
}

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {
    el.classList.toggle('is-active');

    if(el.classList.contains('is-active')) {
        handleCloseNav();
    } else {
        handleOpenNav();
    }
  });
});
