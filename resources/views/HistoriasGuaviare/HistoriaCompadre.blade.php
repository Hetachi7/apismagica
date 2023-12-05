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
    <h1>Compadre Bototo</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/bototo.jpg') }}"  alt="">
    </figure>
    <p>cuando un niño ha sido alzado por una persona que ha estado en un cementerio o ha ido a un velorio se dice que el niño queda yelado, entonces se lo ofrecen al compadre para que le quite el yelo, llevando al niño a abrazar el tronco y colgando una prenda suya de una rama del árbol.
        Cuando se está en algún parrandón o festividad, se acostumbra regar en el piso el primer trago del alcohol para ofrecerlo a los muertos. 
        Cuando se cae un cuchillo se dice que viene la visita de un hombre a la casa y cuando se cae una cuchara llega una mujer.
        Cuando se le reza el novenario al recién fallecido, se deja un vaso con agua por que por la noche la persona viene a beber de ese vaso. 
        Cuando llega un nuevo miembro a la casa (bebé) le amarran una cinta roja en la muñeca derecha para que los espíritus del mal no se lo lleven.
        Las mujeres recién casadas se ponen los calzones al revés para que las brujas (solteronas y envidiosas) no eviten que tengan relaciones con el esposo.
        </p>
    
        <a href="{{route('Felipe2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


