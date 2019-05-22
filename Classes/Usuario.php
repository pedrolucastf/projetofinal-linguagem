<?php
namespace ProjetoFinal;

class Usuario
{
    private $id;
    private $nome;
    private $usuario;
    private $email;
    private $senha;
    
    public function Inserir($nome, $usuario, $email, $senha)
    {
        Try
        {
            //String de conexão com o banco de dados.
            $conexao = new \PDO("mysql:host=localhost; dbname=#", "root", "");

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
                $conexao = new \PDO("mysql:host=localhost; dbname=#","root","");

                $sql = "SELECT count(*) FROM usuarios WHERE usuario = :usuario AND senha = :senha";
                $preparar = $conexao->prepare($sql);

                $preparar->bindValue(":usuario", $usuario);
                $preparar->bindValue(":senha", $senha);

                $senhaCriptografada = sha1(":senha", $senha);
                $preparar->bindValue(":senha", $senhaCriptografada);

                $resultado = $preparar->execute();

                if($resultado == true)
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
                return false;
            }
        }
}