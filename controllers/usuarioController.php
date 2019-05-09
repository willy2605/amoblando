<?php 

 class usuarioController{

 	//creacion de metodo. Se llama este metodo en trabajo/index (principal)
 	private $modelestudiantes;
	public function __construct(){
		try{
		  $this->modelestudiantes= new usuario();
		  //$this->modelfichas= new fichas();
		} catch (Exception $e){
			die($e->getMessage());
			} 
	}


 	public function dashboard() {
 		require_once('views/all/header.php');	
 		require_once('views/all/navbar.php');
 		require_once('views/dashboard.php');
 		require_once('views/all/footer.php');
 	}



 	public function registrarusuario(){
 		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
		$correo=$_POST['correo'];
		$edad=$_POST['edad'];
		$genero=$_POST['genero'];
		$rh=$_POST['rh'];
		$idfichas=$_POST['idfichas'];

		// con este codigo se instancia para llamar archivo de usuarios en funcion crear
		$this->modelestudiantes->crear($nombres,$apellidos,$correo,$edad,$genero,$rh,$idfichas);
		//header("location:?c=estudiantes&m=dashboard");
	}


	public function eliminarusuario(){
		$idusuario=$_POST['idusuario'];
		$this->modelusuario->eliminar($idusuario);
	 	header("location:?c=usuario&m=dashboard");
	}

	public function consultarusuario(){
		require_once('views/all/header.php');
		require_once('views/all/footer.php');
	}

	public function editarusuarioForm(){
		require_once('views/all/header.php');
		require_once('views/editar.php');
		require_once('views/all/footer.php');
	}

	public function actualizarestudiantesForm(){
		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
		$correo=$_POST['correo'];
		$edad=$_POST['edad'];
		$genero=$_POST['genero'];
		$rh=$_POST['rh'];
		$idestudiantes=$_POST['idestudiantes'];


		// con este codigo se instancia para llamar archivo de usuarios en funcion crear
		$this->modelusuario->actualizar($idusuario,$nombres,$apellidos,$correo,$edad,$genero,$rh);
		//header("location:?c=index&m=index");



	}

     



 }

 ?>

