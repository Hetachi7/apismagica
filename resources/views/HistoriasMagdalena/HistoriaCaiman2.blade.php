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
    <h1>El Hombre Caiman</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/caiman.png') }}"  alt="">
    </figure>
    
    <p>La única persona que se atrevió a acercársele después fue su madre. Todas las noches lo visitaba en el río para consolarlo y llevarle su comida favorita: queso, yuca y pan mojado en ron. Tras la muerte de su madre (que murió de tristeza por no haber podido encontrar al brujo que había elaborado las pócimas porque había muerto) después de entregarle las pócimas. 
        El Hombre Caimán quedó solo y sin nadie que lo cuidara, decidió dejarse arrastrar hasta el mar por el río hasta Bocas de Ceniza, como se conoce la desembocadura del río Magdalena en el mar Caribe a la altura de Barranquilla.
         Desde entonces, los pescadores del Bajo Magdalena, desde Plato hasta Bocas de Ceniza, permanecen pendientes para pescarlo en el río o cazarlo en los pantanos de las riberas para demostrar que era una leyenda real.
        .</p>
    
    
        <a href="{{route('caiman')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>