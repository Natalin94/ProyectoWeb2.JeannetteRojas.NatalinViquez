<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FIFA WORLD CUP RUSSIA 2018</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">

</head>

<body>

  <script language="javascript">
  function cargar_al_input(valor, espacio) {
    debugger;

    var txt = document.getElementById(espacio.id);
    txt.value = valor;
  }

  function funcionListaFinal() {

    var listaSeleccionados = localStorage.getItem('listaEquiposSeleccionados');
    listaSeleccionados = JSON.parse(listaSeleccionados);

    var listaGuardada2 = localStorage.getItem('listaEquiposCONMEBOL');
    listaGuardada2 = JSON.parse(listaGuardada2);

    var listaGuardada3 = localStorage.getItem('listaEquiposCAF');
    listaGuardada3 = JSON.parse(listaGuardada3);

    var listaGuardada4 = localStorage.getItem('listaEquiposUEFA');
    listaGuardada4 = JSON.parse(listaGuardada4);

    var listaGuardada5 = localStorage.getItem('listaEquiposAFC');
    listaGuardada5 = JSON.parse(listaGuardada5);

    var mundialistas = listaFinal.concat(listaSeleccionados,listaGuardada2,listaGuardada3,listaGuardada4,listaGuardada5);
    
    alert(mundialistas);

    var listaMundialistas = JSON.stringify(mundialistas);
    localStorage.setItem("listaMundialistas", listaMundialistas);

  }

  var contador = 0;
  var listaFinal = new Array();
  function resultadoJuego(campo1, campo2, campo3, campo4, resultado, texto1, texto2, id) {
    contador+=1;
    var juego1 = Math.floor((Math.random() * 7) + 1);
    var juego2 = Math.floor((Math.random() * 7) + 1);
    var juego3 = Math.floor((Math.random() * 7) + 1);
    var juego4 = Math.floor((Math.random() * 7) + 1);

    var txt = document.getElementById(campo1.id);
    txt.value = juego1;

    var txt = document.getElementById(campo2.id);
    txt.value = juego2;

    var txt = document.getElementById(campo3.id);
    txt.value = juego3;

    var txt = document.getElementById(campo4.id);
    txt.value = juego4; 

    uno= juego1+ juego4;
    dos= juego2+ juego3; 

    var ganador= document.getElementById(texto1.id) 
    var ganador2= document.getElementById(texto2.id) 

    if (juego1+ juego4 >= juego2 + juego3){
      document.getElementById(resultado.id).innerHTML = "The winner is: "+ ganador2.value;
      listaFinal.push(ganador2.value);
    } 

    else{
     document.getElementById(resultado.id).innerHTML = "The winner is: "+ ganador.value;
     listaFinal.push(ganador.value);
   } 

    document.getElementById(id).disabled = true;

    if(contador== 6){
      funcionListaFinal();
    }

 }
 </script>


 <?php


 $user="postgres";
 $password= "namavilo";
 $dbname="Fifa_world_cup";
 $port= "5432";
 $host= "localhost";


 $strconn= "host=$host port=$port user=$user password=$password dbname=$dbname ";

 $conn = pg_connect($strconn) or die('{"estado":0}');

 $query= "select * from teams where confederation !='UEFA'";
 $query2= "select * from teams where confederation='OFC'";


 
 $results5= pg_query( $conn,$query2) ;
 

 pg_close($conn);
 ?>

 <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">FIFA WORLD CUP</div>
 <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Repechage</div>

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
          <a class="nav-link text-uppercase text-expanded" href="indexPrincipal.html">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style type="text/css">
.divCuadros{
  padding: 60px;
}
</style>

