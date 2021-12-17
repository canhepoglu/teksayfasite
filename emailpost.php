<?php

include_once "ayar.php";

/*$kontrol = $connb->prepare('SELECT * FROM emailtoplama WHERE email =:m');
$kontrol->execute(array(':m' => $m));
$gelen = $kontrol->fetch(PDO::FETCH_ASSOC);

if(!empty($gelen['email'])){
    $("#hatadiv").html("Bu E-posta adresi kayıtlı.");
    $("#hatadiv").show();
}*/

$email = $_POST['email'];

$query="SELECT * FROM emailtoplama WHERE email='".$email."';";
$execute=mysqli_query($conn,$query);
$mailler=mysqli_fetch_array($execute);
if(!empty($mailler)){
echo 0;
}else{
        global $conn;
        $query="INSERT INTO emailtoplama(email) VALUES('$email')";
        $execute=mysqli_query($conn,$query);
echo 1;
}