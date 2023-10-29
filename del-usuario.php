<?php
     $conexao = new PDO("mysql:local=localhost;dbname=crud252;port=3309","root","");
     if(!$conexao){
        echo "CONECTADO SEM SUCESSO";
        exit;
    }

//RECEBE O ID PELO MÉTODO GET VIA URL
    $id = $_GET['id'];

    $sql = "DELETE FROM usuario WHERE id = $id;";
    $exec = $conexao->exec($sql);
    
    if($exec){
        echo 'EXCLUSÃO BEM SUCEDIDA!';
    }else{
        echo 'ERRO NA EXCLUSÃO!';
    }
?>
<br/><br/>
<a href ="list-usuario.php"> Voltar</a>