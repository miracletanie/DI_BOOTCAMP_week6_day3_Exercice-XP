<?php
if (!empty($_GET)) {

    $longueur = $_GET["longue"];
    $largeur = $_GET["large"];
    function rectangle($longueur, $largeur)
    {
        return $longueur * $largeur;
    }

    $aire = rectangle($longueur, $largeur);

    echo "L'aire du rectangle est : " . $aire . " cm²";

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
    <form action=""><br>
        <label for="">La longueur du rectangle</label>
        <input type="number" name="longue"><br><br>
        <label for="">La largeur du rectangle</label>
        <input type="number" name="large"><br>
        <input type="submit">


    </form>
</body>
</html>
