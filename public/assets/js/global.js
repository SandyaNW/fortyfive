// navbar
const navbar = document.querySelector("nav"); // Menggunakan querySelector untuk mendapatkan elemen pertama dengan tagname "nav"
window.addEventListener("scroll", function () {
  console.log(window.scrollY); // Menggunakan window.scrollY, bukan window.scrolly
  if (this.window.scrollY > 1) {
    navbar.classList.replace("bg-transparent", "nav-color");
    navbar.classList.remove("mx-5");
  } else if (this.window.scrollY <= 0) {
    navbar.classList.replace("nav-color", "bg-transparent");
    navbar.classList.add("mx-5");
  }
});
