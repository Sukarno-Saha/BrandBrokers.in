document.addEventListener("DOMContentLoaded", () => {
  const navItems = document.querySelectorAll(".nav-item a");

  // Function to remove 'active' class from all nav items
  function removeActiveClass() {
    navItems.forEach((link) => {
      link.parentElement.classList.remove("active");
    });
  }

  // Function to set the 'active' class on the clicked nav item
  function setActiveClass(event) {
    removeActiveClass();
    event.currentTarget.parentElement.classList.add("active");
  }

  // Add click event listeners to all nav items
  navItems.forEach((link) => {
    link.addEventListener("click", setActiveClass);
  });

  // Set the initial active state
  const hash = window.location.hash || "#home"; // Default to #home
  const initialActiveLink = document.querySelector(
    `.navlink a[href="${hash}"]`
  );

  if (initialActiveLink) {
    initialActiveLink.parentElement.classList.add("active");
  }
});
