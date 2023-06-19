<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('https://images4.alphacoders.com/556/556449.jpg');
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
        <h2>LOGIN</h2>
        <form id="login" action="logado.php" method="POST">
            Login: <input type="text" name="login" required><br><br>
            Senha:<input type="password" name="senha" required><br><br>
            <input type="submit" id="entrar" value="Entrar">
        </form>
    </div>
</body>
</html>