<?php

include("conection.php");
$con = conectar();

$idAutor = $_POST['idAutor'];
$Nombre = $_POST['Nombre'];
$ApellidoPaterno = $_POST['ApellidoPaterno'];

$sql = "UPDATE autores SET  Nombre = '$Nombre', ApellidoPaterno = '$ApellidoPaterno' WHERE idAutor = '$idAutor'";
$query = mysqli_query($con,$sql);

    if($query){
        Header("Location: CRUD.php");
    }

?>