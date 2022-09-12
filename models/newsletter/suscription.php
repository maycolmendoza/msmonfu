<?php 

//suscriptores desde elc uadro de newsletter del monfu

//https://script.google.com/macros/s/AKfycbzpDwHlrsAmpKW54aVoiBvAdEMNZYeRZQPd5F3Yl_gMd8Ckm1C3jQLMtCUOZ2AIwIY1_A/exec
$inputJSON = file_get_contents('https://script.google.com/macros/s/AKfycbzpDwHlrsAmpKW54aVoiBvAdEMNZYeRZQPd5F3Yl_gMd8Ckm1C3jQLMtCUOZ2AIwIY1_A/exec');
$data = json_decode($inputJSON,TRUE);

$datoss=$data[0]["data"];
//zona de implementacion


?> 