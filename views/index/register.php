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
                <li class="breadcrumb-item"><a href="?c=index&m=index" style="color: #5b3924">Registro</a></li>
            </ol>
        </nav>            
    </div>
    <div class="col-md-6">
                               
    </div>
    </div>

    <div class="row" style="">
        <div class="col-md-9" align="center" style="  ">
            <div class="col-md-6" align="center" style="">
               
                <div class="container">
   
   <div class="row"> 
       <div class="col-md-2">
           
         </div>
       <div class="col-md-10" style="background-color:#5B3924; width:50px; padding: 30px; ">
           <!-- soporta -->
           <form action="?c=index&m=store_user" method="post" enctype="multipart/form-data">
           
                <div class="form-group">
                   
                    <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Nombres</strong></label>
                    <input class="form-control" type="names" name="names" id="names" required="">
                    </div>

                    <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Apellidos</strong></label>
                    <input class="form-control" type="names" name="names" id="names" required="">
                    </div>

                    <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Correo electrónico</strong></label>
                    <input class="form-control" type="email" name="email" id="email" required="">
                    </div>
                    
                    <label style="color: #ff9f1c"><strong>Tipo de Documento</strong></label>
                    <select style="color:#5B3924">
                    <option value="Tipo de Documento"></option>
                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option> 
                    <option value="Cedula de Extranjeria">Cedula de Extranjería</option> 
                    <option value="Pasaporte">Pasaporte</option>                     
                    </select>
                    
                    <div class="form-group">  
                    <label style="color: #ff9f1c"><strong>Documento</strong></label> 
                    <input class="form-control" type="names" name="names" id="names" required="">
                    </div>
                    
                    <label style="color: #ff9f1c"><strong>Genero</strong></label>
                    <select style="color:#5B3924">
                    <option value="Genero">Género</option>
                    <option value="Masculino">Masculino</option> 
                    <option value="Femenino">Femenino</option>                                     
                    </select>
              
                    <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Ciudad</strong></label> 
                    <input class="form-control" type="names" name="names" id="names" required="">
                    </div>
               
                    <div class="form-group">
                    <label style="color: #ff9f1c"><strong>Contraseña</strong></label>
                    <input class="form-control" type="password" name="password" id="password" required="">
                    </div>
                    
                    <center><button style="background: #ff9f1c" type="submit" class="btn btn-primary">Registrar</button></center>
           </form>
       </div>
   </div>
      <br>
      <br>
</div>
    </div>
   
                
                
            </div>
        </div>
        </div>
    </div>
</div>


<div class="container">
   
   <div class="row"> 
       <div class="col-md-4">
           
         </div>
       <div class="col-md-5" style="background-color:#5B3924; width:20px; padding: 30px; ">
           <!-- soporta -->
           <form action="?c=index&m=store_user" method="post" enctype="multipart/form-data">
           <select style="color:#5B3924">
               <option value="Tipo de Documento">Tipo de Documento</option>
               <option value="Cedula de Ciudadania">Cedula de Ciudadania</option> 
               <option value="Cedula de Extranjeria">Cedula de Extranjería</option> 
               <option value="Pasaporte">Pasaporte</option>                     
               </select>
               <br>
               <br>
               <div class="form-group">
               <label style="color:#F2D2B3">Documento:</label> 
                   <input class="form-control" type="names" name="names" id="names" required="">
               </div>
               <select style="color:#5B3924">
               <option value="Genero">Género</option>
               <option value="Masculino">Masculino</option> 
               <option value="Femenino">Femenino</option>                                     
               </select>
               <br>
               <br>
               <div class="form-group">
                   <label style="color:#F2D2B3">Nombres:</label> 
                   <input class="form-control" type="names" name="names" id="names" required="">
               </div>
               <div class="form-group">
               <label style="color:#F2D2B3">Apellidos:</label> 
                   <input class="form-control" type="names" name="names" id="names" required="">
               </div>
               <div class="form-group">
               <label style="color:#F2D2B3">Ciudad:</label> 
                   <input class="form-control" type="names" name="names" id="names" required="">
               </div>
               <div class="form-group">
                   <label style="color:#F2D2B3">Correo electronico:</label> 
                   <input class="form-control" type="email" name="email" id="email" required="">
               </div>
               <div class="form-group">
                   <label style="color:#F2D2B3">Contraseña:</label>
                   <input class="form-control" type="password" name="password" id="password" required="">
               </div>
               <button type="submit" class="btn boton2" style="color: #5B3924">Registrar</button>
           </form>
       </div>
   </div>
      <br>
      <br>
</div>
   

