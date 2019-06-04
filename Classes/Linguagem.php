<?php
    namespace Linguagem;
    
    class Linguagem
    {
        public function ListarLinguagem($id)
    {
        try
        {
                $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem","root","");

                $sql = "SELECT * FROM linguagem where id= :id";

                $preparar = $conexao->prepare($sql);
                $preparar->bindValue(':id', $id);
                $preparar->execute();

                $resultado = $preparar->fetch(\PDO::FETCH_OBJ);

                return $resultado;
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }
    }
    
    public function Atualizar($id, $oque, $historia, $helloworld)
    {
        try
        {
        $conexao = new \PDO("mysql:host=localhost; dbname=projetofinal-linguagem", "root", "");
        $sql = "UPDATE linguagem SET oque = :oque, historia= :historia, helloworld= :helloworld where id = :id";
        
        $preparar = $conexao->prepare($sql);
        $preparar->bindValue(":id", $id);  
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
//$resultado = $l->Atualizar(1, '3133432135', '351316841315,1321', 'TRES DOIS UM6841313541321');
//echo $resultado;

//TESTE do metodo ListarLinguagem
//$l = new Linguagem();
//$resultado = $l->ListarLinguagem(1);
//print_r($resultado);
