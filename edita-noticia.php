<?php
    session_start(); 
    include "conexao.php";

    if($_POST)  
    include "atualizar-noticia.php";

	$id = $_GET['idnoticia'];
    $sql = "SELECT * FROM noticia WHERE id={$id}";
    $noticia = $conn->query($sql);
    //print_r($cliente->fetch_assoc()); // so ir na url e colocar ?idcliente=2
    $dados = $noticia->fetch_assoc();
    if($_POST){
        include "atualizar-noticia.php";
        include "includes/upload-imagem.php" ;  
    }
    $conn->close();
    
?>


 <?php include "includes/head.php"; ?>
<?php include "includes/menu.php"; ?>

    <h1>Editar Noticias</h1>
    <form method="POST"  action="edita-noticia.php?idnoticia=<?php echo $id; ?>"enctype="multipart/form-data" >

    <input type="hidden" name="id" size="15"       
            value="<?php echo $dados['id'];?>" />

    <div class="form-group">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" size="15" value="<?php echo $dados['titulo'];?>" /> 
    </div>
    <div class="form-group">
        <label>Sub-título</label>
        <input type="text" name="sub_titulo" class="form-control" size="15" value="<?php echo $dados['sub_titulo'];?>" />
    </div>
    <div class="form-group">
        <label>Autor</label>
        <input type="text" name="autor" class="form-control" size="15" value="<?php echo $dados['autor'];?>" />
    </div>
    <div class="form-group">
        <label>texto</label>
        <input type="text" name="texto" class="form-control" size="15" value="<?php echo $dados['texto'];?>" />
    </div>
  
    <div class="form-group">
        <label>Data da Noticia</label>
        <input type="text" name="data_noticia" class="form-control" size="15" value="<?php echo $dados['data_noticia'];?>" />
    </div>


    <div class="form-group">
            <label class="control-label" for="titulo">
                Imagem da Noticia</label>
            <div>
                <?php   
                    $file = "img-noticia/".$dados['id'].".jpg";
                    if (file_exists($file)) {
                        echo "<img src=\"{$file}\" width=\"300\"> ";
                    } else {
                        echo "<img src=\"img-noticia/noticia-branco.jpg\" width=\"300\"> ";
                    } 
                ?>
            <div>
                <input id="imagem" name="imagem" type="file" 
                    placeholder="" class="form-control input-md" 
                        >
            </div>

    

       
        <input type="submit" class="btn btn-primary" value="Atualizar" />
    </form> 

    <?php include "includes/message.php"; ?>
    <?php include "includes/footer.php"; ?>
   