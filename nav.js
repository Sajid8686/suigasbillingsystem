document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggleBtn");
  const menu = document.querySelector(".menu");

  toggleBtn.addEventListener("click", function () {
    menu.classList.toggle("show-menu");
  });
});
