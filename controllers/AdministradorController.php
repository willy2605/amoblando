<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of administradorController
 *
 * @author @heidydelgado @wilmervalbuena
 */
class administradorController {
    //put your code here
    public function dashboard() {
        //esta estructura es clave
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php';
        require_once 'views/administrador/dashboard.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';
    }
    
     public function perfil() {
        //esta estructura es clave
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php';
        require_once 'views/administrador/perfil.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';
    }
    public function usuario() {
        //esta estructura es clave
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';
        require_once 'views/all/sidebar.php';
        require_once 'views/administrador/usuario.php';
        require_once 'views/all/aside.php';
        require_once 'views/all/footer.php';
    }
    
}
