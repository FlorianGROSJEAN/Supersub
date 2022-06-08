
var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}


// Animation pour faire apparaitre le contenu 
const sr = ScrollReveal ({
  delay: 200,
  origin: 'top',
  distance: '40px',
  duration: '1000'
})

// sr.reveal('.main');
// sr.reveal('.container');
sr.reveal('.solo_content_card', {delay: 100, reset: true});
sr.reveal('.card_content', {delay: 100, reset: true});

