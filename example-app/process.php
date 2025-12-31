<?php
if (isset($_POST['name'])) {
  $name = htmlspecialchars($_POST['name']);
  echo "<h2>Hello, $name!</h2>";
}
?>
