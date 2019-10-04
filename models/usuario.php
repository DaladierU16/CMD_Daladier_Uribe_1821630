<?php
//Herencia
class usuario extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publication");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{    
            $result = parent::connect()->prepare("INSERT INTO publication (title, description , imagen) VALUES (?,?,?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['imagen'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error publication->register() " . $e->getMessage());
        }
    }
    
}

