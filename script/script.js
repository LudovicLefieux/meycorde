/*---------- FUNCTIONS -----------*/

// Gère l'interpolation d'une icône ouvert et une icône fermée
function toggleButton(button, icon, closeIcon) {
  if (button.classList.contains("js-active")) {
    closeIcon.classList.add("js-active");
    icon.classList.remove("js-active");
  } else {
    icon.classList.add("js-active");
    closeIcon.classList.remove("js-active");
  }
}

// Fait apparaître un sous-menu lorsqu'on clique sur un élément de menu complexe
function displayAccordionMenu(item) {
  this.classList.toggle("js-active");

  // Change le "+" en "-" et inversement
  /*const plus = this.getElementsByClassName("plus")[0];

  if (this.classList.contains("js-active")) {
    plus.innerHTML = "-";
  } else {
    plus.innerHTML = "+";
  }*/

  // Modifie le maxHeight pour faire apparaître le sous-menu
  const panel = item.nextElementSibling;

  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

// Fait apparaître un panel au clique sur un élément du submenu et le ferme si l'on clique ailleurs
function toggleUserNavPanels(item) {
  const darkOverlay = document.getElementById("darkOverlay");
  const body = document.getElementsByTagName("body")[0];
  let panel = item.nextElementSibling;
  const activeElements = document.querySelectorAll(
    ".user-navigation > .js-active, .panel.js-active"
  );

  if (activeElements.length > 0) {
    // Retire la classe js-active de tous les éléments du menu
    for (const element of activeElements) {
      element.classList.remove("js-active");
    }
    darkOverlay.classList.remove("js-active");
  }

  // Si l'élément qui suit contient la classe .panel
  if (panel.classList.contains("panel")) {
    // Ajoute la classe .js-active à l'élément et au panel associé
    item.classList.add("js-active");
    panel.classList.add("js-active");

    // Animation de dropdown
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }

    // Bloque le scroll pendant que le panel est ouvert
    body.style.overflow = "hidden";

    // Gestion de l'interpolation de l'icône du menu burger
    const burgerMenu = document.getElementById("burgerMenu");
    const burgerMenuIcon = document.querySelector(".burger-menu__icon");
    const closeIcon = document.querySelector(".close");

    toggleButton(burgerMenu, burgerMenuIcon, closeIcon);

    // Affichage de l'overlay sombre sauf pour burger-menu et account
    if (
      item.classList.contains("burger-menu") ||
      item.classList.contains("account")
    ) {
      darkOverlay.classList.remove("js-active");
    } else {
      darkOverlay.classList.add("js-active");
    }

    if (panel.classList.contains("js-active")) {
      // Ferme le panel si l'on clique ailleurs
      /*darkOverlay.onclick = (event) => {
        for (const element of activeElements) {
          element.classList.remove("js-active");
        }
        panel.classList.remove("js-active");
        darkOverlay.classList.remove("js-active");
        body.style.overflow = "auto";
      };*/

      window.onclick = function (event) {
        if (event.target != darkOverlay) {
          for (const element of activeElements) {
            element.classList.remove("js-active");
          }
          darkOverlay.classList.remove("js-active");
          body.style.overflow = "auto";
        }
      };
    }
  }
}

/*---------- TOGGLE PANELS OF USER NAV -----------*/

const userNavItems = document.querySelectorAll(".user-navigation > a");

for (const item of userNavItems) {
  item.addEventListener("click", (event) => {
    toggleUserNavPanels(item);
  });
}

/*---------- TOGGLE SUBMENU OF MOBILE NAV -----------*/

const menuItems = document.querySelectorAll(
  ".main-menu .menu-item-has-children > a"
);

for (const item of menuItems) {
  item.addEventListener("click", (event) => {
    displayAccordionMenu(item);
  });
}

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
