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
                        <li><a href="Usuarios.php">Usuários</a></li>
                        <li>
                            <div class="dropdown">
                            <a data-toggle="dropdown" aria-expanded="false" style="color: #777; line-height: 50px; display: block; float: left;">Linguagens</a>
                            <span class="caret" style="margin-top: 29%;"></span>
                            <ul class="dropdown-menu" style="margin: 20% auto;">
                              <li><a href="Linguagens.php?id=1">C</a></li>
                              <li><a href="Linguagens.php?id=4">C#</a></li>
                              <li><a href="Linguagens.php?id=2">C++</a></li>
                              <li><a href="Linguagens.php?id=3">Ruby</a></li>
                              <li><a href="Linguagens.php?id=5">Python</a></li>
                              <li><a href="Linguagens.php?id=6">Java</a></li>
                            </ul>
                            </div>
                        </li>
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
        </div>
        
                <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados. </p>
        </div>
    </body>
</html>
