const dropbtn = document.querySelector(".dropbtn");
const mobileNav = document.querySelector(".mobileNav");

dropbtn.addEventListener("click", function () {
  console.log(mobileNav.classList);
  mobileNav.classList.toggle("show-links");
});
