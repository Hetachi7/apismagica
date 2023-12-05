<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/Eleyenda.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{asset('local_storage/img/logo.png')}}"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="{{ asset('local_storage/img/ojo.gif') }}" >
    </div>
<audio  controls autoplay >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>Historia de la Guiatana</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/guitana.png') }}"  alt="">
    </figure>
        <p>español: esa figura fue una mujer llamada La Gaitana, de cuya existencia ningún huilense duda a pesar de los interrogantes planteados por historiadores, académicos y difamadores.
            En cualquier caso, mito o realidad, la leyenda de La Gaitana ya hace parte del imaginario cultural del pueblo huilense, el cual identificó su figura con la resistencia aborigen frente al invasor español, con el orgullo libertario de su estirpe y de su descendencia mestiza, con la heroína que no sólo protagonizó un acto de venganza individual por la cruel ejecución de su hijo a manos del capitán Pedro de Añasco, sino con la mujer comprometida que fue capaz de ejercer gran liderazgo entre su pueblo, de replantear tácticas militares cuando los suyos, infinitamente superiores en número, eran sistemáticamente destrozados por la nueva tecnología militar de arcabuces, lanzas y espadas enemigas, con la estratega audaz para imaginar nuevas formas de ataque y de defensa ante una situación bélica nunca antes sospechada, pero ante todo, con la visionaria política que planteó argumentos ideológicos a los caciques vecinos, mentalmente disminuidos ante las sucesivas derrotas, para unificar la lucha y expulsar definitivamente a las avanzadas españolas en su territorio.
            </p>
       
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


