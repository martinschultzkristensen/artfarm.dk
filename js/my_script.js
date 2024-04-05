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
    var delay = index === letters.length - 11 ? 150 : 110; //delay for letter "O". nr 11 in the class letters
    setTimeout(function () {
      letter.classList.add("show");
    }, (letters.length - index) * delay); // Juster forsinkelsen efter behov
  });
}
