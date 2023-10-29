<?php
    $conexao = new PDO("mysql:local=localhost;dbname=crud252;port=3309","root","");
    if(!$conexao){
        echo "CONECTADO SEM SUCESSO";
        exit;
    }

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($id == 0){
        $sql = "INSERT INTO usuario (nome,login,email,senha) VALUES ('$nome','$login','$email','$senha');";
    }else{
        $sql = "UPDATE usuario SET nome = '$nome',email = '$email',login = '$login', senha = '$senha' WHERE id = $id;";
    }

    $execute = $conexao->exec($sql);

    if($execute){
        echo "CADASTRO COM SUCESSO";
    }else{
        echo "CADASTRO SEM SUCESSO";
    }
?>
<br/><br/>
<a href ="list-usuario.php"> Voltar</a>