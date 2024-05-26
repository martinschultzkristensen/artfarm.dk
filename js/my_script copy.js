document.addEventListener("DOMContentLoaded", function() {
  const coin = document.getElementById("coin8bit");
  const blingContainer = document.getElementById("bling");
  const arcade = document.getElementById("arcade");
  const coinInsertThreshold = 0.65; // Proportion of the container height where the coin should disappear

  function updateCoinPosition() {
    const viewportHeight = window.innerHeight;
    const scrollPosition = window.scrollY + (-0.4 * viewportHeight);

    // Get the arcade container dimensions
    const arcadeRect = arcade.getBoundingClientRect();
    const containerHeight = arcadeRect.height;
    const containerTop = arcadeRect.top + window.scrollY;

    // Calculate the new position of the coin
    const newPosition = -50 + scrollPosition;
    coin.style.left = newPosition + "px";

    // Calculate the threshold dynamically based on container height
    const threshold = containerTop + (coinInsertThreshold * containerHeight);

    if (scrollPosition > threshold) {
      coin.style.opacity = 0;
      blingContainer.classList.add("bling-visible");
    } else {
      coin.style.opacity = 1; // Set opacity to 1 (fully visible)
      blingContainer.classList.remove("bling-visible");
    }
  }

  window.addEventListener("scroll", updateCoinPosition);
  coin.style.left = "0px"; // Set the initial position of the coin
});
