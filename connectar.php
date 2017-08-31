<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "curriculum";
$port = "3306";
$params = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try
{
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$db",$user,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>Connecta't</p>";
}
catch (PDOException $e){
  echo "<p>Impossible establir connexió: " . $e->getMessage() ."</p>";
}
?>
