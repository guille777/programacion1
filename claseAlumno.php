<?php 
	
class Alumno{
//atributos:
	public $nombre;
	public $edad; 
	public $curso;
	public $ciclo;
//metodo get:
public function getnombre(){
		return $this->nombre;
}
public function getedad(){
		return $this->edad;
}
public function getcurso(){
		return $this->curso;
}
public function getciclo(){
		return $this->ciclo;
}
//metodo set: Estructura de control "if" en edad y curso:
	public function setnombre($nombre){
		$this->nombre=$nom;
	}
	public function setedad($edad){
		if ($edad<18) {
			$this->edad=18;
		}
		if ($edad>18){
			$this->edad=$edad; // siiiiiiiiiiiiii  
		}
	}
	
//==1es1==2es2 si $curso no !=1 y && $curso !=2 ifffff$this->curso=1;      oloquesea
	public function setcurso($curso){
		if($curso==1){
			$this->curso=1;
		}
		if($curso==2) {
			$this->curso=2;
		}
		if($curso!=1 && $curso!=2) {
			$this->curso=1;
		}
	}
	public function setciclo($ciclo){
		$this->ciclo=$cic;
	}
}	
?>