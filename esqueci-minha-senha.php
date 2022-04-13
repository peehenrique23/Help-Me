<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-main.css">
    <title>Document</title>
</head>
<body>
    <h1 id="t_central">HELP ME</h1>
    <form action=alterabd.php method="post" name="login" enctype="multipart/form-data" id="b_login">
        <label class="t_label"><b>Login</b></label><br>
        <input type = "text" name ="login" maxlength="50" required placeholder="Nome Usuário" class="caixa" onblur="validauser2()" id="user">
        <p id="res-login" style="color: red;" style="font-family:Arial, Helvetica, sans-serif"></p>
        <label class="t_label"><b>Senha</b></label><br>
        <input type="password" name="pass" maxlength="20" required class="caixa">
        <br><br>
        <input type="submit" value="Alterar" class="caixa"><br>
        <p class="t_rodape"><a href="http://localhost/HM-Help-Me/index.php" class="t_aux">Voltar</a></p>
        <script src="http://localhost/HM-Help-Me/script.js"></script>
    </form>
</body>
</html> 