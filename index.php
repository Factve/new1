<?php

// Get the text of the button
$buttonText = "Read More...";

// Set the button's style
$buttonStyle = "background-color: red; color: white; font-size: 16px; padding: 10px; border-radius: 5px;";

// Create the button
$button = "<button onclick='toggleDiv()' style='$buttonStyle'>$buttonText</button>";

// Get the ID of the DIV to toggle
$divId = "myDiv";

// Create the DIV
$div = "<div id='$divId' style='display: none;'>This is the content of the hidden DIV.</div>";

// Output the button and the DIV
echo $button . $div;

// Function to toggle the visibility of the DIV
function toggleDiv() {
  $div = document.getElementById("myDiv");
  if (div.style.display == "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}

?>
