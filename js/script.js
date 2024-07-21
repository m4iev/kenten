// Mengatur Sidebar
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let dashboard = document.querySelector(".dashboard");

toggle.addEventListener("click", toggleSidebar);

function toggleSidebar() {
  navigation.classList.toggle("active");
  dashboard.classList.toggle("active");
};

// Mengatur isi form sesuai dropdown
const lombaDropdown = document.getElementById("lomba");
const websiteContent = document.querySelector(".content-website");
const gameContent = document.querySelector(".content-game");
const animationContent = document.querySelector(".content-animasi");

lombaDropdown.addEventListener("change", ubahContentForm);

function ubahContentForm() {
  const selectedLomba = this.value;

  if (selectedLomba === "website") {
    websiteContent.style.display = "block";
    gameContent.style.display = "none";
    animationContent.style.display = "none";
  } else if (selectedLomba === "game") {
    websiteContent.style.display = "none";
    gameContent.style.display = "block";
    animationContent.style.display = "none";
  } else if (selectedLomba === "animasi") {
    websiteContent.style.display = "none";
    gameContent.style.display = "none";
    animationContent.style.display = "block";
  } else {
    websiteContent.style.display = "none";
    gameContent.style.display = "none";
    animationContent.style.display = "none";
  }
}