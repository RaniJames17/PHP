<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $color = $_POST["color"];

  // Validate if all fields are filled
  if (empty($name) || empty($age) || empty($color)) {
    echo "Error: Please fill out required fields.";
  } else {
    // Display submitted data
    echo "<h2>Submitted Details</h2>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Favorite Color: " . $color . "<br>";
  }
}
?>
