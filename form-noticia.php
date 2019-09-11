 <?php session_start(); ?>
 <?php include "bloqueio-login.php"; ?>
 <?php
    if($_POST){
        include 'cadastrar-noticia.php';
    }
        
?>
<?php include "includes/head.php"; ?>
<?php include "includes/menu.php"; ?>

<h1>Cadastro de Noticias</h1>
<form method="post" action="form-noticia.php" >
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" class="form-control" name="titulo" size="15" />
    </div>
    <div class="form-group">
    <label>Sub-Titulo</label>
        <input type="text" class="form-control" name="sub_titulo" size="15" />
    </div>

    <div class="form-group">
        <label>Autor</label>
        <input type="text" class="form-control" name="autor" size="15" />
    </div>
    
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Texto</label>
    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="texto" rows="7" size="15"></textarea>
  </div>

    <div class="form-group">
        <label>Data da Noticia</label>
        <input type="text" class="form-control" name="data_noticia" size="15" />
    </div>

        <input type="submit" class="btn btn-primary" value="Cadastrar" />
    </form>
    <?php include "includes/message.php"; ?>
    <?php include "includes/footer.php"; ?>