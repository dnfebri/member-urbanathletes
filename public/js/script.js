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

// Close Toggle Dropdown click outside
const btnDropdown = document.getElementById('btn-dropdown');
let dropdownMenu = document.getElementById('dropdown-menu');
if (dropdownMenu) {
  document.addEventListener("click", dropdown)
  function dropdown(e){
    if (e.target === btnDropdown) {
      dropdownMenu.classList.toggle("max-h-0");
      dropdownMenu.classList.toggle("max-h-max");
    } else {
      dropdownMenu.classList.add("max-h-0");
      dropdownMenu.classList.remove("max-h-max"); 
    } 
  } 
}
