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
    <title>Consultar nomes</title>
</head>
<body>
    <h1>Listas de nomes cadastrados</h1>

    <table>
        <tr>
          <th>Id do nome</th>  
          <th>Nome</th>  
          <th>Alterar</th>  
          <th>Deletar</th>  
        </tr>
        
        <tr>
        <?php
        if ($resultados-> num_rows > 0){
                white($row = $resultados ->fetch_assoc()){
                    echo "<td>" . $row['id_nome']. "</td>";
                    echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                    echo "<td>" ".<a href= 'editar_nome.php' . $row ['id'] . >alterar</a> ."  "</td>";

                } else {
                    echo "<li>nenhum nome cadastrado</li>";

                }




            }
            ?>
        </tr>
    </table>

    <a  href = "editar_nome.php">Editar nome</a>
            <a  href = "cadastar_nome.php">Cadastar nome</a>
            <a  href = "index.php">Voltar</a>


</body>
</html>