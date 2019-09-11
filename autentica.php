<?php
    //inicia a sessão, sempre no início
    session_start();
    include 'conexao.php';
    // recebendo email e senha de index.php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // Verifico se algum aluno possui email e senha informados  //where "somente se"
    $query = $conn->query("Select * from administrador where 
        email = '{$email}' and senha ='{$senha}' ");
    // Se houver, retornou um registro
    $count = $query->num_rows;
    // Transformo meu resultado em um Array
    $row = $query->fetch_assoc();
    // Se o resultado for maior que 0, quer dizer que aquele aluno
    // está no banco
    if ($count > 0){
            $_SESSION["emailUsuario"] = $row['email'];
            $_SESSION["idUsuario"] = $row['id'];
            header("Location: lista-noticia.php");
    }else{
        header("Location: login.php?erro=101");
        echo "Login Inválido";
    }
?>
