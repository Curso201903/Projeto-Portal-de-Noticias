<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index-site.php">News Web</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index-site.php">Home</a></li>
     
        <li><a href="busca-noticia-site.php">Buscar Notícias</a></li>
        
        <li><a href="#"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <a href="">
          <img src="img/bon.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>Acordo entre Brasil e Argentina</h3>
            <p>O acordo automotivo entre Brasil e Argentina, que será anunciado nesta sexta-feira (6) pelos ministros Paulo Guedes.</p>
          </div>      
        </div>

        <div class="item">
        <a href="">
          <img src="img/presidente2.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>Morre Robert Mugabe</h3>
            <p>Ele morreu em Singapura, onde recebia tratamento médico há alguns meses. Causa da morte não foi divulgada.</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <p>Principais Notícias:</p>
    </div>
    <div class="well">
    <p>Bienal do Livro</p>
    </div>
    <div class="well">
    <p>Furacão Dorian</p>
    </div>
    <div class="well">
    <p>Índia a caminho da Lua</p>
    </div>
    <div class="well">
    <p>Rock in Rio</p>
    </div>
    <div class="well">
    <p>Greve em São Paulo</p>
    </div>
  </div>
</div>
<hr><hr>

</div>





  
  
<div class="container text-center">
<div class="row">
<h3>Ultimas Notícias</h3>
<br>
<br>

<?php
  
  

    include "conexao.php";
    $sql = "SELECT * FROM noticia";
    $noticia = $conn->query($sql);


?>

<?php   
        if ($noticia->num_rows > 0) {  //verificando se há clientes
            // $clientes->fetch_assoc() -> transformar dados em matriz
            while($row = $noticia->fetch_assoc()) {

                
              echo  '  <div class="col-sm-3" style="height:300px">';


              $file = "img-noticia/".$row['id'].".jpg";
              if (file_exists($file)) {
                  echo "<img src=\"{$file}\" class=\"img-responsive\" style=\"width:100%; height:200px;\" alt=\"Image\"> ";
              } else {
                  echo "<img src=\"img-noticia/notica-branco.jpg\"  class=\"img-responsive\" style=\"width:100%; height:200px;\" alt=\"Image\"> ";
              }

              echo  ' <a href="lista-noticia-site.php?idnoticia='.$row['id'].'">';
              echo  ' '.$row['titulo'].'';
              echo  ' </a>';
              echo  '</p>';
              
              echo  '  </div>';
             

            }
        }
    ?>
</div>
</div>

<br><br><br><br>



<style type="text/css">
    img{border-radius: 10px;}
    </style>

<?php include "includes-site/footer.php" ?>