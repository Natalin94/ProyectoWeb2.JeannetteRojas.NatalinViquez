<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

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

        $query= "select * from teams where confederation='CONCACAF' and state = true";
        $results= pg_query( $conn,$query) ;

        global $concacaf_array;
        $concacaf_array = array();
        while ($row = pg_fetch_row($results)) {
                 
            array_push($concacaf_array, $row[0]);
                  
        }


        $query2= "select * from teams where confederation='UEFA' and state = true";
        $results2= pg_query( $conn,$query2) ;
        global $uefa_array;
        $uefa_array = array();
        while ($row = pg_fetch_row($results2)) {
                 
            array_push($uefa_array, $row[0]);
                  
        }


        $queryCAF= "select * from teams where confederation='CAF' and state = true";
        $resultsCAF= pg_query( $conn,$queryCAF) ;
        global $caf_array;
        $caf_array = array();
        while ($row = pg_fetch_row($resultsCAF)) {
                 
            array_push($caf_array, $row[0]);
                  
        }


        $queryCONMEBOL= "select * from teams where confederation='CONMEBOL' and state = true";
        $resultsCONMEBOL= pg_query( $conn,$queryCONMEBOL) ;
        global $conmebol_array;
        $conmebol_array = array();
        while ($row = pg_fetch_row($resultsCONMEBOL)) {
                 
            array_push($conmebol_array, $row[0]);
                  
        }


        $queryAFC= "select * from teams where confederation='AFC' and state = true";
        $resultsAFC= pg_query( $conn,$queryAFC) ;
        global $afc_array;
        $afc_array = array();
        while ($row = pg_fetch_row($resultsAFC)) {
                 
            array_push($afc_array, $row[0]);
        }           


            
        pg_close($conn);
    ?>


    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Business Casual</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home</a>
            </li> 
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="agregarEquipos.html">Add Team
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="ranking.php">Ranking FIFA</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="repechage.html">Repechage</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="raffle.html">Raffle</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="list.html">Result List</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="iniciarSesion.html">Log in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <script type="text/javascript">
      //VALIDACION CHECKBOX
      function validacion(formu, obj) {
        limite=1; //limite de checks a seleccionar
        num=0;
        alert("HOLA")
        if (obj.checked) {
    
          for (i=0; ele=document.getElementById(formu).children[i]; i++)
            if (ele.checked) num++;
        if (num>limite)
          obj.checked=false;
        }
      }  


      function contar(confe, form){
        debugger;
        alert(confe);
        var seleccionados_array = [];
        var noSeleccionados_array = [];
        seleccionadosUEFA_array= [];
        seleccionadosCAF_array= [];
        seleccionadosCONMEBOL_array = [];
        seleccionadosAFC_array = [];
        noSeleccionadosUEFA_array= [];
        noSeleccionadosCAF_array= [];
        noSeleccionadosCONMEBOL_array= [];
        noSeleccionadosAFC_array= [];
        var checkboxes = document.getElementById(form).checkbox;
        var cont = 0; 


        for (var x=0; x < checkboxes.length; x++) {
         if (checkboxes[x].checked) {
            if(confe == "CONCACAF"){
                seleccionados_array.push(checkboxes[x].value);
                var lista1 = JSON.stringify(seleccionados_array);
                localStorage.setItem("listaEquiposSeleccionados", lista1);
            }    
            if(confe == "UEFA"){
                seleccionadosUEFA_array.push(checkboxes[x].value);
                var lista2 = JSON.stringify(seleccionadosUEFA_array);
                localStorage.setItem("listaEquiposUEFA", lista2);
            } 
            if(confe == "CAF"){
                seleccionadosCAF_array.push(checkboxes[x].value);
                var lista3 = JSON.stringify(seleccionadosCAF_array);
                localStorage.setItem("listaEquiposCAF", lista3);
            } 
            if(confe == "CONMEBOL"){
                seleccionadosCONMEBOL_array.push(checkboxes[x].value);
                var lista4 = JSON.stringify(seleccionadosCONMEBOL_array);
                localStorage.setItem("listaEquiposCONMEBOL", lista4);
            }       
            if(confe == "AFC"){
                seleccionadosAFC_array.push(checkboxes[x].value);
                var lista5 = JSON.stringify(seleccionadosAFC_array);
                localStorage.setItem("listaEquiposAFC", lista5);
            } 
          

         }
         else{
            if(confe == "CONCACAF"){
                noSeleccionados_array.push(checkboxes[x].value);
                var lista6 = JSON.stringify(noSeleccionados_array);
                localStorage.setItem("listaEquiposNoSeleccionados", lista6);
            }    
            if(confe == "UEFA"){
                noSeleccionadosUEFA_array.push(checkboxes[x].value);
                var lista7 = JSON.stringify(noSeleccionadosUEFA_array);
                localStorage.setItem("listaEquiposNoUEFA", lista7);
            } 
            if(confe == "CAF"){
                noSeleccionadosCAF_array.push(checkboxes[x].value);
                var lista8 = JSON.stringify(noSeleccionadosCAF_array);
                localStorage.setItem("listaEquiposNoCAF", lista8);
            } 
            if(confe == "CONMEBOL"){
                noSeleccionadosCONMEBOL_array.push(checkboxes[x].value);
                var lista9 = JSON.stringify(noSeleccionadosCONMEBOL_array);
                localStorage.setItem("listaEquiposNoCONMEBOL", lista9);
            }       
            if(confe == "AFC"){
                noSeleccionadosAFC_array.push(checkboxes[x].value);
                var lista10 = JSON.stringify(noSeleccionadosAFC_array);
                localStorage.setItem("listaEquiposNoAFC", lista10);
            } 
          
         }

        }

            
      }

    </script>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">


           <h2 color="white">CONCACAF (Seleccionar 3 paises)</h2>
            <div id="CONCACAF", name="CONCACAF">
              <form id="form1" method="post" action="">
            <?php

            for ($variable=0; $variable<count($concacaf_array); $variable+=1) {
                echo "<h3><input type='checkbox' name='checkbox' value= $concacaf_array[$variable] onclick='validacion(CONCACAF.checkbox1,checkbox'>";
                  echo $concacaf_array[$variable];
                echo "</h3><br>";
           }

              /*while ($row = pg_fetch_row($results)) {
                  echo "<h3><input type='checkbox' name='checkbox1' value='checkbox1' onclick='validacion(CONCACAF.checkbox1,checkbox'>";
                  echo $row[0];
                  echo "</h3><br>";
              }*/
          ?>
          <input type="button" name="Submit" value="Add" onClick="contar('CONCACAF', 'form1');">
          </form>
          </div>
            
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
          <h2 color="white">UEFA (Seleccionar 9 paises)</h2>
          <form id="form2" method="post" action="">
           <?php
            
             for ($variable=0; $variable<count($uefa_array); $variable+=1) {
                echo "<h3><input type='checkbox' name='checkbox' value= $uefa_array[$variable] onclick='validacion(UEFA.checkbox1,checkbox'>";
                  echo $uefa_array[$variable];
                echo "</h3><br>";
            }
             /* while ($row = pg_fetch_row($results2)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }*/
          ?>
        <input type="button" name="Submit" value="Add" onClick="contar('UEFA', 'form2');">
        </form>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
         <h2 color="white">CAF (Seleccionar 5 paises)</h2>
          <form id="form3" method="post" action="">
            <?php
              for ($variable=0; $variable<count($caf_array); $variable+=1) {
                echo "<h3><input type='checkbox' name='checkbox' value= $caf_array[$variable] onclick='validacion(CAF.checkbox1,checkbox'>";
                  echo $caf_array[$variable];
                echo "</h3><br>";
              }
              /*while ($row = pg_fetch_row($resultsCAF)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }*/
          ?>
          <input type="button" name="Submit" value="Add" onClick="contar('CAF', 'form3');">
          </form>
          </div>
        </div>

        <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
         <h2 color="white">CONMEBOL (Seleccionar 4 paises)</h2>
         <form id="form4" method="post" action="">
            <?php
            
              for ($variable=0; $variable<count($conmebol_array); $variable+=1) {
                echo "<h3><input type='checkbox' name='checkbox' value= $conmebol_array[$variable] onclick='validacion(CONMEBOL.checkbox1,checkbox'>";
                  echo $conmebol_array[$variable];
                echo "</h3><br>";
              }
              /*while ($row = pg_fetch_row($resultsCONMEBOL)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }*/
          ?>
          <input type="button" name="Submit" value="Add" onClick="contar('CONMEBOL', 'form4');">
          </form>
          </div>
        </div>

         <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
         <h2 color="white">AFC (Seleccionar 4 paises)</h2>
         <form id="form5" method="post" action="">
            <?php
            
               for ($variable=0; $variable<count($afc_array); $variable+=1) {
                echo "<h3><input type='checkbox' name='checkbox' value= $afc_array[$variable] onclick='validacion(CONMEBOL.checkbox1,checkbox'>";
                  echo $afc_array[$variable];
                echo "</h3><br>";
              }
             /* while ($row = pg_fetch_row($resultsAFC)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }*/
  
          ?>

           <input type="button" name="Submit" value="Add" onClick="contar('AFC', 'form5');">
          </form>
          </div>
        </div>


      </div>

      <!-- Pagination -->
      <div class="bg-faded p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item">
            <a class="page-link" href="repechage.php">Next &rarr; </a>
          </li>

        </ul>
      </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
