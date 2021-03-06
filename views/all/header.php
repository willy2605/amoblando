<html>
    <head>
               
        <title>header</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    </head>
    
    <style>
           
                .flexsearch--wrapper {
                        height: auto;
                        width: auto;
                        max-width: 100%;
                        overflow: hidden;
                        background: transparent;
                        margin: 0;
                        position: static;
                }

                .flexsearch--form {
                        overflow: hidden;
                        position: relative; /* flecha */
                }

                .flexsearch--input-wrapper {
                        padding: 0 90px 0 0;  /*espacio de busqueda*/
                        overflow: hidden;
                }

                .flexsearch--input {
                  width: 100%;
                }

                .flexsearch {
                  padding: 0 30px 0 0; /* tamaño del cuadro de busqueda */
                }

                .flexsearch--input {
                  -webkit-box-sizing: content-box;
                        -moz-box-sizing: content-box;
                        box-sizing: content-box;
                        height: 20px;
                        padding: 0 46px 0 10px;
                        border-color: #5b3924;
                        border-radius: 35px; 
                        border-style: solid;
                        border-width: 3px;
                        margin-top: 20px;
                        color: #333;
                        font-family: 'Helvetica', sans-serif;
                        font-size: 12px;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                }

                .flexsearch--submit {
                        position: absolute;
                        right: 0;
                        top: 0;
                        display: block;
                        width: 60px;
                        height: 60px;
                        padding: 0;
                        border: none;
                        margin-top: 5px; 
                        margin-right: 20px; 
                        background: transparent;
                        color: #5b3924; /*color flecha*/
                        font-family: 'Helvetica', sans-serif;
                        font-size: 12px;
                        line-height: 60px;
                }

        </style>
    <body>
 
        <header style="background-color: #5b3924;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/img/logoamoblando.jpg" align="left" style="margin-left: 10px; " >
                </div> 
                
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-9" style=" " >
                                <div class="flexsearch">
                                <div class="flexsearch--wrapper">
                                    <form class="flexsearch--form" action="#" method="post">
                                    <div class="flexsearch--input-wrapper">
					<input class="flexsearch--input" type="search" placeholder="Buscar">
                                    </div>
                                    <input class="flexsearch--submit" type="submit" value="&#10140;"/>
                                    </form>
                                </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3" style=" color: #eec170; padding: 0; margin-left: 0 ; margin-top: 15px"> Síguenos
                                <a href="www.facebook.com" target="_blank"><img src="assets/img/facebook.png" style="width: 35px;height: 35px; "  class="img-responsive" ></a>
                                <a href="https://web.whatsapp.com" target="_blank"><img src="assets/img/whatsapp.png" style="width: 35px;height: 35px; "  class="img-responsive" ></a>
                                <a href="www.youtube.com" target="_blank"><img src="assets/img/youtube.png" style="width: 35px;height: 35px; "  class="img-responsive"  ></a>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-8" style="">
                                <div class="col-md-13 nav-scroller" >
                                    <nav class="nav nav-underline" >
                                        <a style="color:  #eec170; font-size: 20px" class="nav-link" href="?c=index&m=index"><strong>Inicio</strong></a>
                                      <a style="color:  #eec170; font-size: 20px" class="nav-link" href="?c=index&m=quienessomos"><strong>¿Quiénes somos?</strong></a>
                                      <a style="color:  #eec170; font-size: 20px" class="nav-link" href="?c=index&m=productos"><strong>Productos</strong></a>
                                      <a style="color:  #eec170; font-size: 20px" class="nav-link" href="?c=index&m=contacto"><strong>Contacto</strong></a>
                                    </nav>
                                </div>
                                <div class="col-md-1 ">
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <a href="?c=index&m=login"><img src="assets/img/carrito.png" style="width: 35px;height: 35px; "  class="img-responsive" ></a>
                                <a href="?c=index&m=register" class="btn btn-info btn-sm" >Registrate</a>
                                <a href="?c=index&m=login" class="btn btn-success btn-sm  ">Iniciar sesion</a>
                            </div>
                        </div>
                  </div>
                
                
            </div>
        </div>
        </header>
            
