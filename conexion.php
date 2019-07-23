<?php  
    session_start(); #Inicia una secion o reanuda una exixtente
    $servername = "localhost";
    $username = "root";
    $password = "1234567890z";
    $database = "sistema";
    $port = "3306";
    $conn = mysqli_connect($servername, $username, $password, $database, $port);
        if (!$conn) {
        die("Conexion no establecida: " . mysqli_connect_error());
        }
        #mysqli_connect_error()
        #devuelve una cadena con la descripcion del ultimo error de conexión
?>