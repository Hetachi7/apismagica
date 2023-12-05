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
    <h1>Historia del Yage</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/Yage.png') }}"  alt="">
    </figure>
    <p>La imaginación indígena ha encontrado en la planta del yagé un motivo más para supersticiones y leyendas Los indios del sur atribuyen a la bebida del yagé propiedades infrahumanas que transforman la personalidad. En algunas ocasiones elaboran la bebida del yagé, bien el curaca solo o acompañado de sus amigos. Esta bebida extraída de una planta produce efectos narcóticos de alucinación que es casi imposible describir.
        En medio de la embriaguez los indígenas ven fantasías, asisten a mundos desconocidos de sorprendente belleza o terror, los poseídos del narcótico se transforman, pudiera decirse, de humanos, en espíritus del bien o del mal, e imitan las más raras figuras del mundo real o de la superstición imaginaria.
        El día de la toma del yagé todos los habitantes invitados se reúnen en la casa del curaca, quien recibe primero la vasija conteniendo el narcótico y el curaca reza sus oraciones rituales tendientes a ahuyentar ordinariamente a los “Uattis”; los asistentes
        </p>
    
        <a href="{{route('Yage2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


