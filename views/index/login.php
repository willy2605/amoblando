<style>
    .form-consulta {
        max-width: 500px; 
        background: #5b3924; 
        padding: 25px;
        }
        
    .campo-form {
        width:100%; 
        height:36px; 
        margin:2px 0 6px; 
        padding-left:6px; 
        box-sizing: border-box; 
        border-radius:3px; 
        }
        
        label span {
            color: #f00
        }
        
        textarea {
            min-height: 150px;
        }
        
        .btn-form {
            display: inline-block; 
            border:0; 
            background: #000; 
            height: 46px; 
            line-height: 46px; 
            padding: 0 20px; 
            border-radius: 6px; 
            color:#fff; 
            text-decoration: none; 
            text-transform: uppercase; 
            letter-spacing: 1px}
        
        .btn-form:hover {
            background: #444
        }
</style>

<!--<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><br><br>
            <center>
            <a href="?c=index&m=register" class="btn btn-info">Registrate</a>
            <a href="?c=index&m=login" class="btn btn-success   ">Iniciar sesion</a>
            </center>
        </div>
    </div>
</div>-->

<body style="background-color: F2EADC">
    
</body>    
    <div class="container" >
    <div class="row" style="justify-content: center">
    <div class="col-md-3" >
        <nav aria-label="breadcrumb"  >
            <ol class="breadcrumb" style="background: #F2EADC">
                <li class="breadcrumb-item"><a href="?c=administrador&m=home">Inicio de sesion</a></li>
            </ol>
        </nav>            
    </div>
    <div class="col-md-6">
                               
    </div>
    </div>
                    
                
    
    <div class="row" style="justify-content: center">
        <div class="col-md-9" align="center" style=" height: 500px ">
            <div class="col-md-6" align="center" style="justify-content: center">
                <div class="container">
    
    <div class="row">
        <div class="cold-md-4">
            <!-- soporta -->
            <form action="?c=index&m=auth_user" method="post" enctype="multipart/form-data" class="form-consulta"> 
                <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Correo Electronico: </strong><span>*</span>
                            <input type="email" name="email" placeholder="Email" class="campo-form" required>
                    </label>
                </div>
                <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Contraseña</strong></label>
                        <input class="form-control" type="password" name="password" id="password" required="">
                </div>  
                <!--<input style="background: #ff9f1c; color: #F2EADC" type="submit" value="Enviar" class="btn-form">-->
                <button style="background: #ff9f1c" type="submit" class="btn btn-primary"><a  href="?c=index&m=home">Iniciar sesion</a></button>
                <!--<a  href="?c=index&m=home" class="btn btn-primary px-4">Sesion</a>-->
                
               <!-- <a id="btnSubmit" href="?c=administrador&m=home&send=true" class="btn btn-success text-white" >inicio</a>-->
                 
                 <br/><br/>
                 <?php
                 if(@$_REQUEST['send']=='true'){
                 ?>
                 <div class="alert alert-success" role="alert">
                     <strong>Se han guardado los cambios correctamente</strong>
                    <?php 
                 }
                     ?>
                     
                 </div>
	</form>
        </div>
    </div>
</div>
            </div>
        </div>
        </div>
    </div>
</div>




