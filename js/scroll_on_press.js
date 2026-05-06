document.addEventListener("DOMContentLoaded", function () {
  const sections = [
    "#frikadelle",
    "#danceomatic",
    "#censorship",
    "#terminus",
    "#akyrlarium",
    "#twcultweek",
  ];
  let currentIndex = 0;

  document
    .getElementById("scroll-btn")
    .addEventListener("click", function (event) {
      event.preventDefault();
      currentIndex = (currentIndex + 1) % sections.length;
      document.querySelector(sections[currentIndex]).scrollIntoView({
        behavior: "smooth",
      });
    });
});
