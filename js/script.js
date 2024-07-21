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

toggle.onclick = function () {
  navigation.classList.toggle("active");
  dashboard.classList.toggle("active");
};

// Mengubah konten website sesuai sidebar
const linkHome = document.getElementById("home-peserta");
const linkDataTim = document.getElementById("data-tim");
const linkKegiatanLomba = document.getElementById("kegiatan-lomba");
const linkStatusKarya = document.getElementById("status-karya");
const linkGantiSandi = document.getElementById("ganti-sandi");

const linkHomeAdmin = document.getElementById("home-admin");
const linkKegiatanLombaAdmin = document.getElementById("kegiatan-lomba-admin");
const linkDataTimAdmin = document.getElementById("data-tim-admin");
const linkGantiSandiAdmin = document.getElementById("ganti-sandi-admin");

const kontenHome = document.getElementById("home");
const kontenDataTim = document.getElementById("submission-data-tim");
const kontenKegiatanLomba = document.getElementById("submission-lomba");
const kontenGantiSandi = document.getElementById("submission-sandi");

function showHomeDashboard() {
  navigation.classList.add("active");
  dashboard.classList.add("active");

  linkDataTim.classList.remove("active");
  linkStatusKarya.classList.remove("active");
  linkGantiSandi.classList.remove("active");
  linkKegiatanLomba.classList.remove("active");
  linkHome.classList.add("active");

  kontenGantiSandi.style.display = "none";
  kontenDataTim.style.display = "none";
  kontenKegiatanLomba.style.display = "none";

  kontenHome.style.display = "block";
}


function showKegiatanLomba() {
  navigation.classList.add("active");
  dashboard.classList.add("active");

  linkHome.classList.remove("active");
  linkDataTim.classList.remove("active");
  linkStatusKarya.classList.remove("active");
  linkGantiSandi.classList.remove("active");
  linkKegiatanLomba.classList.add("active");

  kontenHome.style.display = "none";
  kontenGantiSandi.style.display = "none";
  kontenDataTim.style.display = "none";

  kontenKegiatanLomba.style.display = "flex";
}

function showGantiSandi() {
  navigation.classList.add("active");
  dashboard.classList.add("active");

  linkHome.classList.remove("active");
  linkDataTim.classList.remove("active");
  linkStatusKarya.classList.remove("active");
  linkKegiatanLomba.classList.remove("active");
  linkGantiSandi.classList.add("active");

  kontenHome.style.display = "none";
  kontenKegiatanLomba.style.display = "none";
  kontenDataTim.style.display = "none";

  kontenGantiSandi.style.display = "flex";
}

function showDataTim() {
  navigation.classList.add("active");
  dashboard.classList.add("active");

  linkHome.classList.remove("active");
  linkStatusKarya.classList.remove("active");
  linkKegiatanLomba.classList.remove("active");
  linkGantiSandi.classList.remove("active");
  linkDataTim.classList.add("active");

  kontenGantiSandi.style.display = "none";
  kontenKegiatanLomba.style.display = "none";
  kontenHome.style.display = "none";

  kontenDataTim.style.display = "flex";
}

function showGantiSandiAdmin() {
  navigation.classList.add("active");
  dashboard.classList.add("active");

  linkHomeAdmin.classList.remove("active");
  linkKegiatanLombaAdmin.classList.remove("active");
  linkDataTimAdmin.classList.remove("active");
  linkGantiSandiAdmin.classList.add("active");

  kontenHome.style.display = "none";
  kontenGantiSandi.style.display = "flex";
}

function showHomeDashboardAdmin() {
  navigation.classList.add("active");
  dashboard.classList.add("active");

  linkKegiatanLombaAdmin.classList.remove("active");
  linkDataTimAdmin.classList.remove("active");
  linkGantiSandiAdmin.classList.remove("active");
  linkHomeAdmin.classList.add("active");

  kontenGantiSandi.style.display = "none";
  kontenHome.style.display = "block";
}

// Menampilkan Home Dashboard
showHomeDashboard();

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