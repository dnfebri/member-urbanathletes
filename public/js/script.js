const btnOpen = document.querySelector("button.btn-menu");
const menu = document.querySelector(".menu-mobile");
const btnClose = document.querySelector(".btn-close-menu");
if (menu) {
  btnOpen.addEventListener("click", () => {
    menu.classList.toggle("right-0");
    menu.classList.toggle("-right-full");
    menu.classList.remove("hidden");
  });
  
  btnClose.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
}