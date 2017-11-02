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
	
	$idInicio= $_REQUEST["idtxt"];
	$contraseñaInicio = $_REQUEST["contrasennatxt"];
	$boton = $_REQUEST["boton"];

	if( $_REQUEST["boton"] == "login"){
		$row=pg_query("SELECT * FROM user WHERE idtxt='$idInicio' AND contrasennatxt ='$contraseñaInicio'");

	if(pg_fetch_array($row)>0)
	{
  	$pagina = 'http://localhost/proyectoWeb/index.html'
    header("Location: $pagina");
	}
  	else
  	{
    echo "No se pudo conectar al Servidor de Base de Datos";
 	}

	$results= pg_query( $conn,$query) or die('{"estado":0}');

   exit;
	}
	else
	{
		$tipo= $_REQUEST["tipo"];

		if($tipo=="insertar")
		{
			$idtxt= $_REQUEST["idtxt"];
			$nombretxt=$_REQUEST["nombretxt"];
			$apellidostxt= $_REQUEST["apellidostxt"];
			$edadtxt= $_REQUEST["edadtxt"];
			$contrasennatxt = $_REQUEST["contrasennatxt"];
			$fecha = date("d");
			$hora = time();


			$query= "insert into user values ('$idtxt','$nombretxt','$apellidostxt','$edadtxt','$contrasennatxt','$fecha','$hora')";

			$results= pg_query( $conn,$query) or die('{"estado":0}');

			//echo '1';
		}
	}

pg_close($conn);