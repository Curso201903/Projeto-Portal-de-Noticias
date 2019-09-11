<?php
   
    include "conexao.php";

    if($_POST)  
    include "atualizar-noticia.php";

	  $id = $_GET['idnoticia'];
    $sql = "SELECT * FROM noticia WHERE id={$id}";
    $noticia = $conn->query($sql);
    //print_r($cliente->fetch_assoc()); // so ir na url e colocar ?idcliente=2
    $dados = $noticia->fetch_assoc();

    $conn->close();
    
?>
    <?php include "includes-site/head-conteudo.php" ?>
  <?php include "includes-site/menu.php" ?>








           <div class="container-fluid text-center">
           <div class="row content">,
           <div class="col-sm-2 sidenav">
           </div>
           <div class="col-sm-8 text-left">
         

            <div class="text-center"><p id="titulo"><?php echo $dados['titulo']; ?> </p></div>
           <br>
           <h3><p><?php echo $dados['sub_titulo']; ?><p> </h3>

                <br>
                
                

         <div class="text-miolo">

         <div class="content__signa-share">
       
  
         <h5><?php echo $dados['autor']; ?>
        <br>
         </h5>

         <h6>
         <?php echo $dados['data_noticia']; ?>
         </h6>
         </div>

        <hr>
     
        <br>

        <?php
           $file = "img-noticia/".$dados['id'].".jpg";
              if (file_exists($file)) {
                  echo "<img src=\"{$file}\" class=\"img-responsive\" style=\"width:100%; height:600px;\" alt=\"Image\"> ";
              } else {
                  echo "<img src=\"img-noticia/notica-branco.jpg\"  class=\"img-responsive\" style=\"width:100%; height:200px;\" alt=\"Image\"> ";
              }
              ?>

         </div>

         <br>
         <br>
         <br>

      <p id="letras"><?php echo $dados['texto']; ?></p>
       
        </div>
        <div class="col-sm-2 sidenav">

      </div>
        </div>
        </div>

<br>
<br>
<br>
<br>


      






<?php include "includes-site/footer.php" ?>