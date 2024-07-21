document.addEventListener("DOMContentLoaded", function () {
  const sections = [
    "#matchGirl",
    "#frikadelle",
    "#danceomatic",
    "#censorship",
    "#terminus",
    "#akyrlarium",
  ];
  let currentIndex = 5;

  document
    .getElementById("scroll-btn")
    .addEventListener("click", function (event) {
      event.preventDefault();
      currentIndex = (currentIndex + 1) % sections.length;
      document
        .getElementById("scroll-btn")
        .setAttribute("href", sections[currentIndex]);

      document.querySelector(sections[currentIndex]).scrollIntoView({
        behavior: "smooth",
      });
    });
});
