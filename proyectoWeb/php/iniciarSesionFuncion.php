<?php
//error_reporting(0);
// Las vaiables en php se designan con signo de dolar

$user="postgres";
$password= "namavilo";
$dbname="Fifa_world_cup";
$port= "5432";
$host= "localhost";

$strconn= "host=$host port=$port user=$user password=$password dbname=$dbname ";
        
$conn = pg_connect($strconn) or die('{"estado":0}');


//$tipo= $_REQUEST["tipo"];


	
if($_SERVER["REQUEST_METHOD"]== "POST")
{	

	$username= $_REQUEST["idInicio"];
	$password = $_REQUEST["contraseñaInicio"];

	
	$query= "select * from usuario where username= '$username' and contraseña = '$password'";
	$results= pg_query( $conn,$query) ;

	if (pg_num_rows($results) ==0) {
	    
	   echo "<script type='text/javascript'>alert('Lo estamos redireccionando'); </script>";
	   $extra='http://localhost/ProyectoWeb2.JeannetteRojas.NatalinViquez/proyectoWeb/iniciarSesion.html';
	   header("location: $extra");
	   exit;

	    
	 }
	else{
	   $extra='http://localhost/ProyectoWeb2.JeannetteRojas.NatalinViquez/proyectoWeb/index.html';
	   header("location: $extra");
	   exit;
	}

}

pg_close($conn);