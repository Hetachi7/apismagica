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
    <h1>Rompellano</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/rompellano.png') }}"  alt="">
    </figure>
    
    <p>Muy arraigada en Arauca (capital), es la devoción a Eduardo Fernández, más conocido como “Rompellanos” Natural de Casanare, posiblemente de la población de Hato Corozal, hombre alto, delgado, cabello castaño y lacio, ojos claros y brillantes. Antiguo guerrillero de la época de los años 50, formó parte de las conocidas guerrillas liberales de los llanos. Hizo la revolución al lado de Guadalupe Salcedo, grupo éste que operaba en las regiones de Arauca y Casanare.
        Quienes lo conocieron, coinciden en afirmar que era un hombre noble y generoso; así lo expresó el señor Román Cisneros: “A Eduardo le nacía luchar incansablemente por los pobres, robaba a los ricos para ayudar a los marginados”.
        Su inconformidad lo condujo a la “revolución” y, finalmente, a abandonar el territorio por temor a perder su vida.
        Cuando se presentó la primera amnistía, el 13 de Junio de 1953, en el gobierno del General Gustavo Rojas Pinilla, Eduardo Fernández se acogió al decreto en la población de Tame
        </p>
    
        <a href="{{route('Rompe2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>
