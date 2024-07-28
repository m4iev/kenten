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