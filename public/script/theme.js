const themeButton = document.querySelector("#theme-button")

themeButton.addEventListener("click", ()=>{

  if(themeButton.classList.contains("uil-moon")){
    themeButton.classList.remove("uil-moon")
    themeButton.classList.add("uil-sun")
    changeThemeColor("dark");
  }else{
    themeButton.classList.remove("uil-sun")
    themeButton.classList.add("uil-moon")
    changeThemeColor("light");
  }
})

const root = document.documentElement;

function changeThemeColor(theme) {
  if (theme === "dark") {
    root.style.setProperty('--background-color', "#161F27")
    root.style.setProperty('--primary-text-color', "white");
    root.style.setProperty('--paragraph-color', "#BABFC4");
    root.style.setProperty('--footer-bgcolor', "#273139");
    root.style.setProperty('--scrollbar', "#0f1519");
    root.style.setProperty('--scrollbar-thumb', "#223039");
    themeButton.classList.remove("uil-moon")
    themeButton.classList.add("uil-sun")
    saveTheme(theme)
  }else if(theme === "light"){
    root.style.setProperty('--background-color', "white")
    root.style.setProperty('--primary-text-color', "#212529");
    root.style.setProperty('--paragraph-color', "#6A737C");
    root.style.setProperty('--footer-bgcolor', "#e2e6e9");
    root.style.setProperty('--scrollbar', "#e2e6e9");
    root.style.setProperty('--scrollbar-thumb', "#c6ccd2");
    themeButton.classList.remove("uil-sun")
    themeButton.classList.add("uil-moon")
    saveTheme(theme)
  }
}

function saveTheme(theme){
  if(theme === "dark"){
    document.cookie = "theme=dark"
    
  }else if(theme === "light"){
    document.cookie = "theme=light"
  }
}

function getSavedTheme(){
  
  const cookies = document.cookie.split(";")
  let theme = null

  cookies.forEach(cookie => {
    let splittedCookie = cookie.split("=")
    if(splittedCookie[0] === "theme"){
      theme = splittedCookie[1]
    }
  });

  if(theme && theme === 'dark'){
    
    changeThemeColor(theme)
    // body.classList.remove("no-animation");
  }
}

getSavedTheme()

const body = document.querySelector('body')


// document.addEventListener("DOMContentLoaded", () => {
//  body.classList.remove("no-animation");
// });
