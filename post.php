<?php

include_once "ayar.php";

$kadi=$_POST['kadi'];
$email=$_POST['email'];
$mesaj=$_POST['mesaj'];

insert_data($kadi,$email,$mesaj);

function legal_input($value) {
   $value = trim($value);
   $value = stripslashes($value);
   $value = htmlspecialchars($value);
   return $value;
}

function insert_data($kadi,$email, $mesaj){

    global $conn;
     $query="INSERT INTO uyeler(kadi,email,mesaj) VALUES('$kadi','$email','$mesaj')";
    $execute=mysqli_query($conn,$query);
        exit('1');
}