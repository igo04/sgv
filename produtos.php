<?php include('config.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<head>
    <title>Motorola - Site Oficial</title>
    
    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />   
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

    
    <link rel="stylesheet" href="css/cabecalho.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/doces.css" type="text/css" media="screen" />
    
    
   
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      
</head>
<body>

<section class="container">
 
 <header class="topo">

      <div class="logo-loja"> 
          <img src="logo-loja.jpg" width="190" height="170"/>
      </div>   <!-- Fim Logo-->

      
      <nav class="menu">

        <ul>
            <li> <a href="home.php">Home</a></li>
            <li> <a href="quemsomos.php">Quem Somos</a></li>
            <li> <a href="produtos.php">Produtos</a></li>
            <li> <a href="cliente.php">Cliente</a></li>
            <li> <a href="login.php">Login</a></li>

        </ul>

    
      </nav> <!-- Fim Menu-->

    

 </header> <!-- Fim Topo-->
    
  <div id="banner">
   
  <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/loja1.jpg" data-thumb="images/loja1.jpg" alt="" title="Pedacinhos de Amor" />
                <img src="images/loja2.jpg" data-thumb="images/loja2.jpg" alt="" title="Pedacinhos de Amor" />
                <img src="images/loja3.jpg" data-thumb="images/loja3.jpg" alt="" title="Pedacinhos de Amor" data-transition="slideInLeft" />
                
            </div>            
        </div>
    </div><!-- Fim banner-->
    
  
</section><!-- Fim Container-->

<?php  require_once('listagem-de-produto.php'); ?>

<footer class="rodape">

 &copy;Pedacinhos de Amor 2022 
    
</footer> <!-- Fim Rodapé-->
      
	
</body>
</html>