<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdministradorController{
    private $modelSecurity;
    public function __construct() {
        try {
        $this->modelSecurity= new Security();
        $this->modelSecurity->ValidateSession();
        } catch (Exception $e) {
          die($e->getMessage());  
        }   
    }


    
            
    public function  home(){
        require_once 'views/all/coreui/header.php';
        require_once 'views/all/coreui/navbar.php';
        require_once 'views/all/coreui/sidebar.php';
        require_once 'views/administrador/home.php';
        require_once 'views/all/coreui/aside.php';
        require_once 'views/all/coreui/footer.php';
      }
      public function formulario(){
         require_once 'views/index/register.php';
     }
     
     public function guardar_usuario(){
         $nombre=$_POST['nombres'];
         $apellidos=$_POST['apellidos'];
         $data=array($nombres,$apellidos);
         parent::Crear($data);
     }
      
     public function registrarusuario() {
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php'; 
        require_once 'views/index/register.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';
    }
}
    
