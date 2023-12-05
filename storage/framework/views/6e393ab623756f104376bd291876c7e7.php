<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css_index/Eleyenda.css')); ?>">

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
    <a href="<?php echo e(route('registro')); ?>" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
    </div>
<audio  controls autoplay >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>El Tunjo de Oro</h1>
    <figure>
        <img id="caquiona" src="<?php echo e(asset('local_storage/img/tunjo.png')); ?>"  alt="">
    </figure>
    <p>Cuenta la leyenda, que el Tunjo es representado como un muñeco de oro. Algunos dicen que son pequeños ídolos simbólicos o divinos de los "Pijaos"; otros dicen que fueron dioses o solo ofrendas para sus dioses o sus caciques. El Tunjo aparece por las noches en forma de un Bebé inofensivo llorando por las grandes calles, en el cruce de los bosques, de una quebrada, por las ruinas, casas abandonadas o en los ríos. Si alguien cae presa del Tunjo, le dará un buen susto pero nada grave. A cambio de esto, lo enriquecerá con fortunas misteriosas. Si la supuesta "víctima" ignora al Tunjo, este supuesto "niño" abandonado, lo seguirá (o montará si el tipo va en caballo) y le dará un terrible susto de la cual para poder librarse, tendrá que correr o rezar.</p>

    
</div>
<div class="ojo">
    <img src="<?php echo e(asset('local_storage/img/ojo.gif')); ?>" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="<?php echo e(asset('local_storage/img/musicafondo.mp3')); ?>"  type="audio/mpeg">
    
</audio></div><?php /**PATH C:\xampp\htdocs\Magica_colombia\resources\views/HistoriasCaqueta/HistoriaTunjodeoro.blade.php ENDPATH**/ ?>