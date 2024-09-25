/*==================== MENU SHOW Y HIDDEN ====================*/
const navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close");

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
    navToggle.addEventListener("click", () => {
        navMenu.classList.add("show-menu");
    });
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
    navClose.addEventListener("click", () => {
        navMenu.classList.remove("show-menu");
    });
}

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll(".nav_link");

function linkAction() {
    const navMenu = document.getElementById("nav-menu");
    // when we click on each nav_link, we remove the show menu class
    navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*==================== ACCORDION SKILLS ====================*/
const skillsContent = document.getElementsByClassName("skills_content"),
    skillsHeader = document.querySelectorAll(".skills_header");

function toggleSkills() {
    let itemClass = this.parentNode.className;

    for (i = 0; i < skillsContent.length; i++) {
        skillsContent[i].className = "skills_content skills_close";
    }

    if (itemClass === "skills_content skills_close") {
        this.parentNode.className = "skills_content skills_open";
    }
}

skillsHeader.forEach((el) => {
    el.addEventListener("click", toggleSkills);
});

/*==================== parcours TABS ====================*/
const tabs = document.querySelectorAll("[data-target]"),
    tabContents = document.querySelectorAll("[data-content]");

tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        const target = document.querySelector(tab.dataset.target);

        tabContents.forEach((tabContent) => {
            tabContent.classList.remove("parcours_active");
        });
        target.classList.add("parcours_active");

        tabs.forEach((tab) => {
            tab.classList.remove("parcours_active");
        });
        tab.classList.add("parcours_active");
    });
});

/*==================== SERVICES MODAL ====================*/
const modalViews = document.querySelectorAll(".services_modal"),
    modalBtns = document.querySelectorAll(".services_button"),
    modalCloses = document.querySelectorAll(".services_modal-close");

let modal = function (modalClick) {
    modalViews[modalClick].classList.add("active-modal");
};

modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener("click", () => {
        modal(i);
    });
});

modalCloses.forEach((modalClose) => {
    modalClose.addEventListener("click", () => {
        modalViews.forEach((modalView) => {
            modalView.classList.remove("active-modal");
        });
    });
});

/*==================== veille SWIPER  ====================*/
let swiperveille = new Swiper(".project_container", {
    cssMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

/*==================== TESTIMONIAL ====================*/
let swiperTestimonial = new Swiper(".testimonial_container", {
    loop: true,
    grabCursor: true,
    spaceBetween: 48,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    breakpoints: {
        568: {
            slidePerView: 2,
        },
    },
});

/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader() {
    const nav = document.getElementById("header");
    if (this.scrollY >= 80) nav.classList.add("scroll-header");
    else nav.classList.remove("scroll-header");
}

window.addEventListener("scroll", scrollHeader);


/*==================== DARK LIGHT THEME ====================*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "uil-sun";

const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

const getCurrentTheme = () =>
    document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
    document.body.classList.contains(iconTheme) ? "uil-moon" : "uil-sun";

if (selectedTheme) {
    document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
        darkTheme
    );
    themeButton.classList[selectedIcon === "uil-moon" ? "add" : "remove"](
        iconTheme
    );
}

//activate / deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
    //add or remove dark / icon theme
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme);

    //we save the theme and the current icon so that the user choose
    localStorage.setItem("selected-theme", getCurrentTheme());
    localStorage.setItem("selected-icon", getCurrentIcon());
});


const navLinks = document.getElementsByClassName("nav_link");
const queryString = window.location.search; // Retourne le param de l'url

if(queryString === "?accueil"){
    navLinks[0].classList.add('active-link');
}else if(queryString === "?entreprise"){
    navLinks[1].classList.add('active-link');
}else if(queryString === "?veille"){
    navLinks[2].classList.add('active-link');
}else if(queryString === "?travaux" || queryString === "?integration-statique-apple"|| queryString === "?calculatrice-js"){
    navLinks[3].classList.add('active-link');
}else if(queryString === "?integration-statique-apple"){
    navLinks[3].classList.add('active-link');
}else if(queryString === "?projets"){
    navLinks[4].classList.add('active-link');
}else if(queryString === "?competences"){
    navLinks[5].classList.add('active-link');
}else if(queryString === "?repertoire"){
    navLinks[6].classList.add('active-link');
}else{
    navLinks[0].classList.add('active-link');
}

