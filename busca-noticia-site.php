<?php
   session_start();

   $noticia = null;
   if(isset($_GET['titulo'])){
       include "conexao.php";
       $titulo = $_GET['titulo'];
       $sql = "SELECT * FROM noticia WHERE titulo LIKE'%{$titulo}%'";
 
       $noticia = $conn->query($sql);
       $conn->close();
   }
?>
 
       <?php include "includes-site/head.php"; ?> <!-- cabecalho -->
       <?php include "includes-site/menu.php"; ?> <!-- menu -->
 

       <div class="container">
       <h1>Buscar Noticias</h1>
 
        <form class="row">
           <div class="col">
               <div class="form-group">
                   <input type="text" name="titulo" class="form-control"
                   id="noticia" placeholder="Digite a noticia">
               </div>
           </div>
      
           <div class="col">
               <button type="submit" class="btn btn-primary">Buscar</button>
           </div>
        </form>
 
<?php if ($noticia!==null){?>
   <table class="table">
   <thead> <!-- cabecalho ou menu -->
   <tr>
   
   <th scope="col">Imagem</th>
   <th scope="col">TITULO</th>
   <th scope="col">Sub-Titulo</th>
   <th scope="col">AUTOR</th>
   <th scope="col">TEXTO</th>
   <th scope="col">DATA DA NOTICIA</th>
   </tr>
   </thead>
 
   <tbody> <!-- corpo -->
 
<?php
  
   if ($noticia->num_rows > 0) { // verificando se há cliente.
       while($row = $noticia->fetch_assoc()) { // $clientes->fetch_assoc() -> transformar dados em matriz.
           echo '<tr scope="row">';
               // "<td>{echo $row['nome']}</td>"; ou "<td>".$row['nome']."</td>"; podemos usar umas das duas formas
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


 
           echo "<tr/>";
       }
   }
?>
  
   </tbody>
   </table>
 
   <div class="btn btn-primary">
   Total Registros : <span class="badge badge-light"><?php echo $noticia->num_rows; ?></span>
   </div>
  
 
<?php } ?>
 

 </div>
 <footer class="container-fluid text-center">
  <p>© COPYRIGHT 2019 - Web News</p>
  <p> TODOS OS DIREITOS RESERVADOS.</p>
</footer>
<style>
footer {
    position:absolute;
    bottom:0;
    width:100%;
}
</style>