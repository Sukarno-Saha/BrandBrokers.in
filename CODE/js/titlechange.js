// Store the original title
let originalTitle = document.title;

// Detect when the user leaves the tab
document.addEventListener("visibilitychange", function () {
  if (document.hidden) {
    document.title = " Gone Already :("; // Message when tab is inactive
  } else {
    document.title = originalTitle; // Restore original title when user comes back
  }
});
