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
	$country= $_REQUEST["country"];
	$boton = $_REQUEST["state"];

	if( $_REQUEST["state"] == "Enable Team"){
		$query= "update teams set state = true where country='$country'";
	}
	else $query= "update teams set state = false where country='$country'";
	

	$results= pg_query( $conn,$query) or die('{"estado":0}');

   $extra='http://localhost/proyectoWeb/habilitarDeshabilitar.php';
   header("location: $extra");
   exit;
}

pg_close($conn);