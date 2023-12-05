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
    <h1>LA Historia de Chumbelo</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/chumbelo.png') }}"  alt="">
    </figure>
    <p>A doce horas de camino de herradura, hacia el occidente de la loma que separa las cuencas de lo ríos Afán y Caquetá, existe un salto que avienta las aguas a un precipicio por todos desconocido. Se dice que en la parte más alta del caudal habitó una tribu de la familia de los ingas y dejó inscripciones en las rocas y vestigios de su civilización.
        Un tesoro oculto llama la atención y llena de prestigio la leyenda del Churumbelo, diciéndose que en el fondo impenetrable, alguno vio un muñeco de oro macizo, del tamaño de un niño.
        En algunas ocasiones varias personas se han acercado en tiempos de verano al torrente y han visto en las concavidades de las rocas, que son a manera de salones de piedra, amarillear el oro, que es imposible de recoger, porque allí se suceden fuertes y huracanadas tempestades que no permiten acercarse a las cuevas.  
        Nótese que casi invariablemente las gentes agregan a estos tesoros ocultos la narración de tempestades, vendavales y huracanes, y, quizás por adornar, agregan que en el Churumbelo un espíritu, el del rayo o el del huracán, el dios de la montaña o que un uattì malévolo, equivocan los pasos de los aventureros, tuercen los caminos, y les hacen crispar los nervios hasta caer desfallecidos.
        Hacia el sur del Churumbelo en las mismas faldas donde cae el río Afán, está la famosa chorrera encantada, que es un torrente que se precipita a un hoyo profundo de la roca, la cual se divisa desde muy cerca de Mocoa, situándose en la carretera Mocoa-Pitalito.
        Ponchayaco es el nombre del río que forma esta bella cascada y desde sus cabeceras, en donde hay una mina de cristal de cuarzo, rodó un pedazo de tierra que tenia 30 gramos de oro.
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


