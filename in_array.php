<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>in_array()</title>
</head>
<body>
<?php
$frutas = ["Maçã","Banana","Mamão"];
$buscar = "Banana";
if (in_array($buscar, $frutas)) {
    echo $buscar . " está no array";
} else {
    echo $buscar . " não está no array";
}
?>
</body>
</html>