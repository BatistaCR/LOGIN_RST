<?php 

$usuario=$_POST['usuario'];
$password=$_POST['password'];


	if (($usuario=="alex") && ($password=="1234")) {
		echo "bienvenido";
	} else {
		echo "mamaste, <a href='index.html'>vuelve a intentar</a>";

	}
	


 ?>