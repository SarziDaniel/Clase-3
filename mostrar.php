<h1>LLEGO</h1>
<?php 
	echo "php";
	echo "<br>";
	var_dump($_POST);
	echo "<br>";
	var_dump($_GET);



	echo "<br>";
	$nombre=$_POST['usuario'];
	echo "Bienvenido ".$nombre;

	$clave=$_POST['clave'];

	echo "<br>";
	echo "<br>";

	if ($nombre=="admin" && $clave=="1234") 
		include "bienvenido.html";
	else
		include "nologeado.html";

	echo "<br>";
	echo "<br>";

	if ($nombre=="pepe" && $clave=="asdasdas") 
		include "bienvenido.html";
	else
		include "nologeado.html";
	

 ?>