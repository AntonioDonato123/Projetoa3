<?php
session_start();
?>
<html>
<style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('https://images8.alphacoders.com/110/thumb-1920-1102284.jpg');
                background-size: cover;
                background-position: center;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
      }
      div{
        background-color: rgba(0, 0, 0,0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
      }
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
      }
    </style>
<body>
    <div>
        <?php if (isset($_SESSION['nome'])) {
            echo "Olá, " . $_SESSION['nome'] . "<br><br>";
            if ($_SESSION['nome'] === 'administrador') {
                ?>
                <a href="cadastro.php">Cadastrar Usuário</a><br><br>
                <a href="listar.php">Listar Usuários</a><br><br>
                <?php
            }
            ?>
            <a href="alterarsenha.php">Alterar Senha</a><br><br>
            <a href="logout.php">Sair</a><br>
            <?php
        } else {
            ?>
            Olá, visitante.<br>
            Realize o <a href="login.php">Login</a>
            <?php
        }
        ?>
    </div>
</body>
</html>