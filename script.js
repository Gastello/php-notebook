// accordion-menu
let accordionMenu = document.querySelector(".accordion-menu");
let accordionMenuItems = accordionMenu.querySelectorAll("li");

accordionMenuItems.forEach((item) => {
  item.querySelector(".accordion-menu__item").onclick = function (e) {
    item.querySelector(".accordion-menu__item-text").classList.toggle('hidden');
  };
});
