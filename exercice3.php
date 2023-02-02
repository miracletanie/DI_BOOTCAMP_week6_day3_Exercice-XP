<?php
if(!empty($_GET)){
    $nombre = $_GET['nombre'];
function test($nombre) {
    return ($nombre > 30) ? "Supérieur à 30" : (($nombre > 20) ? "Supérieur à 20" : (($nombre > 10) ? "Supérieur à 10" : (($nombre == 10) ? "egal à 10" : "Inférieur à 10" )));
}
echo $nombre ." est ".test($nombre);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">Entrer un nombre</label><br>
        <input type="number" name="nombre">
        <input type="submit" >
    </form>
</body>
</html>