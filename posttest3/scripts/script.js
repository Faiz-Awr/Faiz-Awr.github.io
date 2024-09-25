const menuIcon = document.getElementById("menu-icon");
const menuList = document.getElementById("menu-list");
const tentangSaya = document.getElementById("tentang-saya");

menuIcon.addEventListener("click", () => {
  menuList.classList.toggle("hidden")
})

tentangSaya.addEventListener("click",() => {
  alert("Menampilkan tentang saya")
})

let darkmode = localStorage.getItem('darkmode')
const themeSwitch = document.getElementById('theme-switch')

const enableDarkmode = () => {
  document.body.classList.add('darkmode')
  localStorage.setItem('darkmode', 'active')
}

const disableDarkmode = () => {
  document.body.classList.remove('darkmode')
  localStorage.setItem('darkmode', null)
}

if(darkmode === "active") enableDarkmode()

themeSwitch.addEventListener("click", () => {
  darkmode = localStorage.getItem('darkmode')
  darkmode !== "active" ? enableDarkmode() : disableDarkmode()
})




