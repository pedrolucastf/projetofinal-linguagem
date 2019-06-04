<?php
    namespace Linguagem;
    include '../Classes/Linguagem.php';
    if(isset($_GET['id']))
    {
        $l = new Linguagem();    
        $resultado = $l->ListarLinguagem($_GET['id']);
        
    }
    else
    {
        die("<h1>Não foi possível carregar a página!</h1>");
    }
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
        
        <script type="text/javascript">         
            function Cancelar()
            {
                var acao = confirm ("Tem certeza? \n(Essa operação não pode ser desfeita!");
                if(acao === true)
                {
                    window.location.reload();
                }
            }
        </script>
        
        
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
                <div id="corpoLinguagem">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                    <img src="
                            <?php
                                    if($_GET['id'] == 1)
                                    {
                                        echo "../Imagem/C.png";
                                    }
                                    else if($_GET['id'] == 2)
                                    {
                                        echo "../Imagem/c++.png";
                                    }
                                    else if($_GET['id'] == 3)
                                    {
                                        echo "../Imagem/ruby.png";
                                    }
                                    else if($_GET['id'] == 4)
                                    {
                                        echo "../Imagem/csharp.png";
                                    }
                                    else if($_GET['id'] == 5)
                                    {
                                        echo "../Imagem/python.png";
                                    }
                                    else if($_GET['id'] == 6)
                                    {
                                        echo "../Imagem/java-14-logo-png-transparent.png";
                                    }
                            ?>
                    " alt="LOGO LINGUAGEM"/>
                    <input name="id" type="text" value="<?php echo $resultado->id?>" style="visibility: hidden;"/>
                    <h3><b>O que é?</b></h3>
                    <textarea name="oque">
                    <?php
                            echo $resultado->oque;
                    ?>
                    </textarea>
                    <br>
                    <h3><b>Historia</b></h3>
                    <br>
                    <textarea name="historia">
                    <?php
                            echo $resultado->historia;
                    ?>
                    </textarea>
                    <br>
                    <br>
                    <h3><b>HelloWorld</b></h3>
                    <br>
                    <textarea name="helloworld">
                    <?php
                            echo $resultado->helloworld;
                    ?>
                    </textarea>
                    <br>
                    <br>
                    <div id="botaoLinguagem">
                        <input id="AtualizarBtn" class="btn btn-warning" type="submit" value="ATUALIZAR">
                        <input onclick="Cancelar();" id="CancelarBtn" class="btn btn-danger" value="CANCELAR">
                    </div>
                    </form>
                </div>                        
        </div>
        
        <div id="rodape">
            <p> Desde 2019 | Todos os direitos reservados. </p>
        </div>
    </body>
</html>
<?php
if(isset($_GET['id'])&&
    isset ($_GET['oque'])&&
    isset ($_GET['historia'])&&
    isset ($_GET['helloworld']))
    {
        if(empty($_GET['oque'])|| empty($_GET['historia'])|| empty($_GET['helloworld']))
        {
            echo "<script type='text/javascript'> alert ('Não deixe os campos em branco!');</script>";
        }
        else
        {  
            $id = $_GET['id']; 
            $oque= $_GET['oque'];  
            $historia = $_GET['historia'];  
            $helloworld = $_GET['helloworld'];

            $l = new Linguagem();

            $resultado = $l->Atualizar($id, $oque, $historia, $helloworld);
            if($resultado == 1)
            {
                 echo "<script type='text/javascript'>"
                        ."alert('Linguagem atualizada com sucesso!');"
                         ."window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/Linguagens.php?id=".$_GET['id']."';"
                      ."</script>";
            }
            else
            {
                echo "<script type='text/javascript'>"
                        ."alert('Algo deu errado');"
                        ."window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/LinguagemC-Admin.php';"
                      ."</script>";
            }
        }        
    }
    