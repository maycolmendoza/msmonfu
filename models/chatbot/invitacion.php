<?php 

//api de las invitacion desde el chatbot

//https://script.google.com/macros/s/AKfycbzGeBDucpv32Tv8ZaIt9xOldxC9fuMr_TrUjdmOPYZgwQeegyuM-S5iRg2Gme2me4OJMA/exec

$inputJSON = file_get_contents('https://script.google.com/macros/s/AKfycbwQ9ibMIYOw-jyHRmZ05bwt0iVnleswUcHsCdu8G9d4NLlVozE7SiCeJPihjUkLXR2M0A/exec');
$data = json_decode($inputJSON,TRUE);

$datoss=$data["user"];

?> 