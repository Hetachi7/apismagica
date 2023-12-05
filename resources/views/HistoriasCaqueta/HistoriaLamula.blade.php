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
    <h1>La Mula del Diablo</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/mula.png') }}"  alt="">
    </figure>
    <p>Suele ser considerada como una hermosa y atractiva mujer de edad primaveral, seductora y  comprometedora en sus actos al punto que llego a seducir a un sacerdote.
        La mujer que enamora a un sacerdote recibe el apodo de “Mula del Diablo”. Este remoquete aún perdura en la mente de la gente y se acostumbra con más frecuencia en los pueblos pequeños como Oporapa, Palestina, Nátaga y Elías donde los sacristanes hacen las veces de defensores de los sacerdotes. Según otro relato escuchado a un desconocido, cuando la amante del sacerdote regresaba a su casa se convertía en una enorme mula que despedía a su paso un asqueante olor a azufre producido por los vapores  emanados de su nariz. Además, al avanzar a gran velocidad el producía con sus cascos chispas y llamas visibles a gran distancia. Si era enlazada  y lograba  huir de sus perseguidores rompiendo el lazo, podía ser encontrada, pues la parte del lazo que arrastraba quedaba extendida, la mitad dentro de la casa y la otra mitad hacia el exterior de la misma,  pasando bajo la puerta principal.  
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