<?php
 require("protecao.php")


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar nome</title>
</head>
<body>
        <h1> Deletar nome</h1>

        <p>Tem certeza que deseja deletar o nome: </p>

        <Form action ="" method = "post">
            <input type = "text" value = "Apagar definitivo">
            <input type="submit" value= "deletar">
        

            <a  href = "editar_nome.php">Editar nome</a>
            <a  href = "cadastar_nome.php">Cadastar nome</a>
            <a  href = "index.php">Voltar</a>
    </Form>
</body>
</html>