<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Security extends DB {
    
    public function Auth ($correo){
        try {
            $stm= parent::Conectar()->prepare ("SELECT * FROM usuarios WHERE correo = ?");
            $stm->bindParam(1,$correo, PDO::PARAM_STR);
            $stm->execute();
            $_SESSION['USER']=$stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Destroy (){
        try {
            unset($_SESSION['USER']);
            session_destroy();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function ValidateSession (){
        if(!isset($_SESSION['USER']) or is_null($_SESSION['USER'])){
            header("location:?c=index&m=login");
        }
    }
}