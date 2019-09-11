<?php
    session_start();
    include "bloqueio-login.php";

    include "conexao.php";
    $sql = "SELECT * FROM noticia";
    $noticia = $conn->query($sql);

    $conn->close();
?>
    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>

    <table class="table">
  <thead>
    <tr>
        <h1>Lista de Noticias</h1>
        
      <th scope="col">Imagem</th>
      <th scope="col">Titulo</th>
      <th scope="col">SubTitulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Texto</th>
      <th scope="col">Data da Noticia</th>

    </tr>
 </thead>
 <tbody>



    <?php   
        if ($noticia->num_rows > 0) {  //verificando se há clientes
            // $clientes->fetch_assoc() -> transformar dados em matriz
            while($row = $noticia->fetch_assoc()) {

                echo '<tr scope="row">';

                echo "<td>";

                $file = "img-noticia/".$row['id'].".jpg";
                if (file_exists($file)) {
                    echo "<img src=\"{$file}\" width=\"200\"> ";
                } else {
                    echo "<img src=\"img-noticia/noticia-branco.jpg\"  width=\"200\"> ";
                }
              
                
                


                echo "<td>{$row['titulo']}</td>";
           
                echo "<td>{$row['sub_titulo']}</td>";

                echo "<td>{$row['autor']}</td>";

                echo "<td>{$row['texto']}</td>";

                echo "<td>{$row['data_noticia']}</td>";

                echo '<td><a class="btn btn-info" href="img-noticia.php?idnoticia='.$row['id'].'"> imagem</a><td>';

               


            
              
               
                echo '<td><a class="btn btn-primary" href="edita-noticia.php?idnoticia='.$row['id'].'"> editar</a><td>';
                echo '<td><a class="btn btn-danger" href="excluir-noticia.php?idnoticia='.$row['id'].'"> excluir</a><td>';
                echo "<tr/>";
            }
        }
    ?>

</tbody>
</table>

<div class="btn btn-primary">
    Total Registros: <span class="badge badge-light"><?php echo $noticia->num_rows; ?></span>
    </div>      

<?php include "includes/footer.php"; ?> 