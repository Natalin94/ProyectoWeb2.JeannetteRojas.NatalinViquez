function obtenerXHR()
{  
    // 19 de febrero de 2009 
    req = false; 
    if(window.XMLHttpRequest) 
        { 
            req = new XMLHttpRequest(); 
        }     
    else 
        { 
            if(ActiveXObject) 
                { 
                    //definir el vector 
                    var vectorVersiones = ["MSXML2.XMLHttp.5.0", "MSXML2.XMLHttp.4.0", "MSXML2.XMLHttp.3.0","MSXML2.XMLHttp", "Microsoft.XMLHttp"]; 
                    //lo recorremos para instanciar cada uno de ellos 
                    for(var i=0; i<vectorVersiones.lengt; i++) 
                        { 
                            try 
                                { 
                                    req = new ActiveXObject(vectorVersiones[i]); 
                                    return req; 
                                } 
                            catch(e) 
                                {} 
                        } 
                } 
        } 
    return req; 
}; 

function agregarEquipos()
{         
  var country = document.getElementById("country").value;
  var confederation = document.getElementById("confederation").value;
  var points = document.getElementById("points").value;
  var flag = document.getElementById("flag").value;
 

//IMPLEMENTACION DEL PHP
  var peticion = obtenerXHR();
   
  url="../proyectoWeb/php/agregarEquipos.php?tipo=insertar";
  url+="&country="+country;
  url+="&confederation="+confederation;
  url+="&points="+points;
  url+="&flag="+flag;

  peticion.open("GET", url , true); 
  peticion.onreadystatechange=function ()
    {debugger;
      if (peticion.readyState==4)
      {
        if (peticion.status==200)
        {
          if (peticion.responseText===1)
          {
            alert ("si se pudo insertar");
          }
        }
      }
    };
    
  peticion.send(null);
  debugger;
  
  document.getElementById("form1").reset();
}

function actualizarEquipos()
{
          
  var country = document.getElementById("country").value;
  var points = document.getElementById("points").value;
  var flag = document.getElementById("flag").value;
 

//IMPLEMENTACION DEL PHP
  var peticion = obtenerXHR(); 
  url="../proyectoWeb/php/actualizarEquipos.php?tipo=insertar";
  url+="&country="+country;
  url+="&points="+points;
  url+="&flag="+flag;
debugger
  peticion.open("GET", url , true); 
  peticion.onreadystatechange=function ()
    {
      if (peticion.readyState===4)
      {
        if (peticion.status===200)
        {
          if (peticion.responseText===1)
          {
            alert ("si se pudo actualizar");
          }
        }
      }
    }
    ;
  peticion.send(null);

  document.getElementById("form1").reset();
}


function agregarUsuario()
{         
  var id = document.getElementById("idtxt").value;
  var name = document.getElementById("nombretxt").value;
  var lastname = document.getElementById("apellidostxt").value;
  var age = document.getElementById("edadtxt").value;
  var password = document.getElementById("contrasennatxt").value;

//IMPLEMENTACION DEL PHP
  var peticion = obtenerXHR();
   
  url="../proyectoWeb/php/iniciarSesionFuncion.php?tipo=insertarU";
  url+="&id="+id;
  url+="&name="+name;
  url+="&lastname="+lastname;
  url+="&age="+age;
  url+="&password="+password;

  peticion.open("GET", url , true); 
  peticion.onreadystatechange=function ()
    {debugger;
      if (peticion.readyState==4)
      {
        if (peticion.status==200)
        {
          if (peticion.responseText===1)
          {
            alert ("si se pudo insertar");
          }
        }
      }
    };
    
  peticion.send(null);
  debugger;
  
  document.getElementById("form1").reset();
}