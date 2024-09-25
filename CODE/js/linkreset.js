
window.addEventListener("DOMContentLoaded", (event) => {
  // Function to reset URL and active states
  function resetNavbarAndUrl() {
    // Remove the fragment identifier (the part after the '#') from the URL
    if (window.location.hash) {
      window.history.replaceState(null, null, window.location.pathname);
    }

    // Reset any active/hover states in the navbar
    const links = document.querySelectorAll("nav ul li a");
    links.forEach((link) => {
      link.classList.remove("active"); // Remove active class if applied
    });
  }

  // Call the reset function
  resetNavbarAndUrl();

  // Additionally, reset the active states after navigating to an anchor
  window.addEventListener("hashchange", resetNavbarAndUrl);
});
