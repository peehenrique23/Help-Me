<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-main.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
<h1 id="t_central">HELP ME</h1>
    <form action=inseribd.php method="post" name="login" enctype="multipart/form-data" id="b_login">
        <label class="t_label"><b>Login</b></label><br>
        <input type = "text" name ="login" maxlength="10" required placeholder="Nome Usuário" 
        class="caixa"><br><br>
        <label class="t_label"><b>E-mail</b></label><br>
        <input type = "text" name ="login" maxlength="50" required placeholder="E-mail" class="caixa">
        <br><br>
        <label class="t_label"><b>Senha</b></label><br>
        <input type="password" name="pass" maxlength="20" required class="caixa" id="pass1">
        <br>
        <input type="password" name="pass" maxlength="20" required class="caixa" id="pass2">
        <br>
        <p id="message"></p>
        <input type="submit" value="Cadastrar" class="caixa" id="cad"><br>
        <p class="t_rodape"><a href="http://localhost/HM-Help-Me/index.php" class="t_aux">Voltar</a></p>
    </form>

    <script src="http://localhost/HM-Help-Me/script.js"></script>
</body>
</html>