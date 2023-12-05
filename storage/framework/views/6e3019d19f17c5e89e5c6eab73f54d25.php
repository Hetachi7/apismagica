<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eformulario.css')); ?>">
    <title>Cuadro de Texto a la Derecha</title>
</head>
<body>
    <header>

        <a href="<?php echo e(route('inicio')); ?>" class="logo">
            <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>" alt="">
            <h2>La Mágica Colombia</h2>
        </a>
        
        
        <nav>
            <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
            <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
        </nav>
        </header>
        
        
        <div class="subirh">
            <img src="<?php echo e(asset('local_storage/img/subirhistoria.png')); ?>" >
        </div>


    </header>

    <div class="contenedor">
        <div class="contenido">

            <div id="formulario">
                <form action="<?php echo e(route('guardarHistoria')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <label for="opciones">Seleciona el departamento:</label>
                    <select name="opciones" id="opciones">
                        <option value="opcion1">Amazonas</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
                    <label for="opciones2">De que ciudad es tu historia:</label>
                    <select name="opciones2" id="opciones2">
                        <option value="opcion1">Opción 1</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
                    <label for="opciones3">De que genero es tu historia:</label>
                    <select name="opciones3" id="opciones3">
                        <option value="opcion1">Opción 1</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion3">Opción 3</option>
                    </select>
            </div>
                <div class="cuadro-historia">
                    
                    <h1>Escribe tu historia</h1>

                
                    <textarea name="texto" id="texto" rows="60" cols="100"></textarea>
                </div> 
                
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen">

                <input type="submit" value="Guardar">
        </div>
           
    </div>



</body>
</html><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/formulario.blade.php ENDPATH**/ ?>