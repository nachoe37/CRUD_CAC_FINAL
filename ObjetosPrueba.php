<?php
include_once ("Cuenta.php");

//construyo el objeto y le asigno datos
$cuenta1= new Cuenta("Dharma", "Mario Escudero", 18602129, 280154858566, "nachoe37@hotmail.com", "dharmatw@hotmail.com");


// (muestra desde back) var_dump($cuenta1); echo "<br>";
$cuenta1->mostrarDatos($cuenta1)













?>