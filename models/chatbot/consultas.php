<?php 

//enlace de api del chatbot consultas

$inputJSON = file_get_contents('https://script.google.com/macros/s/AKfycbwftR15I4LQLOcHFxEWixlmS_FZd6d1ATdkZfZVDzosS2FsIZoVQwTAldCfSbDuTGIE0A/exec');
$data = json_decode($inputJSON,TRUE);

$datoss=$data["user"];
//zona de implementacion

