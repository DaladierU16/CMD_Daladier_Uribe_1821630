<?php
//Herencia
class publication extends Database{

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

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM publication WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE publication SET title = ?, description = ?, imagen = ? WHERE id = ?");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['imagen'], PDO::PARAM_STR);
            $result->bindParam(4, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error publication->update_register() " . $e->getMessage());
        }
    }



    public function delete_register($id){
        try{
            $result = parent::connect()->prepare("DELETE FROM publication WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error publication->update_register() " . $e->getMessage());
        }
    }
}

