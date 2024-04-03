/*
 * my_script.js
 * (c) 2024 Martin Schultz Kristensen
 * Released under the MIT license
 */

document.getElementById("Pil").addEventListener("animationend", function () {
  console.log("Animationen af Pil er fuldført!"); // Tilføjet console.log()
  showFontPinkLetters();
});

function showFontPinkLetters() {
  var letters = document.querySelectorAll(".letter");
  letters.forEach(function (letter, index) {
    setTimeout(function () {
      letter.classList.add("show");
    }, (letters.length - index) * 300); // Juster forsinkelsen efter behov
  });
}
