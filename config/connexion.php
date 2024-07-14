<?php

// Definimos las variables para la conexion de nuestra base de datos llamada Sistema-Crub-Basico-fdcye

$host ="localhost"; // 
$username = "root";
$password="";
$database = "Sistema-Crub-Basico-fdcye";  // El Nombre de la base de dato a la vamos a conectar

//  Creamos una Conexion a nuestra base de datos 

$connexion = new mysqli($host,$username,$password,$database);


// Verificamos si se conecto a nuestra base de datos

if($connexion->connect_error){
    // Si Hay un error en la conexion de nuestra base de datos se termina el script y se muestra el mensaje de error 
    die("conexion fallida: ".$connexion->connect_error);
    // Si la conexion de nuestra base de datos es correcta , el script continuara ejecutándose sin problemas 
}

?>