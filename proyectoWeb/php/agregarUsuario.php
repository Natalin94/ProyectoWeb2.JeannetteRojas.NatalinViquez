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


$tipo= $_REQUEST["tipo"];

if($tipo=="insertar")
{
	$idtxt= $_REQUEST["id"];
	$nombretxt=$_REQUEST["name"];
	$apellidostxt= $_REQUEST["lastname"];
	$edadtxt= $_REQUEST["age"];
	$contrasennatxt = $_REQUEST["password"];
	$fecha = date("d");
	$hora = time();


	$query= "insert into usuario values ('$nombretxt','$apellidostxt','$edadtxt','$idtxt','$contrasennatxt','2008/12/31')";

	$results= pg_query( $conn,$query) or die('{"estado":0}');

	//echo '1';
}

pg_close($conn);