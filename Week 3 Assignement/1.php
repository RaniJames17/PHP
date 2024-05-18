<?php
// Set the exchange rate
const exchange_rate = 0.85;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the input value
  $usd_amount = $_POST["usd_amount"];

  // Validate the input value
  if (is_numeric($usd_amount) && $usd_amount > 0) {
    // Convert the amount to EUR
    $eur_amount = $usd_amount * exchange_rate;

    // Display the converted amount
    $output = "<p> $usd_amount USD is equal to $eur_amount EUR</p>";
  } else {
    $output = "<p>Invalid input. Please enter a positive number.</p>";
  }
}
?>

<!-- Create the form -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="usd_amount">Enter amount in USD:</label>
  <input type="number" id="usd_amount" name="usd_amount" required>
  <input type="submit" value="Convert to EUR">
</form>

<!-- Display the output -->
<?php echo $output ?? ""; ?>
