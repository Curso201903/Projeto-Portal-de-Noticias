<?php   
    session_start();
    include "conexao.php";
    $id = $_GET['idnoticia'];
    if($_POST){
        include 'includes/upload-imagem.php';
    }

?>

    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>

    <h1>Imagem da noticia</h1>
    <form method="post"
        action="img-noticia.php?idnoticia=<?php echo $id; ?>"
            enctype="multipart/form-data"  >

    <input type="hidden" name="id" size="15"
            value="<?php echo $dados['id'];?>"  />

    <div class="form-group">
        <label classe="col-md-4 control-label" for="titulo">
           <h4>Imagem da noticia</h4></label>
        <div class="col-md-8">
            <input id="imagem" name="imagem" type="file" placeholder="" class="form-control input-md" required="">
        </div>
    </div>
        <input type="submit"  class="btn btn-primary" value="Atualizar" />
    </form>
<?php include "includes/message.php"; ?> 
    <?php include "includes/footer.php"; ?>
       
