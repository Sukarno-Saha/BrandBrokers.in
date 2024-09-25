const icon = document.querySelector(".toggle");
const navLink = document.querySelector(".navlink");
const navLinks = document.querySelectorAll(".navlink a"); // Select all anchor tags inside the nav links

// Toggle the mobile menu when the icon is clicked
icon.addEventListener("click", () => {
  navLink.classList.toggle("mobilemenu");
});

// Close the mobile menu when a nav link is clicked
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    navLink.classList.remove("mobilemenu");
    document.getElementById("checkbox").checked = false; // Uncheck the checkbox to close the menu
  });
});
