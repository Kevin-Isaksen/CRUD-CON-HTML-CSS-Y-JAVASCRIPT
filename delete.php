<?php

include("conection.php");
$con = conectar();

$idAutor = $_POST['idAutor'];
$Nombre = $_POST['Nombre'];
$ApellidoPaterno = $_POST['ApellidoPaterno'];

if ($idAutor = $_POST['idAutor']) {
    $sql = "DELETE FROM autores  WHERE idAutor = $idAutor";
    $query = mysqli_query($con,$sql);    
} elseif ($Nombre = $_POST['Nombre']) {
    $sql = "DELETE FROM autores  WHERE  Nombre = $Nombre";
    $query = mysqli_query($con,$sql); 
} elseif ($ApellidoPaterno = $_POST['ApellidoPaterno']) {
    $sql = "DELETE FROM autores  WHERE  ApellidoPaterno = $ApellidoPaterno";
    $query = mysqli_query($con,$sql); 
}

    if($query){
        Header("Location: CRUD.php");
    }

?>