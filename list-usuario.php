<html>
<head>
    <title>Document</title>
</head>

<body>
    <button onclick="location.href='form-usuario.php'">Novo</button>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        
        <tbody>

<?php
    $conexao = new PDO("mysql:local=localhost;dbname=crud252;port=3309","root","");
    if(!$conexao){
        echo "CONECTADO SEM SUCESSO";
        exit;
    }

    $sql = "SELECT id,nome,login,email FROM usuario;";
    $query = $conexao->query($sql);
    
    while($row = $query->fetch()){  
        echo '
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['nome'].'</td>
                <td>'.$row['login'].'</td>
                <td>'.$row['email'].'</td>
                <td>
                    <a href="form-usuario.php?id='.$row['id'].'">Editar</a>
                </td>
                <td>
                    <a href="del-usuario.php?id='.$row['id'].'">Excluir</a>
                </td>
            </tr>
            ';
    }
?>
        </tbody>
    </table>

</body>
</html>