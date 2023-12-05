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
    <h1>La Muelona</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/muelona.jpg') }}"  alt="">
    </figure>
    
    <p>Se dice que en este caserío vivían dos compadres brujos que, a primera oportunidad, trataron de Este mito está representado por una mujer muy bella y provocadora de colmillos bien aguzados. Dicen que es coquetona y que seduce con facilidad a los hombres con su sonrisa cautivante y llena de gracia. El porte simétrico de su cuerpo y sus hermosos cabellos atraen a bien parecidos caballeros, quienes, a primera vista se enamoran perdidamente de ella. Para lograr su cometido lo toma de la mano, con insólitos devaneos los abraza, les pone conversación agradable y con su palabra seductora se los lleva por alrededores solitarios y oscuros. El problema se presenta cuando tiene ocasión el anhelado beso. Este es demoledor y trágico: con sus muelas de hacha tritura ferozmente al enamorado del momento.</p>
    
    
        <a href="{{route('muelon2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>