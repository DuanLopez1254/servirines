<?php
class index extends Database{
    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM empleados");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO empleados (cedula,nombre,email,telefono,ciudad,password) VALUES (?,?,?,?,?,?)");
            $result->bindParam(1, $data['cedula'], PDO::PARAM_STR);
            $result->bindParam(2, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(3, $data['email'], PDO::PARAM_STR);
            $result->bindParam(4, $data['telefono'], PDO::PARAM_INT);
            $result->bindParam(5, $data['ciudad'], PDO::PARAM_STR);
            $result->bindParam(6, $data['password'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error index->register() " . $e->getMessage());
        }
    }
}