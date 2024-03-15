document.getElementById("searchInput").addEventListener("keydown", function(event) {
  if (event.key === "Enter") {
    search();
  }
});

function search() {
  var input = document.getElementById("searchInput").value.toLowerCase().replace(/\s/g, ''); // Convert to lowercase and remove spaces
  var navLinks = document.querySelectorAll(".navigation ul li a");

  // Loop through each navigation link
  for (var i = 0; i < navLinks.length; i++) {
    var navText = navLinks[i].textContent.toLowerCase().replace(/\s/g, ''); // Convert to lowercase and remove spaces
    
    // Check if the search input matches any navigation link text
    if (navText.includes(input)) {
      // Redirect to the section
      window.location.href = navLinks[i].getAttribute("href");
      return; // Stop the loop after redirecting
    }
  }
  
  // If no match found, you can handle it as per your requirement
  alert("No matching section found.");
}
