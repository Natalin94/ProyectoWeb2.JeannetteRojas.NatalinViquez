<?php


$user="postgres";
$password= "namavilo";
$dbname="Fifa_world_cup";
$port= "5432";
$host= "localhost";


$strconn= "host=$host port=$port user=$user password=$password dbname=$dbname ";
        
$conn = pg_connect($strconn) or die('{"estado":0}');

$query= "select * from teams";
$results= pg_query( $conn,$query) ;
window.sessionStorage.setItem("countriesList", $results);
	

/*echo "<select>";
while ($row = pg_fetch_row($results)) {
	echo "<option>";
	echo $row[0];
	echo "</option>";
}
echo "</select>";*/
	
pg_close($conn);
?>