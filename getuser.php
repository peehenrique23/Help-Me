<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'conexao.php';

        $userfield = $_GET ['q'];

        $sql = "SELECT * FROM usuarios WHERE loginn = '{$userfield}'";

        $teste = mysqli_query ($conexao, $sql);

        while($row = mysqli_fetch_array($teste)) {
            echo "User já cadastrado";
        }

        mysqli_close($conexao);
    ?>
</body>
</html>