<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Erecuperar.css')); ?>">
</head>
<body>

    <div class="formulario">
        <img class="avatar" src="<?php echo e(asset('local_storage/img/logo.png')); ?>"  alt="Logo de empresa">
        <h1>Recuperación de cuenta</h1>
        <form action="post">
               
                <label>Escribe el G-mail registrado</label>
                <input type="text" placeholder="Ingrese su G-mail">
                
            

                
                

                
                    <input href="<?php echo e(route('inicio')); ?>"type="submit" value="Enviar correo">
                

                  
                <a href="<?php echo e(route('registro')); ?>">Aún no tiene cuenta</a>
                <a href="<?php echo e(route('iniciosesion')); ?>">Iniciar sesión</a>
                <a href="<?php echo e(route('inicio')); ?>">Ir al inicio</a>
               

            
            

            </div>

        </form>

    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/Recuperar.blade.php ENDPATH**/ ?>