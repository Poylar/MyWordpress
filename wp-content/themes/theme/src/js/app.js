import 'fullpage.js/dist/fullpage.css';
import Swiper, { Scrollbar, EffectCreative, Navigation } from 'swiper';
import 'swiper/css';
import 'swiper/css/effect-creative';
import 'swiper/css/scrollbar';
import 'swiper/css/navigation';
import '../scss/app.scss';
import gsap from 'gsap';
function requireAll(r) {
  r.keys().forEach(r);
}
Swiper.use([Scrollbar, EffectCreative, Navigation]);

const header = document.querySelector('.header');
const projectsItem = document.querySelectorAll('.project__item');
projectsItem.forEach((elem) => {
  const color = elem.dataset.color;
  const tl = gsap.timeline({
    paused: true,
  });
  tl.to(
    elem,
    {
      backgroundColor: color,
      duration: 0.5,
    },
    'Sametime'
  );
  tl.to(
    elem.querySelector('.item__logo'),
    {
      y: -100,
      duration: 0.5,
    },
    'Sametime'
  );
  tl.to(
    elem.querySelector('.hidden__info'),
    {
      y: 0,
      duration: 0.5,
    },
    'Sametime'
  );

  elem.addEventListener('mouseover', (e) => {
    tl.play();
  });
  elem.addEventListener('mouseout', (e) => {
    tl.reverse();
  });
});

requireAll(require.context('../images/svg/', true, /\.svg$/));
let isEnd;
const ServicesSlider = new Swiper('.services__slider', {
  slidesPerView: 2,
  freeMode: true,
  grabCursor: true,
  speed: 1000,
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
  },
  effect: 'creative',
  creativeEffect: {
    limitProgress: 5,
    prev: {
      translate: [0, '-300%', 0],
      opacity: 0,
    },
    next: {
      translate: ['100%', 0, 0],
    },
  },
  on: {
    click: () => {
      console.log();
      if (isEnd) {
        const tl = gsap.timeline();
        tl.to('.services__form', {
          y: 0,
          duration: 0.6,
        });
        tl.fromTo(
          '.f-b',
          {
            yPercent: 60,
            opacity: 0,
          },
          {
            yPercent: 0,
            opacity: 1,
            stagger: 0.3,
          }
        );
      } else {
        ServicesSlider.slideNext();
      }
    },
    slideChange: () => {
      if (ServicesSlider.activeIndex == ServicesSlider.slides.length - ServicesSlider.params.slidesPerView) {
        isEnd = true;
      }
    },
  },
});

const getFileName = {
  init: () => {
    const input = document.querySelector('.form__item.file input');
    let filesNameArray = null;
    if (input) {
      input.addEventListener('change', () => {
        const files = input.files;
        for (let i = 0; i < files.length; i++) {
          let file = files[i];
          filesNameArray = file.name;
        }
        const div = document.createElement('div');
        div.setAttribute('class', 'file-name');
        div.innerHTML = filesNameArray;
        if (document.querySelector('.file-name')) document.querySelector('.file-name').remove();
        document.querySelector('.form__item.file').append(div);
      });
    }
  },
};

getFileName.init();

const projectTabSlider = new Swiper('.tab-content', {
  slidesPerView: 3.5,
  spaceBetween: 15,
  freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const teamSlider = new Swiper('.team__wrapper', {
  slidesPerView: 4.6,
  spaceBetween: 15,
  freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const tabsBtns = document.querySelectorAll('.tab-nav__item');
const tabsContents = document.querySelectorAll('.tab-content');
function displayCurrentTab(current) {
  for (let i = 0; i < tabsContents.length; i++) {
    tabsContents[i].style.display = current === i ? 'block' : 'none';
  }
}
displayCurrentTab(0);

document.addEventListener('click', (e) => {
  if (e.target.closest('.tab-nav__item')) {
    tabsBtns.forEach((elem) => elem.classList.remove('active'));
    for (let i = 0; i < tabsBtns.length; i++) {
      if (e.target === tabsBtns[i]) {
        tabsBtns[i].classList.add('active');
        displayCurrentTab(i);
        break;
      }
    }
  }
});
