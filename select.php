<?php

include("conection.php");
$con = conectar();
$idAutor = $_POST['idAutor'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SELECT TABLE AUTHORS</title>
</head>
<body>
    <header class="titulo">
        <h2>AUTHOR INFORMATION</h2>
    </header>
    <div class = "row d-flex justify-content-center">
        <div class = "col-md-8">
            <table class = "table table-hover table-dark">
                <thead>
                    <tr>
                        <th>id Autor</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM autores WHERE idAutor = $idAutor";
                    $result_autor = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result_autor)) { ?>
                    <tr>
                        <td><?php echo $row ['idAutor'] ?></td>
                        <td><?php echo $row ['Nombre'] ?></td>
                        <td><?php echo $row ['ApellidoPaterno'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>