<?php

    //require_once 'init.php';
    //var_dump($_POST); 
    //$response = $recaptcha->verify($_POST['g-recaptcha-response']);

    //if($response->isSuccess()){
        //conexion con la base de datos


$usuario = "snarod8_db";
$contrasena = "Red137950137955"; 
$servidor = "localhost";
$basededatos = "snarod8_db";
$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("Upps! No se ha podido conectar al servidor de Base datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

//Obtenemos los valores del formulario
        $nombres = $_POST['nombresCliente'];   
        $apellidos = $_POST['apellidosCliente'];             
        $email=$_POST['emailCliente'];
        $telefono=$_POST['telefonoCliente'];
        $mensaje=$_POST['mensajeCliente'];
        
        $req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($telefono)*strlen($mensaje)) or die("No se han encontrado todos los campos llenos<br><br><a href='..index.html'>volver</a>"); 

$consulta = "INSERT INTO clientes VALUES ('','$nombres','$apellidos','$email','$telefono','$mensaje')";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	
	echo'<h2>Registro Completo</h2><a href="..\index.html">Volver</a>';
    //} else{
       // echo'<h2>Verifique la Captcha</h2><a href="..\index.html">Volver</a>';
   // }

   ?>