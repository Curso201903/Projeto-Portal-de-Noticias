<?php

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $sub_titulo = $_POST['sub_titulo'];
    $autor = $_POST['autor'];
    $texto = $_POST['texto'];
    $data_noticia = $_POST['data_noticia'];
    
    $sql = "UPDATE noticia SET titulo=' {$titulo}' , sub_titulo='{$sub_titulo}' , autor='{$autor}' , texto='{$texto}' , data_noticia='{$data_noticia}'  WHERE id={$id}";

    if($titulo ==""){
        $erro = "Preencha o título";
    }else if($autor==""){
        $erro = "Preencha o autor";
    }else if($sub_titulo==""){
        $erro = "Preencha o sub-titulo";
    }else if($texto==""){
        $erro = "Preencha a editora";
    }else if($data_noticia==""){
        $erro = "Data invalida";
    }
    else if ($conn->query($sql) === TRUE) {
        $m = "Atualizado com sucesso";
    }else {
        $erro = "Error: " . $conn->error;
    }
    
    

   

?>

