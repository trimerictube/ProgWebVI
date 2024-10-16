<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Relatório de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado Relatório de Clientes</h1>

    <?php
        // Criando um array associativo com código e nome dos clientes
        $clientes = [
            ["codigo" => 1, "nome" => "João Silva"],
            ["codigo" => 2, "nome" => "Maria Oliveira"],
            ["codigo" => 3, "nome" => "Pedro Souza"],
            ["codigo" => 4, "nome" => "Ana Pereira"],
            ["codigo" => 5, "nome" => "Lucas Costa"]
        ];
    ?>

    <!-- Exibindo o array em uma tabela HTML -->
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Iterando sobre o array para preencher as linhas da tabela
                foreach ($clientes as $cliente) {
                    echo "<tr>";
                    echo "<td>{$cliente['codigo']}</td>";
                    echo "<td>{$cliente['nome']}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
