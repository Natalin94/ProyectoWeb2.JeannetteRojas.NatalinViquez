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

      $query= "select * from teams";
      $results= pg_query( $conn,$query) ;

          
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
              <a class="nav-link text-uppercase text-expanded" href="iniciarSesion.html">Log in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Ranking FIFA</strong>
        </h2>
        <hr class="divider">
        <div class="row">
           <!-- <table class="egt">
              <tr>
                <th>Flag</th>
                <th>Country</th>
                <th>Confederation</th>
                <th>Points</th>
              </tr>
              <tr>
                <td>Img xxxxx</td>
                <td>Pais xxxxx</td>
                <td>Confederacion xxxx</td>
                <td>Puntos</td>
              </tr>
            </table>   -->

            <?php
              echo " <table class='egt' border='2px>' cellpadding='15px' align='center'";
                  while ($row = pg_fetch_row($results)) {
                      echo "<tr>";
                      echo "<td><img  width='20px' height='20px'  src=".$row[3]."></td><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><br>";
                      echo "</tr>";
                  }
                  echo "</table>";
            ?>       
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
