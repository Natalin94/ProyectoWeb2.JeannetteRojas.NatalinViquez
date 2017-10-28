<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    

    <title>Enable / Desable Team</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/agregarEquipos.css">


    <!-- MetisMenu CSS -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/functions.js">

   
    </script>

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">   
                    <li>
                            <a href="index.html"><i style="font-size:20px"></i>Homepage</span></a>
                        </li>                       
                        <li>
                            <a href="agregarEquipos.html"><i style="font-size:20px"></i>Add Team<span></span></a>
                        </li>
                        <li>
                            <a href="actualizarEquipos.php"><i style="font-size:20px"></i>Update Team</span></a>
                        </li>
                        <li>
                            <a href="habilitarDeshabilitar.php"><i style="font-size:20px"></i>Enable / Disable Team</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Enable / Desable Team</h1>
                    <script type="text/javascript">
                    //document.write("Bienvenido(a) " + sessionStorage.username + "<br>");
                    </script>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Information about Team
                        </div>
                        <div class="panel-body">
                            <div class="row" >
                                <div class="col-lg-6">
                                    <form role="form" id="form1" method="post" action="php/habilitarDeshabilitarfuncion.php">
                                        <div class="form-group">
                                            <label>Name of country</label>
                                            <div class="form-group">
                                                  <?php
                                            echo "<select name='country'>";
                                                while ($row = pg_fetch_row($results)) {
                                                    echo "<option>";
                                                    echo $row[0];
                                                    echo "</option>";
                                                }
                                                echo "</select>";
                                            ?>
                                            <div class="form-group">
                                            <span class="input-group-btn">
                                            </span>
                                        </div>   

                                        <input href='habilitarDeshabilitar.php' type="submit" name="state" value="Enable Team">
                                        <input href='habilitarDeshabilitar.php' type="submit" name="state" value="Disable Team">                                                     
                                      <!--  <button type="submit" href='habilitarDeshabilitar.php' onclick="habilitarEquipo()" class="btn btn-default">Enable Team</button>  
                                        <button href='habilitarDeshabilitar.php' onclick="deshabilitarEquipo()" class="btn btn-default">Disable Team</button>-->
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                                                    
                                </div>
                                <div id="resultado"></div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>


</body>

</html>
