<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: login.php"); 
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexao = mysqli_connect('localhost', 'root', '', 'projetoa3', '3306');

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }

    $novasenha = $_POST['nova_senha'];
    $confirmarsenha = $_POST['confirmar_senha'];

    if ($novasenha !== $confirmarsenha) {
        die("A nova senha e a confirmação da senha não correspondem.");
    }

    $nomeUsuario = $_SESSION['nome']; 
    $senhaHash = $novasenha;

    $sql = "UPDATE login SET senha = '$senhaHash' WHERE nome = '$nomeUsuario'";
    if (mysqli_query($conexao, $sql)) {
        $successMessage = "Senha atualizada com sucesso";
    } else {
        $errorMessage = "Erro ao atualizar a senha: " . mysqli_error($conexao);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
}
?>

<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('https://images5.alphacoders.com/112/1123013.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    div {
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 110px;
        border-radius: 10px;
        color: white;
    }

    .success-message {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        color: black;
        text-align: center;
        margin-bottom: 20px;
        position: absolute;
        top: 10px;
        left: 10px;
    }
</style>

<body>
    <div>
        <h1>Alterar Senha</h1>
        <form method="POST" action="alterarsenha.php">
            <label for="nova_senha">Nova senha:</label>
            <input type="password" name="nova_senha" id="nova_senha" required>

            <label for="confirmar_senha"><br><br>Confirmar nova senha:</label>
            <input type="password" name="confirmar_senha" id="confirmar_senha" required><br><br>

            <input type="submit" value="Alterar Senha">
        </form>
        
        <?php
        if (isset($successMessage)) {
            echo '<div class="success-message">' . $successMessage . '</div>';
        }
        ?>
        
        <a href="login.php">Voltar para a página de login</a>
    </div>
</body>
</html>
