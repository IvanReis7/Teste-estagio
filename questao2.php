<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:#DDA0DD;
    }
    h1{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }
    #codigo{
        height: 60px;
        width: 60px;
        background-color: black;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        margin-left: 45%;


    }
</style>
<body>

 <h1>O Resultado da soma dos numeros pares do array é:</h1>
<div id="codigo">
<?php
function sumEvenNumbers($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num % 2 == 0) {
            $sum += $num;
        }
    }
    return $sum;
}
echo sumEvenNumbers([1, 2, 3, 4, 5, 6]); // Saída esperada: 12
?>
</div>