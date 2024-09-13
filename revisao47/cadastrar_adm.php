<?php
 require("conexao.php")

    if(isset($_POST["bt_login"])){
        $login = $_POST ["bt_login"]
        $senha = $_POST["bt_senha"];
    
        $stmt = $mysqli-> prepare ("INSERT INTO tabela_adm (login) VALUES (?)");
        $stmt -> bind_param("ss", $login, $senha);
    
    
        $stmt ->execute();
        $stmt-> close();
    }

 

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar - ADM</title>
</head>
<body>
    <h1> Cadastar - ADM</h1>
    <Form action ="" method = "post">
            <label for ="">Escreca o login</label>
            <input type = "text" name= "bt_login">

            <label for ="">Escreva a senha:</label>
            <input type = "Password" name="bt_senha">

            <label for ="">Repta a senha::</label>
            <input type = "Password" name= "bt_rsenha">

            <input type="sumit">
            <a  href = "index.php">Voltar</a>
    </Form>
</body>
</html>