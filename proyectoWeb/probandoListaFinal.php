<html>
<head>
	<title></title>
</head>
<body>

	<?php
    $user="postgres";
    $password= "namavilo";
    $dbname="Fifa_world_cup";
    $port= "5432";
    $host= "localhost";

    $strconn= "host=$host port=$port user=$user password=$password dbname=$dbname ";
            
    $conn = pg_connect($strconn) or die('{"estado":0}');

    echo "<script type='text/javascript'>
    		var listaGuardada = localStorage.getItem('listaMundialistas');
            listaGuardada = JSON.parse(listaGuardada);
            var listaBase= [];
          
    	  </script>";
            	
               	$query= "select * from teams where state != false";
            	
    			$results= pg_query( $conn,$query) ;    			
    			while ($row = pg_fetch_row($results)) {
    				//echo "<script>";
                 	echo $row[0];
                 	echo "<script type='text/javascript'>var paises = 
                 	{country:'".$row[0]."', points:".$row[2]."};
                 	listaBase.push(paises);
                   	</script>";
              	}
             echo "<script>
             var nuevaLista=[];
             for (j=0; j< listaBase.length; j++){
             	debugger;
             	var elemento= listaBase[j].country;
             	if (listaGuardada.indexOf(elemento) != -1 ){
             		nuevaLista.push(listaBase[j]);
             }
             }


             listaBase.sort(function (a, b) {
				  if (a.points < b.points) {
				    return 1;
				  }
				  if (a.points > b.points) {
				    return -1;
				  }
				  
				  return 0;
				});
			
			for (j=0; j< nuevaLista.length; j++){
             	alert(nuevaLista[j].country+nuevaLista[j].points);
             }


             </script>";

                

    pg_close($conn);
    ?>
</body>
</html>

