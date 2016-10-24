<!DOCTYPE html>
<html>
<head>
	<title>fichero de comprobacion</title>
</head>
<body>
<?php 
	include "clasealumno.php";
	//Funcion set de los nuevos objetos...
	$alumno = new alumno();
	$alumno->setcurso(2);
	$alumno->getcurso();
	echo $alumno->curso;

	echo "<br>"; //* Esto es un salto de linea
	
	$alumno1=new alumno();
	$alumno1->setedad(50);
	$alumno1->getedad();
	echo $alumno1->edad;
	?>

</body>
</html>