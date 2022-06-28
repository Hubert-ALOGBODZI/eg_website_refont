gsap.registerPlugin(ScrollTrigger)
// **********************************************************************
window.onload = ()=>{
  gsap.from(".menu_bar",{
    duration:1, y:'-100%',ease:'linear'
  })

  gsap.from('.homepage_banner',{
    opacity:0, duration:1, ease:'power2-on'
  })
}

var stagger_el = document.querySelectorAll('.stagger_el');

const TL = gsap.timeline({
  scrollTrigger:{
    trigger: stagger_el,
    toggleActions:"restart pause restart pause"
  }
});

TL.staggerFrom(stagger_el,1,{
  duration:2,
  y:'100px',
  opacity:0,
}, 0.4,'-=1')

var stagger_el2 = document.querySelectorAll('.stagger_el2');

const TL2 = gsap.timeline({
  scrollTrigger:{
    trigger: stagger_el2,
    toggleActions:"restart pause restart pause"
  }
});

TL2.staggerFrom(stagger_el2,1,{
  duration:2,
  y:'100px',
  opacity:0,
}, 0.4,'-=1')


var stagger_el3 = document.querySelectorAll('.stagger_el3');

const TL3 = gsap.timeline({
  scrollTrigger:{
    trigger: stagger_el3,
    toggleActions:"restart pause reverse pause",
    start: "top 100%",
    end: "top -100%",
    scrub:1
  }
});

TL3.staggerFrom(stagger_el3,1,{
  duration:5,
  y:'100px',
  opacity:0,
}, 0.4,'-=10')


var stagger_el4 = document.querySelectorAll('.stagger_el4');

const TL4 = gsap.timeline({
  scrollTrigger:{
    trigger: stagger_el4,
    toggleActions:"restart pause reverse pause",
  }
});

TL4.staggerFrom(stagger_el4,1,{
  duration:5,
  y:'100px',
  opacity:0,
}, 0.4,'-=1')


var stagger_el5 = document.querySelectorAll('.stagger_el5');

const TL5 = gsap.timeline({
  scrollTrigger:{
    trigger: stagger_el5,
    toggleActions:"restart pause reverse pause",
  }
});

TL5.staggerFrom(stagger_el5,1,{
  duration:5,
  y:'100px',
  opacity:0,
}, 0.4,'-=1')


var stagger_el6 = document.querySelectorAll('.stagger_el6');

const TL6 = gsap.timeline({
  scrollTrigger:{
    trigger: stagger_el6,
    toggleActions:"restart pause reverse pause",
  }
});

TL6.staggerFrom(stagger_el6,1,{
  duration:5,
  y:'100px',
  opacity:0,
}, 0.4,'-=1')



var stagger_el_foot = document.querySelectorAll('.stagger_el_foot');

const TLF = gsap.timeline({
  scrollTrigger:{
    trigger: stagger_el_foot,
    toggleActions:"restart pause reverse pause",
  }
});

TLF.staggerFrom(stagger_el_foot,1,{
  duration:5,
  y:'100px',
  opacity:0,
}, 0.4,'-=1')


// **********************************************************************

// Just an animation for the navbar animation

const navbar = document.querySelector(".menu_bar");

window.addEventListener('scroll', () => {
  if (window.scrollY > window.screen.height / 3) {
    navbar.classList.add('nav_bar_white');
  } else {
    navbar.classList.remove('nav_bar_white');
  }
});

// Just an animation for the navbar animation

// Start ScrollTop btn

const scrollBtn = document.querySelector("#myBtn");

window.onscroll = function () {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    scrollBtn.classList.add('myBtn_none');
  } else {
    scrollBtn.classList.remove('myBtn_none');
  }
}

scrollBtn.addEventListener('click', () => {
  window.scrollTo(0, 0);
});
// End ScrollTop btn

// Img slide script



// **** recuperation des images****
let img_slider = document.getElementsByClassName('img_slider');

let etape = 0;

// ici se trouve le nombre d'image
let nbr_img = img_slider.length;

//  recupertion des action faitent par les boutons next et past
let past = document.querySelector('.past');
let next = document.querySelector('.next');


// on va créer une fonction enlever image active ,qui va permetre d'enlever la classe active sur toule les image
function enleverActiveImages() {
  for (let i = 0; i < nbr_img; i++) {
    img_slider[i].classList.remove('active');
  }
}
next.addEventListener('click', function () {
  etape++;
  if (etape >= nbr_img) {
    etape = 0;
  }
  enleverActiveImages();
  img_slider[etape].classList.add('active');
});
past.addEventListener('click', function () {
  etape--;
  if (etape < 0) {
    etape = nbr_img - 1;
  }
  enleverActiveImages();
  img_slider[etape].classList.add('active');
});

// on va utiliser la function setInterval pour faire defiler les image automatquement 
setInterval(function () {
  etape++;
  if (etape >= nbr_img) {
    etape = 0;
  }
  enleverActiveImages();
  img_slider[etape].classList.add('active');
}, 3000);


// End Img slide script

// End animation for the navbar animation