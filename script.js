
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