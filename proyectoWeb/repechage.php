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

        $query2= "select * from teams";
        $results2= pg_query( $conn,$query2) ;

        $query3= "select * from teams";
        $results3= pg_query( $conn,$query) ;

        $query4= "select * from teams";
        $results4= pg_query( $conn,$query) ;
            
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

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">About
          <strong>Business Casual</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-6">
          <table class="egt">

            <tr>

              <td> <?php
                echo "<select id='country'>";
                    while ($row = pg_fetch_row($results)) {
                        echo "<option>";
                        echo $row[0];
                        echo "</option>";
                    }
                    
                    echo "</select>";
                    echo "<input type='text' disabled='disabled' size='2'/>";
                ?></td>

              <td> <?php
                echo "<input type='text' disabled='disabled' size='2'/>";
                echo "<select id='country'>";
                    
                    while ($row = pg_fetch_row($results2)) {
                        echo "<option>";
                        echo $row[0];
                        echo "</option>";
                    }
                    echo "</select>";
                ?></td>

            </tr>

            <tr>

              <td><?php
                echo "<select id='country'>";
                    while ($row = pg_fetch_row($results3)) {
                        echo "<option>";
                        echo $row[0];
                        echo "</option>";
                    }
                    
                    echo "</select>";
                    echo "<input type='text' disabled='disabled' size='2'/>";
                ?>
                <input type="submit" value="play">
              </td>

              <td> <?php
                echo "<input type='text' disabled='disabled' size='2'/>";
                echo "<select id='country'>";
                    
                    while ($row = pg_fetch_row($results4)) {
                        echo "<option>";
                        echo $row[0];
                        echo "</option>";
                    }
                    echo "</select>";


                ?></td>
            </tr>

          </table>
          </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Our
          <strong>Team</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img class="card-img-top" src="http://placehold.it/750x450" alt="">
              <div class="card-body text-center">
                <h4 class="card-title m-0">John Smith
                  <small class="text-muted">Job Title</small>
                </h4>
              </div>
            </div>
          </div>
        </div>
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
