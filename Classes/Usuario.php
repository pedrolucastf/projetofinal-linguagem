<?php
    namespace Linguagem;

class Usuario
{    
    public function Inserir($nome, $usuario, $email, $senha)
    {
        Try
        {
            //String de conexão com o banco de dados.
            $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem", "root", "");

            //SQL que vou executar no banco.
            $sql = "insert into usuarios (nome, usuario, email, senha) VALUES (:nome, :usuario, :email, :senha)";

            //Preparação (Binding) das váriaveis do SQL.
            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":nome", $nome);
            $preparar->bindValue(":usuario", $usuario);
            $preparar->bindValue(":email", $email);
            $preparar->bindValue(":senha", $senha);

            $resultado = $preparar->execute();

            if ($resultado == true)
            {
                return true;
            }
            else
            {
                return false;
            }        
        }
        catch(\PDOException $e)
        {
            throw new Exception("Ocorreu um ERRO: "+$e);
            return false;
        }
    }



    public function Login($usuario, $senha)
        {
            try
            {
                $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");

                $sql = "SELECT count(*) FROM usuarios WHERE usuario = :usuario AND senha = :senha";
                $preparar = $conexao->prepare($sql);

                $preparar->bindValue(":usuario", $usuario);
                $preparar->bindValue(":senha", $senha);

                $senhaCriptografada = sha1($senha);
                $preparar->bindValue(":senha", $senhaCriptografada);

                $preparar->execute();
                $resultado = $preparar->fetch();

                if($resultado[0] == 1)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            catch (\PDOException $e)
            {
                throw new Exception("Ocorreu um ERRO: "+$e);
            }
        }
        public function ListarTodos()
    {
        try
        {
                $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");

                $sql = "SELECT * FROM usuarios";

                $preparar = $conexao->prepare($sql);
                $preparar->execute();

                $resultado = $preparar->fetchAll(\PDO::FETCH_OBJ);

                return $resultado;
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }
    }
    public function Deletar($id)
    {
        $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");
        
        $sql = "DELETE FROM usuarios WHERE id = :id";
        
        $preparar = $conexao->prepare($sql);
        $preparar->bindValue(":id", $id);
        
        $resultado = $preparar->execute();
        
        if($resultado == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}