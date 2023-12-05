<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Einisio.css')); ?>">
</head>
<body>

    <div class="formulario">
        <img class="avatar" src="<?php echo e(asset('local_storage/img/logo.png')); ?>"  alt="Logo de empresa">
        <h1>Inicio de sesión</h1>
        <form method="post" action="login">
               
                <label>Nombre de usuario</label>
                <input type="text" placeholder="Ingrese su nombre de usuario">
                
                <?php $__errorArgs = ['apellidos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            

                <label>Contraseña</label>
                <input type="password" placeholder="Ingrese su contraseña">
                

                
                    <input href="<?php echo e(route('inicio')); ?>"type="submit" value="Iniciar Sesion">
                

                  
                <a href="<?php echo e(route('registro')); ?>">Aún no tiene cuenta</a>
                <a href="<?php echo e(route('recuperar')); ?>">Ha olvidado su contraseña</a>
               

            
            

            </div>

        </form>

    </div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/iniciodesesion.blade.php ENDPATH**/ ?>