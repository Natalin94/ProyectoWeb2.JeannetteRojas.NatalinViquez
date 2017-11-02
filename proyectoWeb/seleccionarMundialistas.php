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

        $query= "select * from teams where confederation='CONCACAF'";
        $results= pg_query( $conn,$query) ;

        $query2= "select * from teams where confederation='UEFA'";
        $results2= pg_query( $conn,$query2) ;

        $queryCAF= "select * from teams where confederation='CAF'";
        $resultsCAF= pg_query( $conn,$queryCAF) ;

        $queryCONMEBOL= "select * from teams where confederation='CONMEBOL'";
        $resultsCONMEBOL= pg_query( $conn,$queryCONMEBOL) ;

        $queryAFC= "select * from teams where confederation='AFC'";
        $resultsAFC= pg_query( $conn,$queryAFC) ;
            
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
    </script>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">


           <h2 color="white">CONCACAF</h2>
            <div id="CONCACAF", name="CONCACAF">
            <?php
            
              while ($row = pg_fetch_row($results)) {
                  echo "<h3><input type='checkbox' name='checkbox1' value='checkbox1' onclick='validacion(CONCACAF.checkbox1,checkbox'>";
                  echo $row[0];
                  echo "</h3><br>";
              }
          ?>
          </div>
            
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
          <h2 color="white">UEFA</h2>
           <?php
            
              while ($row = pg_fetch_row($results2)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }
          ?>
          
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
         <h2 color="white">CAF</h2>
            <?php
            
              while ($row = pg_fetch_row($resultsCAF)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }
          ?>
          </div>
        </div>

        <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
         <h2 color="white">CONMEBOL</h2>
            <?php
            
              while ($row = pg_fetch_row($resultsCONMEBOL)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }
          ?>
          </div>
        </div>

         <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
         <h2 color="white">AFC</h2>
            <?php
            
              while ($row = pg_fetch_row($resultsAFC)) {
                  echo "<h3><input type='checkbox' name='transporte' value='1'>";
                  echo $row[0];
                  echo "</h3><br>";
              }
  
          ?>
          </div>
        </div>


      </div>

      <!-- Pagination -->
      <div class="bg-faded p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item">
            <a class="page-link" href="#">Next &rarr; </a>
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
