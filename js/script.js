//toggle class activ
const navbarNav = document.querySelector(".navbar-nav");
// ketika menu show-up
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};
