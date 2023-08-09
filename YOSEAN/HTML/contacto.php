<?php
  $sevidor="localhost";//creamos la variable y damos valor dependiendo a la opcion
  $usuario="root";//creamos la variable y damos valor dependiendo a la opcion
  $clave="";//creamos la variable y damos valor dependiendo a la opcion
  $baseDeDatos="dando";//creamos la variable y damos valor dependiendo a la opcion

  $enlace = mysqli_connect ($sevidor, $usuario, $clave,  $baseDeDatos);//realizamos una varible llamada enlace donde damos instrucciones para conectar nuestro documento a la base de datos creada en el servisor 
  
  ?>

<!DOCTYPE html><!--Tipo de documento-->
<html lang="es"><!--Idioma pagina-->
<head><!--Cabeza del documento-->
    <meta charset="UTF-8"><!--Comando que nos acepte caracteres especiales-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--nos dice la compatibilidaad con el navegador-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--la vista de la pagina en distintos dispoditivos -->
    <meta name="descripcion" content="YOSEAN Es una tienda que ofrece productos a mayoreo y menudeo de muy buena calidad a un muy buen precio."><!--Breve descripcion de la pagina -->
    <meta name="keywords" content="ropa, mayoreo, menudeo, playeras,tienda de ropa, pantalones, playeras dama, playeras caballero, calidad, buen precio, short caballero,ofertas,cuello redondo"><!--palabras clave pagina-->
    <meta name="author" content="José Ángel Melchor Reyes"><!--nombre autor-->
    <meta name="copyrigth" content="José Ángel Melchor Reyes"><!--Derecho sobre el codigo fuente-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><!--conectamos las apis de las diferentes fuentes que tiene google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!--conectamos las apis de las diferentes fuentes que tiene google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet"><!--ponemos el url del estilo-->
    <link rel="stylesheet" href="../CSS/header.CSS"><!--conectamos nuestrod estilos css a nuestro documento HTML-->
    <link rel="stylesheet" href="../CSS/temach.css"><!--conectamos nuestrod estilos css a nuestro documento HTML-->
    <title>Contacto</title><!--TITULO DE LA PAGINA-->
    <link rel="shortcut icon" href="../Imagenes/piramide.png" type="image/x-icon"></link:favicom><!--ponemos nuestro logo en el titulos de la pagina--> 
</head><!--CIERRE CABEZA DE DOCUMENTO-->


