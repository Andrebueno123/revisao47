<?php
 require("conexao.php")

 
    $stmt =$mysqli->prepare("SELECT * FROM tabela_nome");
    $stmt ->execute();
    
        //Armazenamento os resultados
    
        $resultado = $stml -> get_result();

    $stmt-> close();


 

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre o seu nome</title>
</head>
<body>
    <h1>Sistema de cadastro</h1>
    <h2>Lista de nomes ja cadastrados:</h2>
    <ul>
        <?php
            if ($resultados-> num_rows > 0){
                white($row = $resultados ->fetch_assoc()){
                    echo "<li>" . htmlspecialchars($row['nome']) . "</li>";

                } else {
                    echo "<li>nenhum nome cadastrado</li>";

                }




            }



        ?>
    </ul>

    <p>Deseja cadastrar nomes? <a href= "cadastrar_nome.php"> clique aqui </a>


</body>
</html>