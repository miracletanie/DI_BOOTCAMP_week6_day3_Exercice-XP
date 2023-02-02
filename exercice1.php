<?php

if(!empty($_GET)){
$age = $_GET['age'];
function votre($age) {
     
    return $age >= 18;
}

if (votre($age)) {
    echo "Vous avez le droit de voter.";
} else {
    echo "Vous n'avez pas le droit de voter.";
}
   
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
        <label for="">Entrer votre age</label>
    <input type="number" name="age">
    <input type="submit">
</form>
</body>
</html>