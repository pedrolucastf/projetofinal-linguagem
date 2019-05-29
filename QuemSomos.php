<?php
    namespace Linguagem;
    include './Classes/QuemSomos.php';
    header("Content-Type: text/html; charset=ISO-8859-1",true);    
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- JQUERY -->
        <script src="/JS/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <!-- BOOTSTRAP -->
        <script src="JS/bootstrap.min.js" type="text/javascript"></script>
        <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- MEU CSS -->
        <link href="CSS/EstiloPublico.css" rel="stylesheet" type="text/css"/>
        
        <!-- Font Awesome-->
        <link href="CSS/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="JS/all.min.js" type="text/javascript"></script>
    </head>
    <body>        
        
        <div id="topo">
            <img src="Imagem/kakakakaka.png" alt=""/>
        </div>
        
       <div id="menu">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active"><a href="#">Quem somos</a></li>
                        <li><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li><a href="Login.php"><?php echo utf8_decode("Área Administrativa"); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
            <div id="corpo">                 
                    <h1>Quem Somos</h1>
                    <br>
                    <P>
                        <?php                            
                            $q = new QuemSomos();
                            $quemsomos = $q->ListarQuemSomos();
                            echo $quemsomos->texto;
                        ?>
                    </p>
            </div>       
        <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados.</p>
        </div>
    </body>
</html>