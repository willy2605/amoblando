<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IndexController {

    
    public function index(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/index.php';
        require_once 'views/all/footer.php';
    }
    
    public function quienessomos(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/quienessomos.php';
        require_once 'views/all/footer.php';
    }
    
    public function productos(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/productos.php';
        require_once 'views/all/footer.php';
    }
    
    public function escritorios(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/escritorios.php';
        require_once 'views/all/footer.php';
    }
    
    public function semanarios(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/semanarios.php';
        require_once 'views/all/footer.php';
    }
    
    public function camas(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/camas.php';
        require_once 'views/all/footer.php';
    }
    
    public function sofas(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/sofas.php';
        require_once 'views/all/footer.php';
    }
    
    public function armarios(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/armarios.php';
        require_once 'views/all/footer.php';
    }
    
    public function sillas(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/sillas.php';
        require_once 'views/all/footer.php';
    }
    
    public function contacto(){
        $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/contacto.php';
        require_once 'views/all/footer.php';
    }
    

   public function register(){
       $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/register.php';
        require_once 'views/all/footer.php';
   }

   public function login(){
       $titulo='';
        require_once 'views/all/header.php';
        require_once 'views/index/login.php';
        require_once 'views/all/footer.php';
   }
  
  
}



//var_dump($data);
