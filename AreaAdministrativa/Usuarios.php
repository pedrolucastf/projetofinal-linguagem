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
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="QuemSomos.php">Quem somos</a></li>
                        <li><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li class="active"><a href="Usuarios.php">Usuários</a></li>
                        <li><a href="../index.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div id="corpo">   
            <h2>Novo usuário</h2>
                <!-- EMMET -->
                <div id="formNovoUsuario">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <p>ID</p>
                    <input name="id" type="text">
                    <p>Nome completo</p>
                    <input name="nome" type="text" autofocus="">
                    <p>Email</p>
                    <input name="email"type="text">
                    <p>Usuario</p>
                    <input name="usuario"type="text">
                    <p>Senha</p>
                    <input name="senha"type="password">
                    <br>
                    <br>
                    <div id="buttonNovoUsuario">
                    <input name="opcao"type="submit" value="INSERIR">
                    <input name="opcao"type="submit" value="ATUALIZAR">
                    <input name="opcao"type="submit" value="DELETAR">
                    </div>
                </form>
            </div>
                <hr>
            <h1>Usuários</h1>
                    <table class="table table-striped">
                    <tr>
                        <td>ID</td>
                        <td>Nome completo</td>
                        <td>Email</td>
                        <td>Usuario</td>
                        <td colspan="2">OPÇOES</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Cesar</td>
                        <td>cesar@cesar.com</td>
                        <td>cesar</td>
                        <td>[editar]</td>
                        <td>[excluir]</td>
                    </tr>

                     <tr>
                        <td>2</td>
                        <td>Pedro</td>
                        <td>pedro@pedro.com</td>
                        <td>pedro</td>
                        <td>[editar]</td>
                        <td>[excluir]</td>
                    </tr>
                    </table>            
        </div>
        
                <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados. </p>
        </div>
    </body>
</html>
