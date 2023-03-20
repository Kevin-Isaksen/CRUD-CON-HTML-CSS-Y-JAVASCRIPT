<?php

include("conection.php");
$con = conectar();

$idAutor = $_POST['idAutor'];
$Nombre = $_POST['Nombre'];
$ApellidoPaterno = $_POST['ApellidoPaterno'];


$sql = "INSERT INTO autores(idAutor, Nombre, ApellidoPaterno) VALUES('$idAutor','$Nombre','$ApellidoPaterno')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: CRUD.php");
    
}else {
}

?>