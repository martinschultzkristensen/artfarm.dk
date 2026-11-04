document.addEventListener("DOMContentLoaded", function () {
  const sections = [
    "#dOmKreaWeek",
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
      document.querySelector(sections[currentIndex]).scrollIntoView({
        behavior: "smooth",
      });
      currentIndex = (currentIndex + 1) % sections.length;
    });
});
