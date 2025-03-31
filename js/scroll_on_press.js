document.addEventListener("DOMContentLoaded", function () {
  const sections = [
    "#frikadelle",
    "#danceomatic",
    "#matchGirl",
    "#censorship",
    "#terminus",
    "#akyrlarium",
  ];
  let currentIndex = 0;

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
