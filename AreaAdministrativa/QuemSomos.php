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
        <img src="../Imagem/kakakakaka.png" alt="IMAGEM INDEX"/>
        </div>
        
        <div id="menu">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active"><a href="../AreaAdministrativa/QuemSomos.php">Quem somos</a></li>
                        <li><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li><a href="Usuarios.php">Usuários</a></li>
                        <li>
                            <div class="dropdown">
                            <a data-toggle="dropdown" aria-expanded="false" style="color: #777; line-height: 50px; display: block; float: left;">Linguagens</a>
                            <span class="caret" style="margin-top: 29%;"></span>
                            <ul class="dropdown-menu" style="margin: 20% auto;">
                              <li><a href="LinguagemC-Admin.php">C</a></li>
                              <li><a href="LinguagemCSharp-Admin.php">C#</a></li>
                              <li><a href="LinguagemCMaisMais-Admin.php">C++</a></li>
                              <li><a href="LinguagemRuby-Admin.php">Ruby</a></li>
                              <li><a href="LinguagemPython-Admin.php">Python</a></li>
                              <li><a href="LinguagemJava-Admin.php">Java</a></li>
                            </ul>
                            </div>
                        </li>
                        <li><a href="../index.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">                 
                <form id="FormQuemSomos" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <h1>Quem Somos</h1>
                    <textarea></textarea>
                    <br>
                    <div id="inputQuemSomos">
                    <input id="AtualizarBtn" class="btn btn-warning" name="opcao"type="submit" value="ATUALIZAR">
                    <input onclick="Cancelar();" id="CancelarBtn" class="btn btn-danger" name="opcao"type="submit" value="CANCELAR">
                    </div>
                </form>
            </div>
        
                <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados. </p>
        </div>
    </body>
</html>