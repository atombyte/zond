<?php
$servername = "lamp_mysql";
$username = "user";
$password = "userpass";
$dbname = "myapp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

echo "<h1>Hallo von PHP auf Umbrel!</h1>";
echo "<p>MySQL-Verbindung erfolgreich!</p>";

$conn->close();
?>
