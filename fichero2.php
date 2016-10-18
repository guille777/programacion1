<!DOCTYPE html>
<html>
<head>
	<title>fichero de comprobacion</title>
</head>
<body>
<?php 

	include "clasAlumno.php";

	//Funcion set de los nuevos objetos...

	$alumno = new Alumno();
	$alumno->setcurso(2);
	echo $alumno->curso;

	echo "<br>"; //* Esto es un salto de linea

	$alumno1=new alumno();
	$alumno1->setedad(88);
	echo $alumno1->edad;
	?>

</body>
</html>























