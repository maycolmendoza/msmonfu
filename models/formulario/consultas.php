<?php 


//https://script.google.com/macros/s/AKfycbzhJJP7BBeU05TDDbcJN22XlF-HcMNaEukGu4NZ18_q_CaJP53y2C1LU7-EQ381ki-q/exec



//enlace de api del chatbot consultas

$inputjsonconsultasformulario = file_get_contents('https://script.google.com/macros/s/AKfycbxtjauJ64f8J4zNdM7DS7fXndDmWBRz8wGpfBYslL22krOu2ZtYJ-KvyUj8fkVoJ2sJ/exec');
$datadatosfooter = json_decode($inputjsonconsultasformulario,TRUE);
$datosdelfooter=$datadatosfooter["user"];
//zona de implementacion

?> 