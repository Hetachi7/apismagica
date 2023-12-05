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
    <h1>La Mano Peluda</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/mano.png') }}"  alt="">
    </figure>
    <p>
        La leyenda de la mano peluda es una de las más antiguas de Latinoamérica. Son muchas las generaciones que han crecido siendo intimidadas por sus padres o abuelos quienes para castigarlos hacían referencia a esta horripilante mano que se rumora es del doble del tamaño de la de cualquier humano y aparece en zonas oscuras.
        Durante las noches era vista en los grandes ventanales de los conventos. También, según otros relatos, la mano venía a agarrar los pies de aquellos niños que se levantaban tarde de la noche de la cama, para llevárselos al más allá. Según dicta este mito, si los niños lograban escapar de la mano peluda, su pie quedaba repleto de heridas, que debían ser curadas lo más rápido posible para evitar que se desangren y mueran. Por eso muchos crecieron con temor a despertarse para ir al baño en plena madrugada y hoy aún en su etapa adulta sienten cierta zozobra.
        Se rumora que en Colombia el lugar donde más personas han reportado la aparición de la mano peluda es en las inmediaciones del Valle del Cauca. Quienes han tenido la amarga experiencia de toparse con ella la describen como gigante, excesivamente velluda, con uñas muy largas y afiladas. Lo raro es que tan solo una mano, no posee cuerpo.
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


