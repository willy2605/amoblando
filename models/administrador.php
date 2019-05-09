<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of administrador
 *
 * @author APRENDIZ
 */
class administrador extends DB {
    
    public function Crear($data){
        try {
          $stm=  parent::Conectar()->prepare("INSERT INTO administrador(documento,nombres,apellidos,correo,contraseña)values(?,?,?,?,?)");  
          $stm->bindParam(1,$data[0],PDO::PARAM_INT);
          $stm->bindParam(2,$data[1],PDO::PARAM_STR);
          $stm->bindParam(3,$data[2],PDO::PARAM_STR);
          $stm->bindParam(4,$data[3],PDO::PARAM_STR);
          $stm->bindParam(5,$data[4],PDO::PARAM_STR);
          $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } 
}
