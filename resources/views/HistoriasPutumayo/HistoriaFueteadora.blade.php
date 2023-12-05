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
    <h1>Mito Fueteadora</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/futeadora.png') }}"  alt="">
    </figure>
    <p>El indio semidesnudo se retorcía en su hamaca, presentaba grandes hematomas en las piernas y en la espalda. Colgada de un palo que servía de cerca se hallaba una larguísima, delgada y horrible víbora.
        - “Perro animal”, dijo el cacique.  
        - “¿Qué pasar taita?”, pregunté alarmado. 
        - “Fueteadota golpear a muchacho”, me respondió.
        - “No, de eso nadie morir”, fue su respuesta y salió a atender el paciente.
        Tres días permaneció postrado el enfermo al cabo de los cuales se levantó apoyado en un bastón haciendo esfuerzo sobrehumano para caminar, fue entonces cuando me narró la historia.
        “Yo caminar por el monte cuando encontrar unas matas grandes de yoco; yo ir a cogerlas y cuando estar cogiéndolas sentirme amarrado de las piernas. Al momento sentir que maniatadura apretar más hasta juntarme las piernas, yo casi caer, yo mirar qué ser y entonces ver querer la fueteadota.
        Ella empezar a golpearme duro con cola, y buscar cabeza para ahogarla pero ella tenerla escondida entre ligaduras, jeta de animal echar babaza blanca que rodaba por piernas yo tener babas de yoco en la mano y con ellas golpear en el nudo y ella golpearme más duro; entonces yo acordarme de cuchillo, entonces yo con mano izquierda lograr coger pedazo de cola, ella tener mucha fuerza y ser muy lisa, 
        </p>
    
        <a href="{{route('Fuete2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


