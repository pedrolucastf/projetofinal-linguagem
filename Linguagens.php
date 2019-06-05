<?php
    namespace Linguagem;
    include './Classes/Linguagem.php';
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    $id = $_GET['id'];
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
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="QuemSomos.php">Quem somos</a></li>
                        <li><a href="Login.php"><?php echo utf8_decode("Área Administrativa"); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div id="corpo">
                <div id="corpoLinguagem">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <img src="
                            <?php
                                    if($id == 1)
                                    {
                                        echo "Imagem/C.png";
                                    }
                                    else if($id == 2)
                                    {
                                        echo "Imagem/c++.png";
                                    }
                                    else if($id == 3)
                                    {
                                        echo "Imagem/ruby.png";
                                    }
                                    else if($id == 4)
                                    {
                                        echo "Imagem/csharp.png";
                                    }
                                    else if($id == 5)
                                    {
                                        echo "Imagem/python.png";
                                    }
                                    else if($id == 6)
                                    {
                                        echo "Imagem/java-14-logo-png-transparent.png";
                                    }
                            ?>
                    " alt="LOGO LINGUAGEM"/>
                    <h1>O que</h1>
                    <br>
                    <P>
                        <?php                            
                            $l = new Linguagem();
                            $linguagem = $l->ListarLinguagem($id);
                            echo $linguagem->oque;
                        ?>
                    </p>
                    <h1>Historia</h1>
                    <br>
                    <P>
                        <?php                            
                            $l = new Linguagem();
                            $linguagem = $l->ListarLinguagem($id);
                            echo $linguagem->historia;
                        ?>
                    </p>
                    <h1>HelloWorld</h1>
                    <br>
                    <pre>
                        <?php                            
                            $l = new Linguagem();
                            $linguagem = $l->ListarLinguagem($id);
                            echo $linguagem->helloworld;
                        ?>
                    </pre>
                    
                    </form>
                </div>                        
        </div>     
        <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados.</p>
        </div>
    </body>
</html>