function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function showDivisionBasedOnResolution() {
  const navbar1 = document.getElementById("mySidebar1");
  const navbar2 = document.getElementById("mySidebar");
  const mainButton = document.getElementById("main1");

  const screenWidth = window.innerWidth;

  if (screenWidth <= 800) {
    // Adjust the resolution breakpoint as needed
    navbar1.style.display = "none";
    navbar2.style.display = "block";
    mainButton.style.display = "block"; // Show the button when navbar2 is visible
  } else {
    navbar1.style.display = "block";
    navbar2.style.display = "none";
    mainButton.style.display = "none"; // Hide the button when navbar1 is visible
  }
}

// Call the function initially to set the initial visibility based on screen resolution
showDivisionBasedOnResolution();

// Add an event listener to recheck and update the visibility when the window is resized
window.addEventListener("resize", showDivisionBasedOnResolution);
