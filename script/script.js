/*---------- FUNCTIONS -----------*/

// Fait apparaître un sous-menu lorsqu'on clique sur un élément de menu complexe
function displayAccordionMenu(items) {
  for (const item of items) {
    item.addEventListener("click", function () {
      this.classList.toggle("js-active");

      // Change le "+" en "-" et inversement
      const plus = this.getElementsByClassName("plus")[0];

      if (this.classList.contains("js-active")) {
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

// Fait apparaître un panel au clique sur un élément du submenu et le ferme si l'on clique ailleurs
function toggleUserNavPanels(items) {
  for (const item of items) {
    const darkOverlay = document.getElementById("darkOverlay");
    const body = document.getElementsByTagName("body")[0];

    item.addEventListener("click", function (event) {
      let panel = this.nextElementSibling;
      const activeElements = document.querySelectorAll(
        ".user-navigation > .js-active, .panel.js-active"
      );
      console.log(activeElements);

      // Retire la classe js-active de tous les éléments du menu
      for (const element of activeElements) {
        element.classList.remove("js-active");
      }

      // Si l'élément qui suit contient la classe .panel
      if (panel.classList.contains("panel")) {
        // Ajoute la classe .js-active au lien et au panel associé
        this.classList.add("js-active");
        panel.classList.add("js-active");

        // Bloque le scroll pendant que le panel est ouvert
        body.style.overflow = "hidden";

        // Gestion de l'interpolation de l'icône du menu burger
        if (
          this.classList.contains("burger-menu") ||
          this.classList.contains("account")
        ) {
          darkOverlay.classList.remove("js-active");
        } else {
          darkOverlay.classList.toggle("js-active");
        }

        // Ferme le panel si l'on clique ailleurs
        window.onclick = function (event) {
          if (event.target.closest(panel[0])) {
            return;
          } else if (item.classList.contains("js-active")) {
            activeElements.classList.remove("js-active");
            body.style.overflow = "auto";
          }
        };
      }
    });
  }
}

/*---------- TOGGLE PANELS OF USER NAV -----------*/

const userNavItems = document.querySelectorAll(".user-navigation > a");

toggleUserNavPanels(userNavItems);

/*---------- TOGGLE CLOSE BUTTON OF BURGER MENU -----------*/

let burgerMenu = document.getElementById("burgerMenu");
const burgerMenuIcon = document.querySelector(".burger-menu__icon");
const closeIcon = document.querySelector(".close");

burgerMenu.addEventListener("click", function () {
  if (burgerMenu.classList.contains("js-active")) {
    closeIcon.classList.add("js-active");
    burgerMenuIcon.classList.remove("js-active");
  } else {
    burgerMenuIcon.classList.add("js-active");
    closeIcon.classList.remove("js-active");
  }
});

/*---------- TOGGLE SUBMENU OF MOBILE NAV -----------*/

const menuItems = document.querySelectorAll(".main-menu__item--complex > a");

displayAccordionMenu(menuItems);

/*---------- CHANGE SVG COLOR ON HOVER -----------*/

const links = document.querySelectorAll("a");

for (const link of links) {
  if (link.querySelectorAll("svg") !== null) {
    const svg = link.getElementsByTagName("path");

    link.addEventListener("mouseover", function () {
      for (const path of svg) {
        if (path.hasAttribute("fill")) {
          path.setAttribute("fill", "#0aac8c");
        } else {
          path.setAttribute("stroke", "#0aac8c");
        }
      }
    });

    link.parentNode.addEventListener("mouseout", function () {
      for (const path of svg) {
        if (path.hasAttribute("fill")) {
          path.setAttribute("fill", "#1e1e1e");
        } else {
          path.setAttribute("stroke", "#1e1e1e");
        }
      }
    });
  }
}