<body><!--ABRIMOS EL CUERPO DEL DOCUEMNTO-->
    <header>
        <div class="menu container">

            <div class="logo"><!--defim}nimos nuestro logo como div y le ponemos nombre a su clase-->
                <img src="../Imagenes/Logo.png" alt="logo empresa"><!--agregamos la imagen y ponemos en alt que es la laternativa poir si en algun momento la imagen no carga la referencia que es un logo-->
    
            </div><!--cerramos div-->
            <input type="checkbox" id="menu"><!--entrada tipo checkbox-->
            <label for="menu"><img class="menu-icono" src="../images/menu.png"></label><!--imagen del menu cuando se haga responsivo-->
            <nav class="navbar"><!--navegacion-->
                <ul><!--lista para la barra de navegaccion-->
                    <li><a href="http://localhost/YOSEAN/HTML/index_responsive.html">Inicio</a></li><!--opcion para navegacion-->
                    <li><a href="http://localhost/YOSEAN/HTML/PRODUCTOS.HTML">Productos</a></li><!--opcion para navegacion-->
                    <li><a href="http://localhost/YOSEAN/HTML/contacto.php#">Contacto</a></li><!--opcion para navegacion-->
                </ul><!--cerramos lista-->
            </nav><!--cerramos nav-->


        </div><!--cerramos div-->
    </header><!--cerramos nuestro encabezado-->

    <main><!--abrimos una etiqueta main para poner el contenido principal de la pagian web-->
        
 
        <div class="formulario"><!--CREAMOS UN DIV PARA DIVIDIR EL FORMULARIO-->
            <form action="#" name="ejemplo" method="post" class="form"><!--abrimos la etiqueta para ralizar el formulario con el metodo post -->
            <h2 class="form_title">Registrate</h2><!--titulo formulario-->
                <p class="form_parrafo">Para enviarte nuevas actualizaciones de la tienda</p><!--texto-->
            <div class="form_container"><!--abrimos div-->
                
 
                
                <div class="form_group"><!--abrimos div-->

                    <input type="text" id="name" name="nombre" class="form_input" placeholder=""  ><!--entrda tipo texto de parte de usuario-->
                    <label for="nombreyapellido" for="name" class="form_label">Nombre: </label><!--etiqueta label para mostrar al usuario el campo a rellenar -->
                    <span class="form_line"></span><!--span para poner linea -->
                    
                </div><!--cerramos div-->

                <div class="form_group"><!--abrimos div-->
                    <input type="email" id="email" name="correo" class="form_input" placeholder="" ><!--entrda tipo texto de parte de usuario-->
                    <label for="correoelectronico" for="email" class="form_label">Correo Electronico: </label><!--etiqueta label para mostrar al usuario el campo a rellenar -->
                    <span class="form_line"></span><!--span para poner linea -->
                    
                </div><!--cerramos div-->

                <div class="form_group"><!--abrimos div-->
                    <input type="tel"  id="tel"  name="telefono" class="form_input" placeholder="" ><!--entrda tipo texto de parte de usuario-->
                    <label for="telefono" for="tel" class="form_label">Telefono</label><!--etiqueta label para mostrar al usuario el campo a rellenar -->
                    <span class="form_line"></span><!--span para poner linea -->
                    
                </div><!--cerramos div-->

                <div class="form_group"><!--abrimos div-->
                    <textarea id="mensaje" cols="70" name="mensaje" rows="1" class="form_input" placeholder="" ></textarea required><!--creamos una area de texto para que el ususario ingrese algun mensaje -->
        
                    <label for="mensaje" class="form_label">Mensaje: </label><!--etiqueta label para mostrar al usuario el campo a rellenar -->
                    
                    
                </div><!--cerramos div-->
                
                <div class="form_group"><!--abrimos div-->
                    <legend class="contactar" >¿Como le gustaria que lo contactemos?</legend><!--creamos un legend para el titulos de este campo-->
                    <label for="radio-email" class="conta"><input type="radio"  name="contacto" value="email" id="radio-email" >Email</label><!--etiqueta label para mostrar al usuario el campo a rellenar -->
            
            
                    <label for="radio-whatsapp" class="conta" ><input type="radio" name="contacto" value="Whatsapp" id="radio-whatsapp" checked  >Whatsapp</label><!--etiqueta label para mostrar al usuario el campo a rellenar -->
            
            
                    <label for="radio-telefono" class="conta"><input type="radio" name="contacto" value="telefono" id="radio-telefono"  >Telefono</label><!--etiqueta label para mostrar al usuario el campo a rellenar -->
                   
                </div><!--cerramos div-->
        
                
        
                <div class="form_group"><!--abrimos div-->
                    <legend class="contactar">¿En cual horario prefiere ser atendido?</legend><!--creamos un legend para el titulos de este campo-->
                    <select name="horario" class="opciones"><!--etiqueta donde decimos que el usuario selecionara una opcion -->
                    <option>Mañana</option><!--opcion a elegir-->
                    <option>Tarde</option><!--opcion a elegir-->
                    <option>Noche</option><!--opcion a elegir-->
                    </select><!--cerramos la etiqueta-->

                   

                </div><!--cerramos div-->
                
        
                    <input type="submit" value="Enviar"  class="form_submit"  name="registro"><!--cramos un boton con la etiqueta input-->

                    
               
            </div><!--cerramos div-->
 
         </div><!--cerramos div para el formulario-->
         </form><!--cerrramos formularios-->
        
 
 
 
     
         
     </main><!--cerramos nuestro main-->
     
 </body><!--cerramos nuestro body-->
 </html><!--cerramos nuestro documento HTML-->
 
<?php
     if(isset($_POST['registro'])){

        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $mensaje=$_POST['mensaje'];
        $horario=$_POST['horario'];
        $contacto=$_POST['contacto'];

        $insertarDatos = "INSERT INTO datos Values('','$nombre', '$correo', '$telefono',  '$mensaje', '$horario', '$contacto')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
     }
  ?>
  