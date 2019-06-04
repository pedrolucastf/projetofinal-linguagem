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
            <img src="Imagem/kakakakaka.png" alt="IMAGEM INDEX"/>
        </div>
        
        <div id="menu">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="QuemSomos.php">Quem somos</a></li>
                        <li><a href="Login.php">Área Administrativa</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>Bem vindo ao nosso site</h1>
                   <img src="Imagem/site.png" alt="Linguagens" usemap="#Linguagens"/>
            
            <map name="Linguagens">
                <!-- ESQUERDA -->
                <area shape="rect" coords="80, 100, 160, 20" alt="Linguagem C" href="Linguagens.php?id=1">
                <area shape="rect" coords="160, 250, 260, 150" alt="Linguagem C#" href="Linguagens.php?id=4">
                <area shape="rect" coords="80, 300, 160, 380" alt="Linguagem C++" href="Linguagens.php?id=2">
                
                <!-- DIREITA -->
                <area shape="rect" coords="680, 80, 580, 150" alt="Linguagem Ruby" href="Linguagens.php?id=3">
                <area shape="rect" coords="810, 210, 710, 300" alt="Linguagem Ruby" href="Linguagens.php?id=5">
                <area shape="rect" coords="690, 460, 630, 380" alt="Linguagem JAVA" href="Linguagens.php?id=6">
                
            </map>
            
        </div>
        
                <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados. </p>
        </div>
    </body>
</html>
