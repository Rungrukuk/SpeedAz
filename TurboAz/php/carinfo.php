<?php 

session_start();

include "../php/db_conn.php";
$email = "kamilo09ya@gmail.com";
$sql = "SELECT * FROM carinfo WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$email]);
$car = $stmt->fetch();
$emailsql =  $car['email'];
$marka =  $car['marka'];
$model =  $car['model'];
$yurus =  $car['yurus'];
$reng =  $car['reng'];
$qiymet =  $car['qiymet'];
$yanacaq =  $car['yanacaq'];
$oturucu =  $car['oturucu'];
$suretqutusu =  $car['suretqutusu'];
$buraxilisili =  $car['buraxilisili'];
$muherrikinhecmi =  $car['muherrikinhecmi'];
$muherrikingucu =  $car['muherrikingucu'];
$elavemelumat =  $car['elavemelumat'];
$imgname =  $car['img_name'];
$imgdata =  $car['img_data'];
$status =  $car['status'];



    


