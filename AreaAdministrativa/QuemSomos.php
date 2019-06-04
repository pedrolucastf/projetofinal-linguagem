<?php
    namespace Linguagem;
    include '../Classes/QuemSomos.php';
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
                var acao = confirm ("<?php echo utf8_decode("Tem certeza? \\n(Essa operação não pode ser desfeita!)"); ?>");
                if(acao === true)
                {
                    window.location.reload();
                }
            }
        </script>

        
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
                        <li><a href="Usuarios.php"><?php echo utf8_decode("Usuários"); ?></a></li>
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
                <form id="FormQuemSomos" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <h1>Quem Somos</h1>
                    <textarea id="campoQuemSomos" name="texto">
                        <?php
                            $q = new QuemSomos();
                            $quemsomos = $q->ListarQuemSomos();
                            echo $quemsomos->texto;
                        ?>
                    </textarea>
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
<?php
    if(isset($_POST['texto']) && isset($_POST['opcao']))
    {
        if(empty($_POST['texto']))
        {
            echo "<script type='text/javascript'> alert ('Não deixe os campos em branco!');</script>";
        }
        else
        {  
        $texto = $_POST['texto'];
        $opcao = $_POST['opcao'];

        $q = new QuemSomos();

            switch ($opcao)
            {
                case "ATUALIZAR":
                    $resultado = $q->AtualizarQuemSomos($texto);
                    if($resultado == 1)
                    {
                         echo "<script type='text/javascript'>"
                                ."alert('Quem somos atualizado com sucesso!');"
                                 ."window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/QuemSomos.php';"
                              ."</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>"
                                ."alert('Algo deu errado');"
                                ."window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/QuemSomos.php';"
                              ."</script>";
                    }  
                break;            
            }
        }
    }