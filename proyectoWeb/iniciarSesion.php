<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registrate/Inicia Sesion</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script type="text/javascript" src="js/functions.js"> </script>
    
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

        $query= "select * from user";
        $results= pg_query( $conn,$query) ;

            
        pg_close($conn);
  ?>


  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log in</a></li>
        <li class="tab "><a href="#signup">Register</a></li>
      </ul>
      
      <div class="tab-content">

      <div id="login">   
          <h1>¡Welcome!</h1>
          
          <form action="iniciarSesionFuncion.php" method="post">
          
            <div class="field-wrap">
            <?php 
                echo "<input type='text' required name='idInicio'autocomplete='off' placeholder='Id'> ";
              ?>
          </div>

          <div class="field-wrap">
            <?php 
                echo "<input type='password' required name='contraseñaInicio'autocomplete='off' placeholder='Password'>";
              ?>
          </div>


          <h1><a id="butIniciarSesion" name="boton" href='iniciarSesionFuncion.php' value="login" style="font-size:40px" >Log in</a></h1>
         <!-- <p class="forgot"><a href="#">Olvidaste la contraseña</a></p>-->
         
           </form>
        </div>

        <div id="signup">   
          <h1>Enter your details</h1>
          
          <form action="iniciarSesionFuncion.php" method="post">
          
          <div class="top-row">

            <div class="field-wrap">
              <?php 
                echo "<input type='text' name='idtxt' autocomplete='off' placeholder='Id'>";
              ?>
            </div>

            <div class="field-wrap">
              <?php 
                echo "<input type='text' name='nombretxt' autocomplete='off' placeholder='Name'>";
              ?>
            </div>

            <div class="field-wrap">
              <?php 
                echo "<input type='text' name='apellidostxt' autocomplete='off' placeholder='Lastname'>";
              ?>
            </div>
          
            <div class="field-wrap">
              <?php 
                echo "<input type='text' name='edadtxt' autocomplete='off' placeholder='Age'>";
              ?>
            </div>          
          <div class="field-wrap">
            <?php 
                echo "<input type='password' name='contrasennatxt' autocomplete='off' placeholder='Password'>";
              ?>
          </div>


          </div>

        <h1> <a id="butRegistrarse" name="boton" style="font-size:40px"  onclick="agregarUsuario()" value="registro">¡Register!</a></h1> 
         <!--<button type="submit" class="button button-block"/>¡Registrarse!</button> -->
          
          </form>

        </div>
       
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="assets/js/index.js"></script>

</body>
</html>
