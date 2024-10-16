<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação com Imagem</title>
</head>
<body>
    <?php
    // Capturar o horário do computador
    $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $hora = $datetime->format('H');

    // Lógica para exibir a saudação e a imagem
    if ($hora >= 0 && $hora <= 12) {
        echo "<h1>Bom dia!</h1>";
        echo "<img src='imagens/bom_dia.jpg' alt='Bom dia' style='width:300px; height:auto;'>";
    } elseif ($hora > 12 && $hora < 18) {
        echo "<h1>Boa tarde!</h1>";
        echo "<img src='imagens/boa_tarde.jpg' alt='Boa tarde' style='width:300px; height:auto;'>";
    } elseif ($hora >= 18 && $hora <= 24) {
        echo "<h1>Boa noite!</h1>";
        echo "<img src='imagens/boa_noite.jpg' alt='Boa noite' style='width:300px; height:auto;'>";
    } else {
        echo "<h1>Horário inválido</h1>";
    }
    ?>
</body>
</html>
