<?php
    namespace Linguagem;
    include '../Classes/Usuario.php';
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
            function Editar(id, nome, email, usuario)
            {
                document.getElementsByName('id')[0].value = id;
                document.getElementsByName('nome')[0].value = nome;
                document.getElementsByName('email')[0].value = email;
                document.getElementsByName('usuario')[0].value = usuario;  
                
                document.getElementById('InserirBtn').style.display = "none";
                document.getElementById('AtualizarBtn').style.display = "inline";
            }
            
            function Cancelar()
            {
                var acao = confirm("Tem certeza?\nEssa operação não pode ser desfeita!");
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
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="../AreaAdministrativa/QuemSomos.php">Quem somos</a></li>
                        <li class="active"><a href="Usuarios.php">Usuários</a></li>
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
            <h2>Novo usuário</h2>
                <!-- EMMET -->
                <div id="formNovoUsuario">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
                    <input id="InserirBtn" class="btn btn-primary" name="opcao"type="submit" value="INSERIR">
                    <input id="AtualizarBtn" style="display: none;"class="btn btn-warning" name="opcao"type="submit" value="ATUALIZAR">
                    <input onclick="Cancelar();" id="CancelarBtn" class="btn btn-danger" name="opcao"type="submit" value="CANCELAR">
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

                <?php
                $u = new Usuario();
                $usuarios = $u->ListarTodos();
                
                foreach ($usuarios as $key ) 
                {
                    echo "<tr>"
                            ."<td>".$key->id."</td>"
                            ."<td>".$key->nome."</td>"
                            ."<td>".$key->usuario."</td>"
                            ."<td>".$key->email."</td>"
                            ."<td><a onclick='Editar(&quot;".$key->id."&quot;, &quot;".$key->nome."&quot;, &quot;".$key->email."&quot;, &quot;".$key->usuario."&quot;);' href='#' class='btn btn-warning'>Editar</a> </td>"
                            ."<td><a onclick=' return confirm(&quot; Tem certeza que deseja excluir o usuário? &quot;);' href='?id=".$key->id."&opcao=deletar' class='btn btn-danger'>Excluir</a></td>"
                    ."</tr>";
                }
             ?>
                </table>    
        </div>
        
                <div id="rodape">
                    <p> Desde 2019 | Todos os direitos reservados. </p>
                </div>
    </body>
</html>

<?php
if(isset($_POST['id'])&&
           isset ($_POST['nome'])&&
           isset ($_POST['usuario'])&&
           isset ($_POST['email'])&&
           isset ($_POST['senha']) &&
           isset($_POST['opcao']))
{
        if(empty($_POST['nome'])||
            empty($_POST['usuario'])||
            empty($_POST['email'])||
            empty($_POST['senha']))
            {
                echo "<script type='text/javascript'> alert ('Não deixe os campos em branco!');</script>";
            }
            else
            {  
            $id = $_POST['id'];
            $nome = $_POST['nome'];  
            $usuario= $_POST['usuario'];  
            $email = $_POST['email'];  
            $senha = $_POST['senha'];
            $opcao = $_POST['opcao'];
            
            $u = new Usuario();
            
            switch ($opcao)
            {
                case "INSERIR":
                    $resultado = $u->Inserir($nome, $usuario, $email, $senha);
                    if($resultado == true)
                    {
                         echo "<script type='text/javascript'>alert('Usuário inserido com sucesso!');</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Algo deu errado!');</script>"; 
                    }  
                break;
            
                case "ATUALIZAR":
                    $resultado = $u->Atualizar($id, $nome, $usuario, $email, $senha);
                    if($resultado == 1)
                    {
                         echo "<script type='text/javascript'>"
                                ."alert('Usuário atualizado com sucesso!');"
                                 ."window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/Usuarios.php';"
                              ."</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>"
                                ."alert('Algo deu errado');"
                                ."window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/Usuarios.php';"
                              ."</script>";
                    }  
                break;            
            }
            }
}
else if(isset ($_GET['id']) && isset ($_GET['opcao']))
{
    if($_GET['opcao'] == "deletar")
    {
        $id = $_GET['id'];
        $u = new Usuario();
        $resultado = $u->Deletar($id);
        if($resultado == 1)
        {
             echo "<script type='text/javascript'>"
                        ."alert('Usuário deletado com sucesso!');"
                        ."window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/Usuarios.php';"
                  ."</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Algo deu errado!');</script>"; 
        }  
    }
}    
//    if(isset($_POST['id'])&&
//           isset ($_POST['nome'])&&
//           isset ($_POST['usuario'])&&
//            isset ($_POST['email'])&&
//           isset ($_POST['senha']))
//    {
//
//        if(empty($_POST['nome'])||
//        empty($_POST['usuario'])||
//        empty($_POST['email'])||
//        empty($_POST['senha']))
//        {
//            echo "<script type='text/javascript'> alert ('Não deixe os campos em branco!');</script>";
//        }
//        else
//        {
//            $id = $_POST['id'];
//            $nome = $_POST['nome'];  
//            $usuario= $_POST['usuario'];  
//            $email = $_POST['email'];  
//            $senha = $_POST['senha'];  
//            
//            $u = new Usuario();
//            
//            $resultado = $u->Inserir($nome, $usuario, $email, $senha);
//            echo $resultado;
//            
//           if($resultado == true)
//           {    
//               echo "<script type='text/javascript'>alert('Cadastro realizado com sucesso!');</script>";  
//               header("Location: http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/Usuarios.php");
//                        
//           }
//           else
//           {
//               echo "<script type='text/javascript'>alert('Houve um erro na hora de cadastrar um novo usuário!');</script>";  
//           }
//        }        
//    }
//    
//    if(isset($_GET['id']) && isset($_GET['acao']))
//    {
//            $id = $_GET['id'];
//            $acao = $_GET['acao'];
//            
//            switch ($acao)
//            {
//                case "deletar":
//                    $u = new Usuario();
//                    $resultado = $u->Deletar($id);
//                    
//                    if($resultado == 1)
//                    {
//                         echo "<script type='text/javascript'> alert ('Usuário removido com sucesso!');</script>";
//                         echo "<script type='text/javascript'> window.location.href='http://localhost/ProjetoFinal-Linguagem/AreaAdministrativa/Usuarios.php';</script>";
//                    }
//                    else
//                    {
//                         echo "<script type='text/javascript'> alert ('Erro ao remover o usuário!');</script>";
//                    }
//                         
//                break;
//                    
//                    
//                case "editar":
//                    break;
//            }
//    }
