<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>explode()</title>
</head>
<body>
<?php
$frase = "Maçã,Banana, Laranja";
$frutas = explode(",", $frase);
print_r($frutas);
?>
</body>
</html>