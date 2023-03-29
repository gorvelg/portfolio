/*===== Resize Navbar on Scroll =====*/
const navbar = document.querySelector(".navbar");
// when the scroll is higher than 20 viewport height, add the sticky classs to the tag with a class navbar
console.log(navbar);
window.onscroll = () => {
  this.scrollY > 20
    ? navbar.classList.add("sticky")
    : navbar.classList.remove("sticky");
};

// Je sélectionne et je stocke
// l'icône burger
const icone = document.querySelector(".navbar-mobile i");
console.log(icone);
// la DIV modal
const modal = document.querySelector(".modal");
console.log(modal);

icone.addEventListener("click", function () {
  console.log("icone cliquée");
  modal.classList.toggle("change-modal");
  icone.classList.toggle("fa-times");
});
