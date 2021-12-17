<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kullanicilar";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}/*
$sql= "Select * From yoneticiler";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_all($query);
echo "<pre>".var_export($result,true);
*/
function debug($x)
{
  die("<pre>" . var_export($x, true));
}
