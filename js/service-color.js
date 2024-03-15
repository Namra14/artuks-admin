function changeColor() {
    var container = document.getElementById("colorContainer");
    var randomColor = Math.floor(Math.random()*16777215).toString(16); // Generate a random hexadecimal color
    container.style.backgroundColor = "#" + randomColor;
  }
  
  // Change the background color every 2 seconds (2000 milliseconds)
  setInterval(changeColor, 2000);
  
  // Call changeColor() once at the beginning to start the color change immediately
  changeColor();
  