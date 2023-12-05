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
    <h1>El Valle del Patia</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/patia.png') }}"  alt="">
    </figure>
        <p>Luego, cuando las aves realizaban su espectáculo, los monstruos saltaron, atrapando a muchas mientras volaban y ahuyentando al resto con su voz ronca como de trueno. Posteriormente, comenzaron a nadar de norte a sur y de sur a norte, bordeando las cordilleras y empezaron a beberse el agua.
            Después que se tomaron toda el agua los monstruos se hincharon. Con sus patas y sus hocicos abrieron dos tremendo huecos, se enterraron y se quedaron dormidos. Entonces, de sus fauces comenzó a brotar agua a borbotones que con el tiempo se fue mermando. El agua que salía de la boca de los dos monstruos dio origen a los ríos Patía y Guachicono. Estos ríos bordean las cordilleras Occidental y Central, formando una especie de collar alrededor del Valle.
            No se sabe si los monstruos continúan durmiendo en las profundidades de la tierra o si están agonizando, así como agoniza el agua de los ríos. Lo que sí se sabe es que no pudieron arrancarle la belleza a ese suelo, porque en el valle creció mucha vegetación. Como los monstruos tenían millares de patas, de cada una de ellas nacieron ceibas, samanes, tamarindos, almendros, totumos y todo tipo de árboles.
            
            </p>
        <a href="{{route('patia')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


