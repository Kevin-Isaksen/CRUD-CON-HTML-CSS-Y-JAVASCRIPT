<?php include("conection.php")?>


<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>CRUD base de datos autores</title>
</head>
<body>
    <!-- Titulo -->
    <header class="titulo">
        <h2>CRUD DATABASE AUTHORS</h2>
    </header>
    <!-- Formulario insertar -->
    <form action = "insert.php" method = "POST" class = "Formulario_1">
        <h4>Insert information in the authors table (CREATE)</h4>
        <input class = "campos" type = "number" name = "idAutor" id = "idAutor" placeholder = "Enter author id">
        <input class = "campos" type = "text" name = "Nombre" id = "Nombre" placeholder = "Enter the name of the author">
        <input class = "campos" type = "text" name = "ApellidoPaterno" id = "Apellido Paterno" placeholder = "Enter the author's last name">
        <input class = "btn_insertar" type = "submit" value = "Create">
    </form>
    <!-- Formulario mostrar -->
    <form action = "select.php" method = "POST" class = "Formulario_2">
        <h4>Shows information from the authors table (READ)</h4>
        <input class = "campo_mostrar" type = "number" name = "idAutor" id = "id Autor" placeholder = "Enter author id">
        <input class = "btn_mostrar" type = "submit" value = "Read">
    </form>
    <!-- Formulario modificar -->
    <form action = "update.php" method = "POST" class = "Formulario_3">
        <h4>Update author table information (UPDATE)</h4>
        <input class = "campos" type = "number" name = "idAutor" id = "id Autor" placeholder = "Enter author id">
        <input class = "campos" type = "text" name = "Nombre" id = "Nombre" placeholder = "Enter the name of the author">
        <input class = "campos" type = "text" name = "ApellidoPaterno" id = "Apellido Paterno" placeholder = "Enter the author's last name">
        <input class = "btn_modificar" type = "submit" value = "Update">
    </form>
    <!-- Formulario eliminar -->
    <form action = "delete.php" method = "POST" class = "Formulario_4">
        <h4>Delete information from the authors table (DELETE)</h4>
        <input class = "campos" type = "number" name = "idAutor" id = "id Autor" placeholder = "Enter author id">
        <input class = "campos" type = "text" name = "Nombre" id = "Nombre" placeholder = "Enter the name of the author">
        <input class = "campos" type = "text" name = "ApellidoPaterno" id = "Apellido Paterno" placeholder = "Enter the author's last name">
        <input class = "btn_eliminar" type = "submit" value = "Delete">
    </form>
</body>
</html>