<?php
    namespace Linguagem;
    
    class QuemSomos
    {
        public function ListarQuemSomos()
    {
        try
        {
                $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");

                $sql = "SELECT texto FROM quemsomos";

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
    
    
    public function AtualizarQuemSomos($id, $texto)
    {
        try
        {
        $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem", "root", "");
        $sql = "update quemsomos set texto= :texto";
        
        $preparar = $conexao->prepare($sql);
        $preparar->bindValue(":id", $id);
        $preparar->bindValue(":texto", $texto);       
        
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