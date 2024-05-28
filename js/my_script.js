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


// Script to handle coin-scroll animation:
document.addEventListener("DOMContentLoaded", function() {
  const coin = document.getElementById("coin8bit");
  const blingContainer = document.getElementById("bling");
  const arcade = document.getElementById("arcade");

  // Funktion til at justere møntens position baseret på scrolling
  function updateCoinPosition(scrollY) {
    const viewportHeight = window.innerHeight;
    const newPosition = -50 + scrollY + (-0.4 * viewportHeight);
    coin.style.left = newPosition + "px";
  }

  // Konfiguration for Intersection Observer
  const options = {
    root: null, // observere i forhold til viewporten
    rootMargin: "0px",
    threshold: [0, 1.0] // triggers ved 0% og 100% synlighed
  };

  // Funktion der håndterer visibilitetsændringer
  function handleIntersect(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const scrollPosition = window.scrollY;
        const arcadeRect = arcade.getBoundingClientRect();
        const containerHeight = arcadeRect.height;
        const containerTop = arcadeRect.top + window.scrollY;
        const coinInsertThreshold = -0.0; // Proportion of the container height where the coin should disappear

        // Calculate the threshold dynamically based on container height
        const threshold = containerTop + (coinInsertThreshold * containerHeight);

        if (scrollPosition > threshold) {
          coin.style.opacity = 0;
          blingContainer.classList.add("bling-visible");
        } else {
          coin.style.opacity = 1;
          blingContainer.classList.remove("bling-visible");
        }
      }
    });
  }

  // Opret en ny Intersection Observer
  const observer = new IntersectionObserver(handleIntersect, options);

  // Observer arcade elementet
  observer.observe(arcade);

  // Juster møntens position ved scrolling
  window.addEventListener("scroll", function() {
    updateCoinPosition(window.scrollY);
  });

  // Initialiser møntens position
  coin.style.left = "0px";
});






document.addEventListener("DOMContentLoaded", function() {
  var hiddenText = document.querySelector(".item-appear");

  window.addEventListener("scroll", function() {
    var scrollPosition = window.scrollY;
    var triggerPosition = 800;

    if (scrollPosition > triggerPosition) {
      hiddenText.classList.add("visible");
    } else {
      hiddenText.classList.remove("visible");
    }
  });
});
