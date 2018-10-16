<?php

$db = mysqli_connect('localhost', 'id3227606_invive2', 'invive2', 'id3227606_invive2');

$remarks=mysqli_real_escape_string($db,$_GET['remarks']);
$latitude = mysqli_real_escape_string($db,$_GET['latitude']);
$longitude = mysqli_real_escape_string($db,$_GET['longitude']);
$telco = mysqli_real_escape_string($db,$_GET['telco']);
$nfp = mysqli_real_escape_string($db,$_GET['nfp']);
$sitemode = mysqli_real_escape_string($db,$_GET['sitemode']);
$structuretype =mysqli_real_escape_string($db,$_GET['structuretype']);


$query = "INSERT INTO apit (remarks,latitude,longitude,telco,nfp,sitemode,structuretype) VALUES ('$remarks','$latitude','$longitude','$telco','$nfp','$sitemode','$structuretype')";
	  
						  
mysqli_query($db, $query);

?>