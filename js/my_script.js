/*
 * my_script.js
 * (c) 2024 Martin Schultz Kristensen
 * Released under the MIT license
 */

// Wait for the SVG document to be fully loaded
document.getElementById("danceOmatic_logo").addEventListener("load", function () {
  
  // Access the SVG document
  var svgDoc = this.contentDocument;

svgDoc.getElementById("Pil").addEventListener("animationend", function () {
  console.log("Animationen af Pil er fuldført!"); // Tilføjet console.log()
  showFontPinkLetters();
  setTimeout(fadeInShadowEffect, 2200);
});
});

function showFontPinkLetters() {
  var svgDoc = document.getElementById("danceOmatic_logo").contentDocument;

  var letters = svgDoc.querySelectorAll(".letter");
  letters.forEach(function (letter, index) {
    var delay = index === letters.length - 11 ? 150 : 110; //delay for letter "O". nr 11 in the class letters
    setTimeout(function () {
      letter.classList.add("show");
    }, (letters.length - index) * delay); // Juster forsinkelsen efter behov
  });
}

  function fadeInShadowEffect() {
    var svgDoc = document.getElementById("danceOmatic_logo").contentDocument;
  var shadowElement = svgDoc.getElementById("shadeEffect");
  shadowElement.classList.add("show");
}
