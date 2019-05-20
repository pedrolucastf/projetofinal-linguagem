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
            <img src="Imagem/kakakakaka.png" alt=""/>
        </div>
        
       <div id="menu">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="QuemSomos.php">Quem somos</a></li>
                        <li class="active"><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li><a href="#">Usuários</a></li>
                        <li><a href="../index.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">
        <h1>Noticias</h1>
                <div class="noticia">
                    <img src="#" alt="IMAGEM">
                    <!-- Máximo de palavras "manchete": 6-->
                    <h2><input type="text" placeholder="Manchete"></h2>
                    <p>                
                        <!-- Máximo de palavras no texto: 70-->
                        <textarea></textarea>
                    
                    <input name="opcao" type="submit" value="INSERIR">
                    <input name="opcao" type="submit" value="ATUALIZAR">
                    <input name="opcao" type="submit" value="DELETAR">
                    </p>
                </div>

                <div class="noticia">
                    <img src="#" alt="IMAGEM">
                    <h2><input type="text" placeholder="Manchete"></h2>
                    <p>
                        <textarea></textarea>
                        
                    <input name="opcao" type="submit" value="INSERIR">
                    <input name="opcao" type="submit" value="ATUALIZAR">
                    <input name="opcao" type="submit" value="DELETAR">
                                        
                    </p>
                </div>
                    

                <div class="noticia">
                    <img src="#" alt="IMAGEM">
                    <!-- Máximo de palavras "manchete": 6-->
                    <h2><input type="text" placeholder="Manchete"></h2>
                    <p>                
                        <!-- Máximo de palavras no texto: 70-->
                        <textarea></textarea>
                        
                    <input name="opcao" type="submit" value="INSERIR">
                    <input name="opcao" type="submit" value="ATUALIZAR">
                    <input name="opcao" type="submit" value="DELETAR">
                    
                    </p>
                </div>

                <div class="noticia">
                    <img src="#" alt="IMAGEM">
                    <h2><input type="text" placeholder="Manchete"></h2>
                    <p>
                        <textarea></textarea>
                        
                    <input name="opcao" type="submit" value="INSERIR">
                    <input name="opcao" type="submit" value="ATUALIZAR">
                    <input name="opcao" type="submit" value="DELETAR">
                    </p>
                </div>
            </div>
        
        <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados.</p>
        </div>
    </body>
</html>
