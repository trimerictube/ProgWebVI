<!-- cadclienteself.php -->

<?php
// Variáveis para armazenar os dados do formulário e mensagens de erro
$nome = $cpf = $email = "";
$mensagemErro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    // Validações dos dados
    if (empty($nome) || empty($cpf) || empty($email)) {
        $mensagemErro = "Todos os campos são obrigatórios.";
    } elseif (strlen($cpf) != 11) {
        $mensagemErro = "O CPF deve conter exatamente 11 caracteres.";
    } else {
        // Obtendo a data atual do servidor
        $dataCadastro = date('d/m/Y H:i:s');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente (Auto-processamento)</title>
    <!-- Incluindo o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Cadastro de Cliente</h1>

        <!-- Exibindo mensagem de erro, se houver -->
        <?php if ($mensagemErro): ?>
            <div class="alert alert-danger"><?php echo $mensagemErro; ?></div>
        <?php endif; ?>

        <!-- Formulário para cadastro de cliente -->
        <form action="cadclienteself.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf; ?>" maxlength="11" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <!-- Exibindo os dados cadastrados, se não houver erro -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$mensagemErro): ?>
            <h2 class="mt-5">Dados Cadastrados</h2>
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
        <?php endif; ?>
    </div>
</body>
</html>