<div class="container">

  <div class="bg-faded p-4 my-4">
    <div class="bg-faded p-4 my-4">
      <hr class="divider">
      <h2 class="text-center text-lg text-uppercase my-0"><strong>Repechage</strong></h2>
      <hr class="divider">

      <div class="row">
        <div width="100px" class="divCuadros" >
          <div >
            <table class="egt">
              <tr>

                <td> <?php
                echo "<select name='country' id='country' onchange='cargar_al_input(this.value, texto2)'>";
                  while ($row = pg_fetch_row($results5)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }

                echo "</select>";
                echo "<input id='campo1' type='text' disabled='disabled' size='2'/>";
                ?></td>

                <td> <?php
                echo "<input id='campo2' type='text' disabled='disabled' size='2'/>";
                echo "<select id='country2' onchange='cargar_al_input(this.value, texto1)'>";
              /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

            echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoAFC');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country2');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";
                echo "</select>";
                ?></td>
              </tr>
              <tr>

                <td><?php

                echo "<input id='texto1' type='text' disabled='disabled' size='10.7'/>";
                echo "<input id='campo3' type='text' disabled='disabled' size='2'/>";
                ?>
                <input id="play1" name="play1" onclick="resultadoJuego(campo1, campo2, campo3, campo4, resultado1, texto1, texto2, this.name)" type="submit" value="play">
              </td>

              <td> <?php

              echo "<input  id='campo4' type='text' disabled='disabled' size='2'/>";
              echo "<input id='texto2' type='text' disabled='disabled' size='10.7'/>";

              ?></td>
            </tr>
          </table>
          <p id="resultado1"></p>
        </div>
      </div> 

      <div width="100px" class="divCuadros" >
        <div >
          <table class="egt">
            <tr>

              <td> <?php
              echo "<select id='country3' onchange='cargar_al_input(this.value, texto4)'>";
              /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

            echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoSeleccionados');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country3');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";

              echo "</select>";
              echo "<input id='campo5' type='text' disabled='disabled' size='2'/>";
              ?></td>

              <td> <?php
              echo "<input id='campo6' type='text' disabled='disabled' size='2'/>";
              echo "<select id='country4' onchange='cargar_al_input(this.value, texto3)'>";

               /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

            echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoCONMEBOL');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country4');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";
              echo "</select>";
              ?></td>
            </tr>
            <tr>

              <td><?php

              echo "<input id='texto3' type='text' disabled='disabled' size='10.7'/>";
              echo "<input id='campo7' type='text' disabled='disabled' size='2'/>";
              ?>
              <input id="play2" name="play2" onclick="resultadoJuego(campo5, campo6, campo7, campo8, resultado2, texto3, texto4, this.name)" type="submit" value="play">

            </td>

            <td> <?php

            echo "<input id='campo8'   type='text' disabled='disabled' size='2'/>";
            echo "<input id='texto4' type='text' disabled='disabled' size='10.7'/>";

            ?></td>
          </tr>
        </table>
        <p id="resultado2"></p>

      </div>
    </div>


  </div>
</div>

</div>


