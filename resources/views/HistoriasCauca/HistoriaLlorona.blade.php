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
    <h1>La Llorona del Cauca</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/llorona.png') }}"  alt="">
    </figure>
    <p>Durante los primeros años del México Colonial existió una mujer indígena de gran belleza que se enamoró locamente de un español y con quien tuvo tres hijos. A pesar de ello este caballero nunca la desposó y sólo la visitaba en limitadas ocasiones; años más tarde, por así convenirle a sus intereses el español contrajo nupcias con una mujer española. Cuando la mujer indígena se enteró de la traición, enloqueció de rabia y celos a tal grado que asesinó a sus tres hijos ahogándolos en un río, al darse cuenta de lo que había hecho, llena de un gran dolor se suicidó también. Desde entonces, su alma no ha tenido descanso y todas las noches vaga por las calles solitarias o cerca de los ríos buscando a sus hijos y llorando por su muerte, lanzando gritos y gemidos capaces de horrorizar a todo el que la escuche. Todavía hoy, si se presta un poco de atención, durante algunas noches es posible escuchar su terrible lamento “Ay mis hijos” que repite desde que los asesinó; hay incluso quienes afirman haberse sentido atraídos por la visión de una hermosa mujer solitaria vestida de blanco caminando en medio de la noche </p>
    
        <a href="{{route('llorona2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


