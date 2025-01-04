const navbarElements = document.querySelectorAll("#navbar li");
const navbar = document.querySelector("#navbar");

let currentUrl = window.location.pathname;
currentUrl = currentUrl.split("/");

const page = currentUrl[2];

switch (page) {
  case "entreprise":
    changeHeaderColor(1);
    break;
  case "veille":
    changeHeaderColor(2);
    break;
  case "travaux":
    changeHeaderColor(3);
    break;
  case "projets":
    changeHeaderColor(4);
    break;
  case "competences":
    changeHeaderColor(5);
    break;
  case "synthese":
    changeHeaderColor(6);
    break;

  default:
    changeHeaderColor(0);
    break;
}


function changeHeaderColor(navElement) {
  navbarElements[navElement].style.color = "#579CE0";
}

const openNavbarButton = document.querySelector("#open-navbar");

openNavbarButton.addEventListener("click", () => changeNavBarStatus("open"));

function changeNavBarStatus(action) {
  if (action === "open") {
    navbar.classList.add("d-grid");
    navbar.classList.remove("d-none");
  }
}
