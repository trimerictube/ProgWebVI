<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo Links Absolutos e Relativos</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        a {
            font-size: 20px;
            text-decoration: none;
            color: #2980b9;
            display: block;
            margin: 10px 0;
        }
        a:hover {
            color: #e74c3c;
        }
    </style>
</head>
<body>

<h1>Exibindo Links Absolutos e Relativos</h1>

<?php
    echo "<a href='https://www.google.com' target='_blank'>Google (URL Absoluta)</a>";
    echo "<a href='https://www.w3schools.com' target='_blank'>W3 School (URL Absoluta)</a><br>";
    echo "<a href='exer2/green.php'>Página green (URL Relativa)</a>";
    echo "<a href='exer2/red.php'>Página red (URL Relativa)</a>";
?>

</body>
</html>
