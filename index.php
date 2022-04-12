<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-main.css">
    <title>Help Me</title>
</head>
<body>
    <h1 id="t_central">HELP ME</h1>
    <form action=inseribd.php method="post" name="login" enctype="multipart/form-data" id="b_login">
        <label id="t_label"><b>Login</b></label><br>
        <input type = "text" name ="login" maxlength="50" required placeholder="Email/Nome Usuário" id="caixa">
        <p><a href="">Esqueceu seu login?</a></p>
        <br>
        <label id="t_label"><b>Senha</b></label><br>
        <input type="password" name="pass" maxlength="20" required id="caixa">
        <p><a href="">Esqueceu sua senha?</a></p>
        <br>
        <input type="submit" value="Entrar" id="caixa">
        <p>Não tem conta? <a href="" id="t_label">CADASTRE-SE</a></p>
    </form>
</body>
</html>