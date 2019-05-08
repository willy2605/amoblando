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


<body style="background-color: F2EADC">
    
</body>    
    <div class="container" >
    <div class="row" style="justify-content: center">
    <div class="col-md-3" >
        <nav aria-label="breadcrumb"  >
            <ol class="breadcrumb" style="background: #F2EADC">
                <li class="breadcrumb-item"><a href="?c=index&m=index">Registro</a></li>
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
            <form action="" method="post" class="form-consulta"> 
                <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Nombres</strong> <span>*</span>
                        <input type="text" name="nombre" placeholder="Nombres" class="campo-form" required>
                    </label>
                </div>
                <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Apellidos</strong> <span>*</span>
                        <input type="text" name="nombre" placeholder="Apellidos" class="campo-form" required>
                    </label>
                </div>
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
                <button style="background: #ff9f1c" type="submit" class="btn btn-primary">Registrar</button>
	</form>
        </div>
    </div>
</div>
            </div>
        </div>
        </div>
    </div>
</div>