<div class="bg-faded p-4 my-4">


  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">UEFA Repechage</h2>
    <hr class="divider">

    <div class="row">
      <div width="100px" class="divCuadros" >
        <div >
          <table class="egt">
            <tr>

              <td> <?php
              echo "<select id='country5' onchange='cargar_al_input(this.value, texto6)'>";
               /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country5');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";

              echo "</select>";
              echo "<input id='campo9' type='text' disabled='disabled' size='2'/>";
              ?></td>

              <td> <?php
              echo "<input id='campo10' type='text' disabled='disabled' size='2'/>";
              echo "<select id='country6' onchange='cargar_al_input(this.value, texto5)'>";

               /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country6');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";
              echo "</select>";
              ?></td>
            </tr>
            <tr>

              <td><?php

              echo "<input id='texto5' type='text' disabled='disabled' size='10.7'/>";
              echo "<input id='campo11' type='text' disabled='disabled' size='2'/>";
              ?>
              <input id="play3" name="play3" onclick="resultadoJuego(campo9, campo10, campo11, campo12, resultado3, texto5, texto6, this.name)" type="submit" value="play">

            </td>

            <td> <?php

            echo "<input id='campo12'  type='text' disabled='disabled' size='2'/>";
            echo "<input id='texto6' type='text' disabled='disabled' size='10.7'/>";

            ?></td>
          </tr>
        </table>
        <p id='resultado3'></p>
      </div>
    </div>

    <div width="100px" class="divCuadros" >
      <div >
        <table class="egt">
          <tr>

            <td> <?php
            echo "<select id='country7' onchange='cargar_al_input(this.value, texto8)'>";
            /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country7');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";

            echo "</select>";
            echo "<input id='campo13' type='text' disabled='disabled' size='2'/>";
            ?></td>

            <td> <?php
            echo "<input id='campo14' type='text' disabled='disabled' size='2'/>";
            echo "<select id='country8' onchange='cargar_al_input(this.value, texto7)'>";

            /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country8');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";
            echo "</select>";
            ?></td>
          </tr>
          <tr>

            <td><?php

            echo "<input id='texto7' type='text' disabled='disabled' size='10.7'/>";
            echo "<input id='campo15' type='text' disabled='disabled' size='2'/>";
            ?>
            <input id="play4" name="play4" onclick="resultadoJuego(campo13, campo14, campo15, campo16, resultado4, texto7, texto8, this.name)" type="submit" value="play">
          </td>

          <td> <?php

          echo "<input id='campo16'  type='text' disabled='disabled' size='2'/>";
          echo "<input id='texto8' type='text' disabled='disabled' size='10.7'/>";

          ?></td>
        </tr>
      </table>
      <p id="resultado4"></p>
    </div>
  </div>



  <div width="100px" class="divCuadros" >
    <div >
      <table class="egt">
        <tr>

          <td> <?php
          echo "<select id='country9' onchange='cargar_al_input(this.value, texto10)'>";
          /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country9');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";
          echo "</select>";
          echo "<input id='campo17' type='text' disabled='disabled' size='2'/>";
          ?></td>

          <td> <?php
          echo "<input id='campo18' type='text' disabled='disabled' size='2'/>";
          echo "<select id='country10' onchange='cargar_al_input(this.value, texto9)'>";
           /*while ($row = pg_fetch_row($results11)) {
                    echo "<option>";
                    echo $row[0];
                    echo "</option>";
                  }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country10');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";

          echo "</select>";
          ?></td>
        </tr>
        <tr>

          <td><?php

          echo "<input id='texto9' type='text' disabled='disabled' size='10.7'/>";
          echo "<input id='campo19' type='text' disabled='disabled' size='2'/>";
          ?>
          <input id="play5" name="play5" onclick="resultadoJuego(campo17, campo18, campo19, campo20, resultado5, texto9, texto10, this.name)" type="submit" value="play">
        </td>

        <td> <?php

        echo "<input id='campo20'  type='text' disabled='disabled' size='2'/>";
        echo "<input id='texto10' type='text' disabled='disabled' size='10.7'/>";

        ?></td>
      </tr>
    </table>
    <p id="resultado5"></p>
  </div>
</div>


<div width="100px" class="divCuadros" >
  <div >
    <table class="egt">
      <tr>

        <td> <?php
        echo "<select id='country11' onchange='cargar_al_input(this.value, texto12)'>";
         /*while ($row = pg_fetch_row($results11)) {
          echo "<option>";
          echo $row[0];
          echo "</option>";
        }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
             
              var x = document.getElementById('country11');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";

        echo "</select>";
        echo "<input id='campo21' type='text' disabled='disabled' size='2'/>";
        ?></td>

        <td> <?php
        echo "<input id='campo22' type='text' disabled='disabled' size='2'/>";
        echo "<select id='country12' onchange='cargar_al_input(this.value, texto11)'>";

        /*while ($row = pg_fetch_row($results11)) {
          echo "<option>";
          echo $row[0];
          echo "</option>";
        }*/

        echo "<script language='javascript'>
              var listaGuardada = localStorage.getItem('listaEquiposNoUEFA');
              listaGuardada = JSON.parse(listaGuardada);
              
              var x = document.getElementById('country12');
              for (i = 0; i < listaGuardada.length; i++) { 
                  var option = document.createElement('option');
                  option.text = listaGuardada[i];
                  x.add(option);
              }
              
              </script>";
        echo "</select>";
        ?></td>
      </tr>
      <tr>

        <td><?php

        echo "<input id='texto11' type='text' disabled='disabled' size='10.7'/>";
        echo "<input id='campo23' type='text' disabled='disabled' size='2'/>";
        ?>
        <input id="play6" name="play6" onclick="resultadoJuego(campo21, campo22, campo23, campo24, resultado6, texto11, texto12, this.name)" type="submit" value="play">
      </td>

      <td> <?php

      echo "<input id='campo24'  type='text' disabled='disabled' size='2'/>";
      echo "<input id='texto12' type='text' disabled='disabled' size='10.7'/>";

      ?></td>
    </tr>
  </table>
  <p id="resultado6"></p>
</div>
</div>


</div>
</div>


<div class="bg-faded p-4 my-4">
  <ul class="pagination justify-content-center mb-0">
    <li class="page-item">
      <a class="page-link" href="raffle.html">Next &rarr; </a>
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
