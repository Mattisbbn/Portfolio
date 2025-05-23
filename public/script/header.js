const navbarElements = document.querySelectorAll("#navbar li");
const navbar = document.querySelector("#navbar");

let currentUrl = window.location.pathname;
currentUrl = currentUrl.split("/");

const page = currentUrl[1];

switch (page) {
  case "":
    changeHeaderColor(0);
    break;
  case "veille":
    changeHeaderColor(1);
    break;
  case "realisations":
    changeHeaderColor(2);
    break;
  case "competences":
    changeHeaderColor(3);
    break;
  case "synthese":
    changeHeaderColor(4);
    break;
}

function changeHeaderColor(navElement) {
  console.log(navElement);
  navbarElements[navElement].classList.add("selected");
}

const openNavbarButton = document.querySelector("#open-navbar");

openNavbarButton.addEventListener("click", () => changeNavBarStatus());

function changeNavBarStatus() {
 
  if (checkNavbarStatus() === "closed") {
    navbar.classList.add("d-grid");
    navbar.classList.remove("d-none");
  }else{
    navbar.classList.remove("d-grid");
    navbar.classList.add("d-none");
  }
}

function checkNavbarStatus(){
  if(openNavbarButton.classList.contains('d-none')){
    return 'closed'
  }else{
    return 'closed'
  }
}