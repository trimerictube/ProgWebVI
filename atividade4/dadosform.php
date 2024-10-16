<!-- dadosform.php -->

<?php
// Definir o fuso horário padrão para São Paulo
date_default_timezone_set('America/Sao_Paulo');

// Verificando se os dados foram enviados pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    // Validações dos dados
    if (empty($nome) || empty($cpf) || empty($email)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    } elseif (strlen($cpf) != 11) {
        echo "O CPF deve conter exatamente 11 caracteres.";
        exit;
    }

    // Obtendo a data atual do servidor
    $dataCadastro = date('d/m/Y H:i:s');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <!-- Incluindo o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Dados Cadastrados</h1>

        <!-- Exibindo os dados cadastrados -->
        <table class="table table-bordered">
            <tr>
                <th>Nome</th>
                <td><?php echo $nome; ?></td>
            </tr>
            <tr>
                <th>CPF</th>
                <td><?php echo $cpf; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Data de Cadastro</th>
                <td><?php echo $dataCadastro; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
