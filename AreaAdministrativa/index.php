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
        <script src="../JS/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <!-- BOOTSTRAP -->
        <script src="../JS/bootstrap.min.js" type="text/javascript"></script>
        <link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- MEU CSS -->
        <link href="../CSS/EstiloAdministrativo.css" rel="stylesheet" type="text/css"/>
        
        <!-- Font Awesome-->
        <link href="../CSS/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="../JS/all.min.js" type="text/javascript"></script>
        
        
    </head>
    <body>
        
        <div id="topo">
        <img src="../Imagem/kakakakaka.png" alt=""/>
        </div>
        
        <div id="menu">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="../AreaAdministrativa/QuemSomos.php">Quem somos</a></li>
                        <li><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li><a href="#">Usuários</a></li>
                        <li><a href="../index.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>
                <?php
                $hr = date("H");
//              echo $hr;
                if($hr >= 12 && $hr<18) {
                $resp = "Boa tarde, seja bem vindo a área administrativa.";}
                else if ($hr >= 6 && $hr <12 ){
                $resp = "Bom dia, seja bem vindo a área administrativa.";}
                else {
                $resp = "Boa noite, seja bem vindo a área administrativa.";}
                echo "$resp";
                ?>
            </h1>
            
            <img src="../Imagem/site.png" alt=""/>
            
            <map name="Linguagens">
                <!-- ESQUERDA -->
                <area shape="rect" coords="80, 100, 160, 20" alt="Linguagem C" href="LinguagemC.php">
                <area shape="rect" coords="160, 250, 260, 150" alt="Linguagem C#" href="LinguagemCSharp.php">
                <area shape="rect" coords="80, 300, 160, 380" alt="Linguagem C++" href="LinguagemC++.php">
                
                <!-- DIREITA -->
                <area shape="rect" coords="680, 80, 580, 150" alt="Linguagem Ruby" href="LinguagemRuby.php">
                <area shape="rect" coords="810, 210, 710, 300" alt="Linguagem Ruby" href="LinguagemPython.php">
                <area shape="rect" coords="690, 460, 630, 380" alt="Linguagem JAVA" href="LinguagemJava.php">
                
            </map>
            
        </div>
        
                <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados. </p>
        </div>
    </body>
</html>
