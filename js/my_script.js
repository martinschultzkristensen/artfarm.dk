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
  console.log("Animationen af Pil er fuldført!"); 
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

console.log("Script loaded!");
document.addEventListener("DOMContentLoaded", function() {
  const arcadeObject = document.getElementById("arcade");

  arcadeObject.addEventListener("load", function() {
    const svgDocument = arcadeObject.contentDocument;
    const fadeAnimation = svgDocument.getElementById("fadeAnimation");

    function toggleOpacity() {
      fadeAnimation.beginElement(); // Start the animation
      setTimeout(() => {
        fadeAnimation.endElement(); // End the animation after a delay
      }, 3000); // Adjust the delay (in milliseconds) as needed
    }

    setInterval(toggleOpacity, 2000);
  });
});


// JavaScript to handle scroll animation
document.addEventListener("DOMContentLoaded", function() {
  // Get a reference to the coin.svg element
  const coin = document.getElementById("coin8bit");

  // Function to update the position of the coin based on scroll
  function updateCoinPosition() {
    // Calculate the new position based on the scroll position
    const viewportHeight = window.innerHeight;
    const scrollPosition = window.scrollY + (-0.4 * viewportHeight);
    console.log("Scroll position:", scrollPosition);
    const threshold = 485; // Adjust this value as needed
    const newPosition = -50 + scrollPosition;
    console.log("New position:", newPosition);


      // Update the left position of the coin element
    coin.style.left = newPosition + "px";
    console.log("Coin position updated");
    if (scrollPosition > threshold) {
      // If it does, set the z-index of the coin element to a value that makes it appear behind the arcade element
      coin.style.zIndex = -1;
      coin.style.opacity = 0;
    } else {
      // Otherwise, set the z-index to a value that makes it appear above the arcade element
      coin.style.zIndex = 1;
      coin.style.opacity = 100;
    }

  }

  // Add a scroll event listener to trigger the animation
  window.addEventListener("scroll", updateCoinPosition);
   // Set the initial position of the coin
   coin.style.left = "-50px"; // Adjust the initial position as needed
});


document.addEventListener("DOMContentLoaded", function() {
  var hiddenText = document.querySelector(".item-appear");

  window.addEventListener("scroll", function() {
    var scrollPosition = window.scrollY;
    var triggerPosition = 800; // Adjust as needed, this is the scroll position where the text appears

    if (scrollPosition > triggerPosition) {
      hiddenText.classList.add("visible");
    } else {
      hiddenText.classList.remove("visible");
    }
  });
});
