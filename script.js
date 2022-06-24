// Just an animation for the navbar animation

const navbar = document.querySelector(".menu_bar");

window.addEventListener('scroll', () => {
  if (window.scrollY > window.screen.height * 2 / 3 - 200) {
    navbar.classList.add('nav_bar_white');
  } else {
    navbar.classList.remove('nav_bar_white');
  }
})

// End animation for the navbar animation
// Start ScrollTop btn

var scrollBtn = document.createElement('div');
scrollBtn.classList.add('scrollbtn');
scrollBtn.innerHTML='<h2 style="font-weight:bold";>T</h2>';
document.appendChild(scrollBtn);


// End ScrollTop btn