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

     <?php


    $user="postgres";
    $password= "namavilo";
    $dbname="Fifa_world_cup";
    $port= "5432";
    $host= "localhost";


    $strconn= "host=$host port=$port user=$user password=$password dbname=$dbname ";
            
    $conn = pg_connect($strconn) or die('{"estado":0}');

    $query= "select * from sorteo";
    $results= pg_query( $conn,$query) ;

    
        
    pg_close($conn);
    ?>


      <style>
      table, td, th {    
          border: 1px solid #000;
          text-align: left;
        
      }

      table {
          border-collapse: collapse;
          width: 100%;
          
      }

      th, td {
          padding: 15px;
      }


      </style>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">FIFA WORLD CUP</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Result list</div>

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
              <a class="nav-link text-uppercase text-expanded" href="seleccionarMundialistas.php">Raffle</a>
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

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong>Raffles</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          
          <div class="col-lg-6">
            <table >
              <?php
              while ($row = pg_fetch_row($results)) {
                      
                     echo "<tr>
                      <th id='A'>A</th>
                      <th id='B'>B</th>
                      <th id='C'>C</th>
                      <th id='D'>D</th>
                      <th id='E'>E</th>
                      <th id='F'>F</th>
                      <th id='G'>G</th>
                      <th id='H'>H</th>
                    </tr>";
                  $var= $row[0];
                  $strconn= "host=$host port=$port user=$user password=$password dbname=$dbname ";
                  $conn = pg_connect($strconn) or die('{"estado":0}');
                  $query2= "select * from resultadoSorteo where idSorteo='$var';";
                  $results2= pg_query( $conn,$query2) ;
                  while ($row2 = pg_fetch_row($results2)) {
                    echo "<script type='text/javascript'>

                      var fila='<tr><td>".$row2[3]."</td></tr>';
                      var btn = document.createElement('TR');
                      var probando='".$row2[1]."';
                      if(probando[1] == 'A'){
                        btn.innerHTML=fila;
                        document.getElementById('A').appendChild(btn)
                      }

                      if(probando[1] == 'B'){
                        btn.innerHTML=fila;
                        document.getElementById('B').appendChild(fila)
                      }
                      if(probando[1] == 'C'){
                        btn.innerHTML=fila;
                        document.getElementById('C').appendChild(btn)
                      }
                      if(probando[1] == 'D'){
                        btn.innerHTML=fila;
                        document.getElementById('D').appendChild(btn)
                      }
                      if(probando[1] == 'E'){
                        btn.innerHTML=fila;
                        document.getElementById('E').appendChild(btn)
                      }
                      if(probando[1] == 'F'){
                        btn.innerHTML=fila;
                        document.getElementById('F').appendChild(btn)
                      }
                      if(probando[1] == 'G'){
                        btn.innerHTML=fila;
                        document.getElementById('G').appendChild(btn)
                      }
                      if(probando[1] == 'H'){
                        btn.innerHTML=fila;
                        document.getElementById('H').appendChild(btn)
                      }             
                    </script>";                   
                  }
              }

              ?>
            </table>
          </div>
        </div>
      </div>



    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; FIFA WORLD CUP RUSSIA 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
