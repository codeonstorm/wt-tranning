<?php
$servername = "localhost";
$username = "root";
$password = "@Team23";
$dbname = "ems";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $e->getMessage();
}

$conn = null;
?>