<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="stylesheet" href="<?php echo e(asset('css_index/Estilo-Perfil.css')); ?>">
</head>
<body>
 
    <header>
        <a href="<?php echo e(route('inicio')); ?>" class="logo">
            <img src="<?php echo e(asset('local_storage/img/logo.png')); ?>"  alt="">
            <h2>La Mágica Colombia</h2>
        </a>
        
        
        <nav>
            <a href="<?php echo e(route('subirhistoria')); ?>" class="link">¿Quieres subir tú historia?</a>
            <a href="<?php echo e(route('info')); ?>" class="link">¿Quienes Somos?</a>
            <a href="<?php echo e(route('contac')); ?>" class="link">Contacto</a>
        </nav>
        </header>

    <div class="perfil">
        <div class="head">
            <h1>Perfil</h1>
         <p id="fo-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam maiores temporibus eos illo? Delectus adipisci veniam enim ratione deleniti eaque.</p>
        </div>
       

         <div class="foto-perfil">
            <img src=< src="<?php echo e(asset('local_storage/img/perfil.jpg')); ?>" alt="">
         </div>
         
         <div class="desc-izq">
            <h2>Acerda de mí</h2>
            <p id="per-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis amet minima nobis rerum itaque nulla reprehenderit ex officiis quasi, et minus consequatur. Dicta repudiandae distinctio in esse! Optio earum unde, voluptatum, modi possimus quo assumenda tempore mollitia aliquid perspiciatis cumque!</p>
         </div>

         <div class="inf-der">
            <h2>Detalles</h2>
            <h3>Nombre:</h3>
            <p id="per-nom">Juanito Alimaña</p> 

            <h3>Edad: </h3>
            <p id="per-edad">Juanito Alimaña</p> 

            <h3>Telefono: </h3>
            <p id="per-tel">Juanito Alimaña</p> 

            <h3>Email: </h3>
            <p id="per-ema">Juanito Alimaña</p> 
         </div>

         <button class="boton" id="open">Actualizar Datos</button>
         

    </div>

    <div id="modal-container" class="modal-container ">
       
        <div class="modal" id="modal">
            <form class="form-control  w-50" name="form" id="form" action="">
                <button id="cerrar">Cerrar</button>
                <h1>Actualizar Datos</h1>
                <div class="form-control border-white">
                    <label for="descri2">Descripción : </label>
                    <input type="text" id="descr2" placeholder="Descripción">
                    <small>Error message</small>
                </div>
                <div class="form-control border-white">
                    <label for="descri">Sobre ti: </label>
                    <input type="text" id="descr"  placeholder="Sobre ti">
                    <small>Error message</small>
                </div>
                <div class="form-control border-white">
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre"  placeholder="Escriba sus nombres">
                    <small>Error message</small>
                </div>
                <div class="form-control border-white">
                    <label for="edad">Edad: </label>
                    <input type="number" id="edad" placeholder="Escriba su edad" >
                    <small>Error message</small>
                </div>
                <div class="form-control border-white">
                    <label for="telefono">Telefono: </label>
                    <input type="text" id="telefono" placeholder="Escriba su numero de Telefono">
                    <small>Error message</small>
                </div>
                <div class="form-control border-white">
                    <label for="email">Email: </label>
                    <input type="text" id="email" placeholder="example@example.com">
                    <small>Error message</small>
                </div>
                <div>
                    <img id="imagenPerfil" src="<?php echo e(asset('')); ?>"   alt="Imagen de Perfil">
                </div>
                
                <div>
                    <input type="file" id="inputImagen" accept="image/*">
                </div>
                <button class="position-absolute btn btn-danger cerrar" id="guardar">Actualizar</button>

            </form>


        </div>

    </div>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/perfil.blade.php ENDPATH**/ ?>