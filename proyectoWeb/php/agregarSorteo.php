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
	$grupoA=parseJSON($_GET['valorencapsulado']);
	echo $grupoA;

	foreach ($equipo as $grupoA) {
		echo "$equipo";
		# code...
		$query = "insert into grupoA values ('$equipo')";
	}


	//$listaGrupoA = array("CR", "Russia", "Alemania","Holanda","Panama","Argentina","USA","Mexico");
	//echo "I like " . $listaGrupoA[0] . ", " . $listaGrupoA[1] . " and " . $listaGrupoA[2] . "," . $listaGrupoA[3]. ".";

	$query= "insert into grupoA values ('.$grupoA[0].,.$grupoA[1].,.$grupoA[2].,.$grupoA[3].')";

	$results= pg_query( $conn,$query) or die('{"estado":0}');

	//echo '1';
}

pg_close($conn);