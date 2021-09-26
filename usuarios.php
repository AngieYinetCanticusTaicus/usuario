<?php
require "controlador/conexionBase.php";
require "modelo/usuario.php";

$objConexion=Conectarse();

$objUsuario = new usuario();

$resultado=$objUsuario->registrarUsuario();


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <script src="../js/visualizaOculta.js"></script>
        
        <title>Usuarios</title>
    </head>
    <body>

        <!--NAV-->
        <div class="row justify-content-md-center div-nav-2">
            <div class="btn-group">
                <button type="button" class="btn btn-dark-1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        onClick="visualizaOculta('Registrar')">
                    Registrar
                </button>
                <button type="button" class="btn btn-dark-1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        onClick="visualizaOculta('Listado')">
                    Consultar
                </button>
            </div>
        </div>
        <!--NAV-->


        <!--FORMULARIO REGISTRAR-->
       <div id="Registrar" class="container">
            <h1>Registrarusuario</h1>
            <form action="../controlador/validarusuario.php" method="post">

                <div class="form-row" >
                    <div class="form-group col-md-6" >
                        <h2>idUsuario</h2>
                        <input type="text" name="idUsuario" class="form-control" placeholder="Ingrese el nombre del usuario" id="idUsuario">
                    </div>
                    <div class="form-group col-md-6" >
                        <h2>nombre</h2>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" id="nombre">
                    </div>
                </div>
                <div class="form-row" >
                    <div class="form-group col-md-6" >
                        <h2>apellidos</h2>
                        <input type="text" name="apellidos" class="form-control" placeholder="Ingrese el apellido del usuario" id="apellidos">
                    </div>
                    <div class="form-group col-md-6" >
                        <h2>telefono</h2>
                        <input type="text" name="telefono" class="form-control" placeholder="Ingrese el telefono" id="telefono">
                    </div>
                </div> 
                <button type="submit" class="btn btn-ActReg">Registrar</button>
            </form>
        </div>
        <!--FORMULARIO REGISTRAR-->


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>


    </body>
</html>
