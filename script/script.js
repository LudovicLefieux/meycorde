/*---------- FUNCTIONS -----------*/

// Fait apparaître une modal au clique sur un composant et la ferme si l'on clique sur le cache
function toggleModal(items) {
  for (const item of items) {
    item.addEventListener("click", function () {
      this.classList.toggle("active");

      const modal = this.nextElementSibling;
      const cache = document.getElementById("cache");

      modal.classList.toggle("hidden");
      cache.classList.toggle("hidden");

      cache.addEventListener("click", function (e) {
        if (e.target == cache) {
          cache.classList.add("hidden");
          modal.classList.add("hidden");
        }
      });
    });
  }
}

// Fait apparaître un sous-menu lorsqu'on clique sur un élément de menu complexe
function displayAccordionMenu(items) {
  for (const item of items) {
    item.addEventListener("click", function () {
      this.classList.toggle("active");

      // Change le "+" en "-" et inversement
      const plus = this.getElementsByClassName("plus")[0];

      if (this.classList.contains("active")) {
        plus.innerHTML = "-";
      } else {
        plus.innerHTML = "+";
      }

      // Modifie le maxHeight pour faire apparaître le sous-menu
      const panel = this.nextElementSibling;

      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
}

/*---------- TOGGLE MODALS OF SUBMENU -----------*/

const submenuItems = document.querySelectorAll(".submenu > a");

toggleModal(submenuItems);

/*---------- TOGGLE CLOSE BUTTON OF BURGER MENU -----------*/

let burgerMenu = document.getElementById("burgerMenu");
const burgerMenuIcon = document.querySelector("#burgerMenu svg:first-child");
const closeIcon = document.querySelector("#burgerMenu svg:last-child");

burgerMenu.addEventListener("click", function () {
  if (burgerMenu.classList.contains("active")) {
    closeIcon.classList.remove("hidden");
    burgerMenuIcon.classList.add("hidden");
  } else {
    burgerMenuIcon.classList.remove("hidden");
    closeIcon.classList.add("hidden");
  }
});

/*---------- TOGGLE SUBMENU OF MOBILE NAV -----------*/

const menuItems = document.querySelectorAll(".mobile-nav__item--complex > a");

displayAccordionMenu(menuItems);
