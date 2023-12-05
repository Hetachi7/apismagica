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
    <h1>El indio del agua</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/indioagua.jpg') }}"  alt="">
    </figure>
    
    <p>Este mito está representado por un indio de cabellera larga y espesa que le cubre el rostro y le llega hasta los hombros. Tiene ojos grandes y desorbitados que parecen salírsele de sus hondas cuencas. Estos son de color rojizo e intenso brillo, que le sirven para alumbrarse en el fondo de los ríos y las quebradas donde mora. Se dice que es el mejor custodio o guardián de los peces; en general, de la pequeña fauna. Es por ello que cuando desde la profundidad avista un instrumento de pesca, emerge con rapidez inusitada y, de inmediato, se pronuncia enredando anzuelos, rompiendo o enmarañando atarrayas, chinchorros y copones; desarticulando trincheras y cortando el hilo de las tolas y boyas hasta lograr su objetivo, cual es liberar a los peces de las garras del pescador intruso, su enemigo número uno, al que ataca y ahoga sin misericordia cuando persiste en invadir sus dominios y arruinar las especies acuáticas, que vigila con esmero.
        Para impedir la acción del pescador, no pocas veces hace crecer los ríos y provoca inundaciones, sobre las que algunos lo han visto caminar, por arte de magia, con sus ojos escrutadores en actitud vigilante.
        El Indio de Agua, según la tradición oral, en algo se parece a un tipo de Mohán inofensivo que habita las orillas de los ríos y los alrededores de las quebradas. Este Mohán es de espíritu juguetón, travieso, andariego y tramador, a diferencia del Mohán libertino y antropófago
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