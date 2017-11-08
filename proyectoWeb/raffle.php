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
    <script type="text/javascript" src="js/functions.js"></script>

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
      var listaDeSeleccionadosFinales=[]
      for (j=0; j< nuevaLista.length; j++){
              listaDeSeleccionadosFinales.push(nuevaLista[j].country);
            }
            
            var primerBomboE= listaDeSeleccionadosFinales.slice(0,7);
            var segundoBomboE= listaDeSeleccionadosFinales.slice(7,15);
            var tercerBomboE= listaDeSeleccionadosFinales.slice(15,23);
            var cuartoBomboE= listaDeSeleccionadosFinales.slice(23,31);
            //alert(primerBomboE);
            //alert(segungoBomboE);
            //alert(tercerBomboE);
            //alert(cuartoBomboE);

             </script>";
    pg_close($conn);
    ?>

    <script type="text/javascript">
      //funcion que escoge el equipo y la posicion de los primeros bombos
      var grupoA = [];
      var grupoB = [];
      var grupoC = [];
      var grupoD = [];
      var grupoE = [];
      var grupoF = [];
      var grupoG = [];
      var grupoH = [];

      JSON.stringify(grupoA);

      //grupoA = [ ].join(',')
      //$.post('/agregarSorteo.php', {grupoA: grupoA})


      var numeroImagenActual1 =1;
      var primerBomboP = ["1A","1B","1C","1D","1E","1F","1G","1H"];
      function moverImagenEquipos1(movimiento) { 
      if (numeroImagenActual1 == 1 &&  movimiento =='adelante') {//inicia bombo anfitrion, el siguiente es con 7
      document.getElementById('imgCarrusel1').src = 'img/bombo7Equipos.png';
      document.getElementById('imgCarruselP1').src = 'img/posicion7.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      randE = "Russia";
      randP = "1A";
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById("1A").appendChild(btn);
      //guardando en listas
      if(randP=="1A"){
        grupoA.push(randE);
        debugger;
      }
      }
      //recorrido para eliminar el equipo encontrado
      function eliminarE(){
        for(var i=0, l=primerBomboE.length; i<l; i++){
          var eliminarE = randE;
          if(primerBomboE[i] == eliminarE){
            primerBomboE.splice(i,1);
            primerBomboE;
          }
        }
      }
      function eliminarP(){
        for(var i=0, l=primerBomboP.length; i<l; i++){
          var eliminarP = randP;
          if(primerBomboP[i] == eliminarP){
            primerBomboP.splice(i,1);
            primerBomboP;
          }
        }
      }
      if (numeroImagenActual1 == 2 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel1').src = 'img/bombo6Equipos.png';
      document.getElementById('imgCarruselP1').src = 'img/posicion6.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "1A"){
          grupoA.push(randE);
        }
        if(randP == "1B"){
          grupoB.push(randE);
        }
        if(randP == "1C"){
          grupoC.push(randE);
        }
        if(randP == "1D"){
          grupoD.push(randE);
        }
        if(randP == "1E"){
          grupoE.push(randE);
        }
        if(randP == "1F"){
          grupoF.push(randE);
        }
        if(randP == "1G"){
          grupoG.push(randE);
        }
        if(randP == "1H"){
          grupoH.push(randE);
        }
        debugger;
      }
      //recorrido para eliminar valor encontrado
      eliminarE();
      eliminarP();
      if (numeroImagenActual1 == 3 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel1').src = 'img/bombo5Equipos.png';
      document.getElementById('imgCarruselP1').src = 'img/posicion5.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "1A"){
          grupoA.push(randE);
        }
        if(randP == "1B"){
          grupoB.push(randE);
        }
        if(randP == "1C"){
          grupoC.push(randE);
        }
        if(randP == "1D"){
          grupoD.push(randE);
        }
        if(randP == "1E"){
          grupoE.push(randE);
        }
        if(randP == "1F"){
          grupoF.push(randE);
        }
        if(randP == "1G"){
          grupoG.push(randE);
        }
        if(randP == "1H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE();
      eliminarP();
      if (numeroImagenActual1 == 4 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel1').src = 'img/bombo4Equipos.png';
      document.getElementById('imgCarruselP1').src = 'img/posicion4.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "1A"){
          grupoA.push(randE);
        }
        if(randP == "1B"){
          grupoB.push(randE);
        }
        if(randP == "1C"){
          grupoC.push(randE);
        }
        if(randP == "1D"){
          grupoD.push(randE);
        }
        if(randP == "1E"){
          grupoE.push(randE);
        }
        if(randP == "1F"){
          grupoF.push(randE);
        }
        if(randP == "1G"){
          grupoG.push(randE);
        }
        if(randP == "1H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE();
      eliminarP();
      if (numeroImagenActual1 == 5 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel1').src = 'img/bombo3Equipos.png';
      document.getElementById('imgCarruselP1').src = 'img/posicion3.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "1A"){
          grupoA.push(randE);
        }
        if(randP == "1B"){
          grupoB.push(randE);
        }
        if(randP == "1C"){
          grupoC.push(randE);
        }
        if(randP == "1D"){
          grupoD.push(randE);
        }
        if(randP == "1E"){
          grupoE.push(randE);
        }
        if(randP == "1F"){
          grupoF.push(randE);
        }
        if(randP == "1G"){
          grupoG.push(randE);
        }
        if(randP == "1H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE();
      eliminarP();
      if (numeroImagenActual1 == 6 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel1').src = 'img/bombo2Equipos.png';
      document.getElementById('imgCarruselP1').src = 'img/posicion2.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "1A"){
          grupoA.push(randE);
        }
        if(randP == "1B"){
          grupoB.push(randE);
        }
        if(randP == "1C"){
          grupoC.push(randE);
        }
        if(randP == "1D"){
          grupoD.push(randE);
        }
        if(randP == "1E"){
          grupoE.push(randE);
        }
        if(randP == "1F"){
          grupoF.push(randE);
        }
        if(randP == "1G"){
          grupoG.push(randE);
        }
        if(randP == "1H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE();
      eliminarP();
      if (numeroImagenActual1 == 7 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel1').src = 'img/bombo1Equipo.png';
      document.getElementById('imgCarruselP1').src = 'img/posicion1.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "1A"){
          grupoA.push(randE);
        }
        if(randP == "1B"){
          grupoB.push(randE);
        }
        if(randP == "1C"){
          grupoC.push(randE);
        }
        if(randP == "1D"){
          grupoD.push(randE);
        }
        if(randP == "1E"){
          grupoE.push(randE);
        }
        if(randP == "1F"){
          grupoF.push(randE);
        }
        if(randP == "1G"){
          grupoG.push(randE);
        }
        if(randP == "1H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE();
      eliminarP();
      if (numeroImagenActual1 == 8 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel1').src = 'img/bomboVacio.png';
      document.getElementById('imgCarruselP1').src = 'img/bomboVacio.png';
      var randE = primerBomboE[Math.floor(Math.random() * primerBomboE.length)];
      var randP = primerBomboP[Math.floor(Math.random() * primerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "1A"){
          grupoA.push(randE);
        }
        if(randP == "1B"){
          grupoB.push(randE);
        }
        if(randP == "1C"){
          grupoC.push(randE);
        }
        if(randP == "1D"){
          grupoD.push(randE);
        }
        if(randP == "1E"){
          grupoE.push(randE);
        }
        if(randP == "1F"){
          grupoF.push(randE);
        }
        if(randP == "1G"){
          grupoG.push(randE);
        }
        if(randP == "1H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE();
      eliminarP();
      if (numeroImagenActual1 == 9 && movimiento == 'adelante') {
      alert ('No hay paises ni posiciones disponibles');
      }
      numeroImagenActual1 +=1;
      }
      //funcion que escoge el equipo y la posicion de los segundos bombos
      var numeroImagenActual2 =1;
     // var segundoBomboE = ["Costa Rica","Russia","Brasil","Inglaterra","Holanda","Panama","Argentina","Africa"];
      var segundoBomboP = ["2A","2B","2C","2D","2E","2F","2G","2H"];
      function moverImagenEquipos2(movimiento) { 
      if (numeroImagenActual2 == 1 &&  movimiento =='adelante') {//inicia bombo anfitrion, el siguiente es con 7
      document.getElementById('imgCarrusel2').src = 'img/bombo7Equipos.png';
      document.getElementById('imgCarruselP2').src = 'img/posicion7.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      //recorrido para eliminar el equipo encontrado
      function eliminarE2(){
        for(var i=0, l=segundoBomboE.length; i<l; i++){
          var eliminarE = randE;
          if(segundoBomboE[i] == eliminarE){
            segundoBomboE.splice(i,1);
            segundoBomboE;
          }
        }
      }
      function eliminarP2(){
        for(var i=0, l=segundoBomboP.length; i<l; i++){
          var eliminarP = randP;
          if(segundoBomboP[i] == eliminarP){
            segundoBomboP.splice(i,1);
            segundoBomboP;
          }
        }
      }
      if (numeroImagenActual2 == 2 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel2').src = 'img/bombo6Equipos.png';
      document.getElementById('imgCarruselP2').src = 'img/posicion6.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE2();
      eliminarP2();
      if (numeroImagenActual2 == 3 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel2').src = 'img/bombo5Equipos.png';
      document.getElementById('imgCarruselP2').src = 'img/posicion5.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE2();
      eliminarP2();
      if (numeroImagenActual2 == 4 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel2').src = 'img/bombo4Equipos.png';
      document.getElementById('imgCarruselP2').src = 'img/posicion4.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE2();
      eliminarP2();
      if (numeroImagenActual2 == 5 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel2').src = 'img/bombo3Equipos.png';
      document.getElementById('imgCarruselP2').src = 'img/posicion3.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE2();
      eliminarP2();
      if (numeroImagenActual2 == 6 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel2').src = 'img/bombo2Equipos.png';
      document.getElementById('imgCarruselP2').src = 'img/posicion2.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE2();
      eliminarP2();
      if (numeroImagenActual2 == 7 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel2').src = 'img/bombo1Equipo.png';
      document.getElementById('imgCarruselP2').src = 'img/posicion1.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE2();
      eliminarP2();
      if (numeroImagenActual2 == 8 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel2').src = 'img/bomboVacio.png';
      document.getElementById('imgCarruselP2').src = 'img/bomboVacio.png';
      var randE = segundoBomboE[Math.floor(Math.random() * segundoBomboE.length)];
      var randP = segundoBomboP[Math.floor(Math.random() * segundoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "2A"){
          grupoA.push(randE);
        }
        if(randP == "2B"){
          grupoB.push(randE);
        }
        if(randP == "2C"){
          grupoC.push(randE);
        }
        if(randP == "2D"){
          grupoD.push(randE);
        }
        if(randP == "2E"){
          grupoE.push(randE);
        }
        if(randP == "2F"){
          grupoF.push(randE);
        }
        if(randP == "2G"){
          grupoG.push(randE);
        }
        if(randP == "2H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE2();
      eliminarP2();
      if (numeroImagenActual2 == 9 && movimiento == 'adelante') {
      alert ('No hay paises ni posiciones disponibles');
      }
      numeroImagenActual2 +=1;
      }
      //funcion que escoge el equipo y la posicion de los terceros bombos
      var numeroImagenActual3 =1;
     // var tercerBomboE = ["Costa Rica","Russia","Brasil","Inglaterra","Holanda","Panama","Argentina","Africa"];
      var tercerBomboP = ["3A","3B","3C","3D","3E","3F","3G","3H"];
      function moverImagenEquipos3(movimiento) { 
      if (numeroImagenActual3 == 1 &&  movimiento =='adelante') {//inicia bombo anfitrion, el siguiente es con 7
      document.getElementById('imgCarrusel3').src = 'img/bombo7Equipos.png';
      document.getElementById('imgCarruselP3').src = 'img/posicion7.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      function eliminarE3(){
        for(var i=0, l=tercerBomboE.length; i<l; i++){
          var eliminarE = randE;
          if(tercerBomboE[i] == eliminarE){
            tercerBomboE.splice(i,1);
            tercerBomboE;
          }
        }
      }
      function eliminarP3(){
        for(var i=0, l=tercerBomboP.length; i<l; i++){
          var eliminarP = randP;
          if(tercerBomboP[i] == eliminarP){
            tercerBomboP.splice(i,1);
            tercerBomboP;
          }
        }
      }
      if (numeroImagenActual3 == 2 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel3').src = 'img/bombo6Equipos.png';
      document.getElementById('imgCarruselP3').src = 'img/posicion6.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE3();
      eliminarP3();
      if (numeroImagenActual3 == 3 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel3').src = 'img/bombo5Equipos.png';
      document.getElementById('imgCarruselP3').src = 'img/posicion5.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE3();
      eliminarP3();
      if (numeroImagenActual3 == 4 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel3').src = 'img/bombo4Equipos.png';
      document.getElementById('imgCarruselP3').src = 'img/posicion4.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE3();
      eliminarP3();
      if (numeroImagenActual3 == 5 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel3').src = 'img/bombo3Equipos.png';
      document.getElementById('imgCarruselP3').src = 'img/posicion3.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE3();
      eliminarP3();
      if (numeroImagenActual3 == 6 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel3').src = 'img/bombo2Equipos.png';
      document.getElementById('imgCarruselP3').src = 'img/posicion2.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE3();
      eliminarP3();
      if (numeroImagenActual3 == 7 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel3').src = 'img/bombo1Equipo.png';
      document.getElementById('imgCarruselP3').src = 'img/posicion1.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE3();
      eliminarP3();
      if (numeroImagenActual3 == 8 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel3').src = 'img/bomboVacio.png';
      document.getElementById('imgCarruselP3').src = 'img/bomboVacio.png';
      var randE = tercerBomboE[Math.floor(Math.random() * tercerBomboE.length)];
      var randP = tercerBomboP[Math.floor(Math.random() * tercerBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "3A"){
          grupoA.push(randE);
        }
        if(randP == "3B"){
          grupoB.push(randE);
        }
        if(randP == "3C"){
          grupoC.push(randE);
        }
        if(randP == "3D"){
          grupoD.push(randE);
        }
        if(randP == "3E"){
          grupoE.push(randE);
        }
        if(randP == "3F"){
          grupoF.push(randE);
        }
        if(randP == "3G"){
          grupoG.push(randE);
        }
        if(randP == "3H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE3();
      eliminarP3();
      if (numeroImagenActual3 == 9 && movimiento == 'adelante') {
      alert ('No hay paises ni posiciones disponibles');
      }
      numeroImagenActual3 +=1;
      }
      //funcion que escoge el equipo y la posicion de los cuartos bombos
      var numeroImagenActual4 =1;
     // var cuartoBomboE = ["Costa Rica","Russia","Brasil","Inglaterra","Holanda","Panama","Argentina","Africa"];
      var cuartoBomboP = ["4A","4B","4C","4D","4E","4F","4G","4H"];
      function moverImagenEquipos4(movimiento) { 
      if (numeroImagenActual4 == 1 &&  movimiento =='adelante') {//inicia bombo anfitrion, el siguiente es con 7
      document.getElementById('imgCarrusel4').src = 'img/bombo7Equipos.png';
      document.getElementById('imgCarruselP4').src = 'img/posicion7.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
       //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      function eliminarE4(){
        for(var i=0, l=cuartoBomboE.length; i<l; i++){
          var eliminarE = randE;
          if(cuartoBomboE[i] == eliminarE){
            cuartoBomboE.splice(i,1);
            cuartoBomboE;
          }
        }
      }
      function eliminarP4(){
        for(var i=0, l=cuartoBomboP.length; i<l; i++){
          var eliminarP = randP;
          if(cuartoBomboP[i] == eliminarP){
            cuartoBomboP.splice(i,1);
            cuartoBomboP;
          }
        }
      }
      if (numeroImagenActual4 == 2 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel4').src = 'img/bombo6Equipos.png';
      document.getElementById('imgCarruselP4').src = 'img/posicion6.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE4();
      eliminarP4();
      if (numeroImagenActual4 == 3 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel4').src = 'img/bombo5Equipos.png';
      document.getElementById('imgCarruselP4').src = 'img/posicion5.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE4();
      eliminarP4();
      if (numeroImagenActual4 == 4 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel4').src = 'img/bombo4Equipos.png';
      document.getElementById('imgCarruselP4').src = 'img/posicion4.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE4();
      eliminarP4();
      if (numeroImagenActual4 == 5 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel4').src = 'img/bombo3Equipos.png';
      document.getElementById('imgCarruselP4').src = 'img/posicion3.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE4();
      eliminarP4();
      if (numeroImagenActual4 == 6 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel4').src = 'img/bombo2Equipos.png';
      document.getElementById('imgCarruselP4').src = 'img/posicion2.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE4();
      eliminarP4();
      if (numeroImagenActual4 == 7 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel4').src = 'img/bombo1Equipo.png';
      document.getElementById('imgCarruselP4').src = 'img/posicion1.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE4();
      eliminarP4();
      if (numeroImagenActual4 == 8 && movimiento == 'adelante') {
      document.getElementById('imgCarrusel4').src = 'img/bomboVacio.png';
      document.getElementById('imgCarruselP4').src = 'img/bomboVacio.png';
      var randE = cuartoBomboE[Math.floor(Math.random() * cuartoBomboE.length)];
      var randP = cuartoBomboP[Math.floor(Math.random() * cuartoBomboP.length)];
      alert("El pais " + randE + " estará en la posicion " + randP);
      //agregando datos a los grupos
      var fila="<tr><td>"+randE+"</td><td>";
      var btn = document.createElement("TR");
      btn.innerHTML=fila;
      document.getElementById(randP).appendChild(btn);
      //guardando en listas
        debugger;
        if(randP == "4A"){
          grupoA.push(randE);
        }
        if(randP == "4B"){
          grupoB.push(randE);
        }
        if(randP == "4C"){
          grupoC.push(randE);
        }
        if(randP == "4D"){
          grupoD.push(randE);
        }
        if(randP == "4E"){
          grupoE.push(randE);
        }
        if(randP == "4F"){
          grupoF.push(randE);
        }
        if(randP == "4G"){
          grupoG.push(randE);
        }
        if(randP == "4H"){
          grupoH.push(randE);
        }
        debugger;
      }
      eliminarE4();
      eliminarP4();
      if (numeroImagenActual4 == 9 && movimiento == 'adelante') {
      alert ('No hay paises ni posiciones disponibles');
      }
      numeroImagenActual4 +=1;
      }
      
    </script>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">FIFA WORLD CUP</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Raffle</div>

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
              <a class="nav-link text-uppercase text-expanded" href="raffle.php">Raffle</a>
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
        <div class="card card-inverse">
        <h2 class="card-title text-shadow text-white text-uppercase mb-0">Bombos Equipos</h2>
        <table >
        <tr>
        <td> <img id="imgCarrusel1" height="230" width="230" src="img/bomboEquipoAnfitrion.PNG" /> </td>
        <td> <img id="imgCarrusel2" height="230" width="230" src="img/bombo8Equipos.PNG"/> </td>
        <td> <img id="imgCarrusel3" height="230" width="230" src="img/bombo8Equipos.PNG"/> </td>
        <td> <img id="imgCarrusel4" height="230" width="230" src="img/bombo8Equipos.PNG"/> </td>
        </tr>
        <tr>
          <td><button id="adelante" onclick="moverImagenEquipos1('adelante')" type="button">Seleccionar equipo y posicion</button></td>
          <td><button id="adelante" onclick="moverImagenEquipos2('adelante')" type="button">Seleccionar equipo y posicion</button></td>
          <td><button id="adelante" onclick="moverImagenEquipos3('adelante')" type="button">Seleccionar equipo y posicion</button></td>
          <td><button id="adelante" onclick="moverImagenEquipos4('adelante')" type="button">Seleccionar equipo y posicion</button></td>
        </tr>
        </table>
        <br>
        <br>
        <h2 class="card-title text-shadow text-white text-uppercase mb-0">Bombos Posiciones</h2>
         <table>
        <tr>
        <td> <img id="imgCarruselP1" height="230" width="230" src="img/posicion8.PNG" /> </td>
        <td> <img id="imgCarruselP2" height="230" width="230" src="img/posicion8.PNG"/> </td>
        <td> <img id="imgCarruselP3" height="230" width="230" src="img/posicion8.PNG"/> </td>
        <td> <img id="imgCarruselP4" height="230" width="230" src="img/posicion8.PNG"/> </td>
        </tr>
        </table>
        
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <div class="card card-inverse">
          <h2 class="card-title text-shadow text-white text-uppercase mb-0">Grupos</h2>
          <table >
            <tr> <!--para que esté todo en una sola fila -->
              <td>
                <table width="100" align="center"border="1"><!--GrupoA-->
                  <thead>Grupo A</thead>
                  <tr id="grupoA">                    
                    <tbody id="1A"></tbody>
                    <tbody id="2A"></tbody>
                    <tbody id="3A"></tbody>
                    <tbody id="4A"></tbody>
                  </tr>
                </table>
              </td>
              <td>
                <table width="100" align="center"border="1"><!--GrupoB-->
                  <thead>Grupo B</thead>
                  <tr>
                    <tbody id="1B"></tbody>  
                    <tbody id="2B"></tbody>  
                    <tbody id="3B"></tbody>  
                    <tbody id="4B"></tbody>                                     
                  </tr>
                </table>                
              </td>
              <td>
                <table width="100" align="center"border="1"><!--GrupoC-->
                  <thead>Grupo C</thead>
                  <tr>
                    <tbody id="1C"></tbody>  
                    <tbody id="2C"></tbody>  
                    <tbody id="3C"></tbody>  
                    <tbody id="4C"></tbody>                                     
                  </tr>
                </table>                
              </td>
              <td>
                <table width="100" align="center"border="1"><!--GrupoD-->
                  <thead>Grupo D</thead>
                  <tr>
                    <tbody id="1D"></tbody>  
                    <tbody id="2D"></tbody>  
                    <tbody id="3D"></tbody>  
                    <tbody id="4D"></tbody>                                     
                  </tr>
                </table>                
              </td>
              <td>
                <table width="100" align="center"border="1"><!--GrupoE-->
                  <thead>Grupo E</thead>
                  <tr>
                    <tbody id="1E"></tbody>  
                    <tbody id="2E"></tbody>  
                    <tbody id="3E"></tbody>  
                    <tbody id="4E"></tbody>                                     
                  </tr>
                </table>                
              </td>
              <td>
                <table width="100" align="center"border="1"><!--GrupoF-->
                  <thead>Grupo F</thead>
                  <tr>
                    <tbody id="1F"></tbody>  
                    <tbody id="2F"></tbody>  
                    <tbody id="3F"></tbody>  
                    <tbody id="4F"></tbody>                                     
                  </tr>
                </table>                
              </td>
              <br>
              <td>
                <table width="100" align="center"border="1"><!--GrupoG-->
                  <thead>Grupo G</thead>
                  <tr>
                    <tbody id="1G"></tbody>  
                    <tbody id="2G"></tbody>  
                    <tbody id="3G"></tbody>  
                    <tbody id="4G"></tbody>                                     
                  </tr>
                </table>                
              </td>
              <td>
                <table width="100" align="center"border="1"><!--GrupoH-->
                  <thead>Grupo H</thead>
                  <tr>
                    <tbody id="1H"></tbody>  
                    <tbody id="2H"></tbody>  
                    <tbody id="3H"></tbody>  
                    <tbody id="4H"></tbody>                                     
                  </tr>
                </table>                
              </td>
            </tr>
          </table>
        </div>
        <button href='raffle.html' onclick="agregarSorteo()" text-align="right" >Guardar sorteo</button>
      </div>

<<<<<<< HEAD
      <!-- Pagination -->
      <div class="bg-faded p-4 my-4">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
      </div>

=======
>>>>>>> origin/master
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
