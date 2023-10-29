<?php
     $conexao = new PDO("mysql:local=localhost;dbname=crud252;port=3309","root","");
     if(!$conexao){
        echo "CONECTADO SEM SUCESSO";
        exit;
    }

    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    $sql = "SELECT * FROM usuario WHERE id = $id";
    $query = $conexao->query($sql);

    if($query->rowCount() > 0){
        $row = $query->fetch();
        $nome = $row['nome'];
        $email = $row['email'];
        $login = $row['login'];
        $senha = $row['senha'];
    }else{
        $nome = '';
        $email = '';
        $login =  '';
        $senha = '';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
    <form action="post-usuario.php" method="POST">
        <fieldset>

            <legend>Usuário</legend>

            <input type="hidden" id = "id" name = "id" value ="<?=$id?>" />

            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?=$nome?>" />
            </div>

            <div>
                <label for="email">E-Mail</label>
                <input type="text" name="email" id="email" value="<?=$email?>" />
            </div>

            <div>
                <label for="login">Login</label>
                <input type="text" id="login" name="login" value="<?=$login?>" />
                
            </div>

            <div>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" value="<?=$senha?>" />
            </div>

            <div id="botao">
            <input type="submit" value="Salvar"/>
            </div>

        </fieldset>
        
    </form>
    </div>
</body>

</html>