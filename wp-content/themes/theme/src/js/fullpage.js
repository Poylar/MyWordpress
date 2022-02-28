import fullpage from 'fullpage.js';
import gsap from 'gsap';
const headerNavBtn = document.querySelector('.header__nav-btn');
const headerMenu = document.querySelector('.header__menu_fixed .header__menu');
function openMenu() {
  gsap.to(headerMenu, {
    y: 0,
    duration: 0.4,
  });
  headerNavBtn.classList.add('open');
}
function closeMenu() {
  gsap.to(headerMenu, {
    y: -100,
    duration: 0.4,
  });
  headerNavBtn.classList.remove('open');
}

document.addEventListener('click', (e) => {
  if (e.target.closest('.header__nav-btn') && !headerNavBtn.classList.contains('open')) {
    openMenu();
  } else if (!e.target.closest('.header__menu_fixed')){
    closeMenu();
  }
});

const fp = new fullpage('#fp', {
  normalScrollElements: '.footer',
  fixedElements: '.header__menu-fixed',
  afterLoad: (origin, destination, direction) => {
    if (destination.index >= 1) {
      gsap.to('.header__menu_fixed', {
        y: 0,
      });
    }
  },

  onLeave: (origin, destination, direction) => {
    closeMenu();
    if (destination.index == 0) {
      gsap.to('.header__menu_fixed', {
        y: -500,
        ease: 'ease',
      });
    }
  },
});
