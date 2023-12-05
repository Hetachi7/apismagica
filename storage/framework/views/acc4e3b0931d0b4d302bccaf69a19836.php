<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eformulario.css')); ?>">
    
</head>
<body>
    <header>
    
            <div class="row">
                <div class="container-fluid sticky-top">
                    <nav class="navbar navbar-expand-lg bg-black navbar-black ">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav" style="font-weight: 600px; padding-right: 20px; font-size: 20px;">
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>" alt="Logo" width="100px" height="100px" class="d-inline-block align-text-top">
                                <a class="nav-link" href="<?php echo e(route('inicio')); ?>" style="color: aliceblue; margin-right: 60rem;">MAGICA COLOMBIA</a>
                                </a>
                              </a>
                          <a class="nav-link active" style="color: aliceblue; margin-right:1rem;" aria-current="page" href="<?php echo e(route('subirhistoria')); ?>">Sube tu Historia</a>
                          <a class="nav-link" href="<?php echo e(route('info')); ?>" style="color: aliceblue; margin-right:1rem;">Quienes somos</a>
                          <a class="nav-link" href="<?php echo e(route('contac')); ?>" style="color: aliceblue;margin-right:1rem;">Contacto</a>
                          <a class="nav-link " aria-disabled="page" href="<?php echo e(route('registro')); ?>" style="color: aliceblue;margin-right:1rem;">Registrate</a>
                        </div>
                      </div>
                    </div>
                  </nav>  
                 </div>
                
                  
            </div>
    </header>    
        </div>
       <div class="container">
        <div class="row">
            <img src="<?php echo e(asset('local_storage/img/subirhistoria.png')); ?>"  height="300px" style="  margin-left: auto; margin-right: auto; align-items: center;">
            <div class="col-sm-12 col-md-6 col-lg-6" style=" margin-top: 20%;
            height: 100%;
            width: 50%;  
            float: left;
            margin-bottom: 50px;
            align-items: center;
            text-align: center;;">
                <form style=".hover{
                    background: rgb(255, 255, 255);
                    color: rgb(139, 0, 0);}" action="<?php echo e(route('guardarHistoria')); ?>" method="POST" enctype="multipart/form-data">
            
                    <label  style="color: aliceblue ; font-size: 30px;" for="opciones">Seleciona el departamento</label>
                    <br>
                    <select name="opciones" id="opciones" style="   width: 400px;
                    height: 40px;
                    font-size: 20px;
                    text-align: center;
                    background: rgb(139, 0, 0);
                    border: 2px solid rgb(139, 0, 0);
                    border-radius: 5px;
                    color: white; ">
                        <option value="opcion1">Amazonas</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>

                    <br>
                    <label  style="color: aliceblue; font-size: 30px;"  for="opciones2">De que ciudad es tu historia:</label>
                    <br>
                    <select name="opciones2" id="opciones2" style="   width: 400px;
                    height: 40px;
                    font-size: 20px;
                    text-align: center;
                    background: rgb(139, 0, 0);
                    border: 2px solid rgb(139, 0, 0);
                    border-radius: 5px;
                    color: white;">
                        <option value="opcion1">Opción 1</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
                    <br>
                    <label  style="color: aliceblue; font-size: 30px;" for="opciones3">De que genero es tu historia:</label>
                    <br>
                    <select name="opciones3" id="opciones3" style="   width: 400px;
                    height: 40px;
                    font-size: 20px;
                    text-align: center;
                    background: rgb(139, 0, 0);
                    border: 2px solid rgb(139, 0, 0);
                    border-radius: 5px;
                    color: white;">
                        <option value="opcion1">Opción 1</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
                    
            </div>
           
            <div class="col-sm-12 col-md-6 col-lg-6" style="text-align: center;">
                <h1 style="color: aliceblue;">Escribe tu historia</h1>
                <br>
                <div class="jumbotron bg-image" style="background-image: url(<?php echo e(asset('local_storage/img/hoja.png')); ?>) ">
                    <div class="opacity-25" style="height: 5rem"  >
                        <br>
                        <br>
                        <br>
                        <textarea name="texto" id="texto" rows="38" cols="80"; style="color: black"></textarea>
    
                    </div>
                    </div>
                </div>
            <div class="col-sm-12 col-md-6 col-lg-6" style="text-align: center; color:aliceblue;">
                <label style=" padding: 10px 20px;
                margin-top: 35px;
                background-color: rgb(139, 0, 0);
                border-radius: 20px;
                cursor: pointer;
                font-size: 16px;
                text-align: center;
                display: inline-block;
                border: none;
                border: 2px solid rgb(139, 0, 0);" for="imagen">imagen</label>
                <input type="file" name="imagen" id="imagen" >

                <br>
                <input style=" padding: 10px 20px;
                margin-top: 35px;
                background-color: rgb(139, 0, 0);
                border-radius: 20px;
                cursor: pointer;
                font-size: 16px;
                text-align: center;
                display: inline-block;
                border: none;
                color:aliceblue;
                border: 2px solid rgb(139, 0, 0);" type="submit" value="Guardar">
            </div>
        </div>
       </div>

        
    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/formularioHistoria.blade.php ENDPATH**/ ?>