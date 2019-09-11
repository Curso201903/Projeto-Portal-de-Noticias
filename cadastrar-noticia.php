<?php
    
    if($_POST){

    require_once "conexao.php";

    $titulo = $_POST['titulo'];
    $sub_titulo = $_POST['sub_titulo'];
    $autor = $_POST['autor'];
    $texto = $_POST['texto'];
    $data_noticia = $_POST['data_noticia'];
  
    $sql = "INSERT INTO noticia VALUES
        (default,'{$titulo}','{$sub_titulo}','{$autor}','{$texto}','{$data_noticia}')";
        
    if($titulo==""){
        $erro = "Preencha o titulo";
    }else if($sub_titulo==""){
        $erro = "Preencha o sub-titulo";
    }else if($autor==""){
        $erro = "Preencha o autor";
    }else if($texto==""){
        $erro = "Preencha o texto";
    }else if($data_noticia==""){
        $erro = "Preencha a data";
    }else if ($conn->query($sql) === TRUE) {  
        $m = "Cadastrado com sucesso";
    }else {
        $erro = "Erro ao cadastrar!";
        }    

    $conn->close();
}
?>
