<?php
if (isset($_SESSION)){
    seesion_star();
}

if(isset($_SEESION['id_adm'])){
    echo ("voce nao autorizaçao para acessar a pagina ");
    echo ("a href= 'index.php' >Voltar</a");
    exit();
}




?>