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
        <label id="t_label"><b>Login</b></label><br>
        <input type = "text" name ="login" maxlength="10" required placeholder="Nome Usuário" 
        id="caixa"><br><br>
        <label id="t_label"><b>E-mail</b></label><br>
        <input type = "text" name ="login" maxlength="50" required placeholder="E-mail" id="caixa">
        <br><br>
        <label id="t_label"><b>Senha</b></label><br>
        <input type="password" name="pass" maxlength="20" required id="caixa">
        <br>
        <input type="password" name="pass" maxlength="20" required id="caixa">
        <br>
        <input type="submit" value="Cadastrar" id="caixa"><br>
        <p id="t_rodape"><a href="http://localhost/HM-Help-Me/index.php" id="t_aux">Voltar</a></p>
    </form>
</body>
</html>