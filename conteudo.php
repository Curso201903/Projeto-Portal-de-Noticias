 <?php
    session_start();
  

    include "conexao.php";
    $sql = "SELECT * FROM noticia";
    $noticia = $conn->query($sql);

    $conn->close();
?>
    <?php include "includes-site/head-conteudo.php" ?>
  <?php include "includes-site/menu.php" ?>




    <?php   
        if ($noticia->num_rows > 0) {  //verificando se há clientes
            // $clientes->fetch_assoc() -> transformar dados em matriz
            while($row = $noticia->fetch_assoc()) {

                echo '<tr scope="row">';
				
		
echo '<div class="text">';
	
echo ' <div class="text-center"><h1>'.$row['titulo'].'</h1>';


echo ' <br>';

echo '<h4><p>'.$row['sub_titulo'].'<p> </h4>';

echo '<br>';

echo ' </div>';

echo ' <div class="text-miolo">';

echo ' <div class="content__signa-share">';
echo ' <h6>';
echo ' '.$row['data_noticia'].'';
echo ' </h6>';
echo ' </div>';

echo ' </div>';


echo '<hr class="content-divider">';




		echo '<div class="text-miolo"> <p id="letras"> '.$row['texto'].'</p>';

                echo "</div>";
            }
        }
    ?>

<?php include "includes/footer.php"; ?> 

<?php include "includes-site/footer.php" ?>