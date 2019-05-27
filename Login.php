<?php
    namespace Linguagem;
    include 'Classes/Usuario.php';
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
            <div id="login">
                <form action="#" method="POST">
                    <h1>Área Administrativa</h1>
                    <p>Digite seu login</p>
                    <input placeholder="Digite seu login" type="text" name="usuario">
                    <br>
                    <br>
                    <p>Digite sua senha</p>
                    <input placeholder="*****"type="password" name="senha">
                    <br>
                    <br>
                    <input class="btn btn-success" type="submit" value="Entrar">
                    <input class="btn btn-danger"type="submit" value="Limpar">
                </form>
            </div>
        </body>
</html>

<?php
    if(isset($_POST['usuario']) && isset($_POST['senha']))
    {
        if(empty($_POST['usuario']) || empty($_POST['senha']))
        {
            echo "<script type='text/javascript'> alert ('Não deixe os campos em branco!');</script>";
        }
        else
        {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            
            $u = new Usuario();
            $resultado = $u->Login($usuario, $senha);
            
            if($resultado == true)
            {
                //entra na area adm
                header("Location: http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa");
            }
            else
            {
                echo "<script type='text/javascript'> alert ('Usuário e/ou senha incorretos.');</script>";
            }
        }
    }
?>