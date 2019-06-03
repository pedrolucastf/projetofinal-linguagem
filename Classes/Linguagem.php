<?php
    namespace Linguagem;
    
    class Linguagem
    {
        public function ListarOque()
    {
        try
        {
                $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");

                $sql = "SELECT oque FROM linguagem_c";

                $preparar = $conexao->prepare($sql);
                $preparar->execute();

                $resultado = $preparar->fetch(\PDO::FETCH_OBJ);

                return $resultado;
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }
    }
    
    public function ListarHistoria()
    {
        try
        {
                $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");

                $sql = "SELECT historia FROM linguagem_c";

                $preparar = $conexao->prepare($sql);
                $preparar->execute();

                $resultado = $preparar->fetch(\PDO::FETCH_OBJ);

                return $resultado;
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }
    }
    
    public function ListarHelloWorld()
    {
        try
        {
                $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");

                $sql = "SELECT helloworld FROM linguagem_c";

                $preparar = $conexao->prepare($sql);
                $preparar->execute();

                $resultado = $preparar->fetch(\PDO::FETCH_OBJ);

                return $resultado;
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }
    }
    
    
    public function AtualizarLinguagem($id, $nome, $oque, $historia, $helloworld)
    {
        try
        {
        $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem", "root", "");
        $sql = "UPDATE linguagem SET nome= :nome, oque = :oque, historia= :historia, helloworld= :helloworld where id= :id";
        
        $preparar = $conexao->prepare($sql);
        $preparar->bindValue(":id", $id);  
        $preparar->bindValue(":nome", $nome);
        $preparar->bindValue(":oque", $oque);   
        $preparar->bindValue(":historia", $historia);   
        $preparar->bindValue(":helloworld", $helloworld);   
        
        
        $resultado = $preparar->execute();
        if ($resultado == 1)
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
        throw new Exception("Algo deu errado!".$e->getMessage());
        }
    }
}


//Teste do método Atualizar
//$l = new Linguagem();
//$resultado = $l->AtualizarLinguagem(1, 'OLOQUINHO', 'CARA', 'BOLA', 'TRES DOIS UM');
//echo $resultado;