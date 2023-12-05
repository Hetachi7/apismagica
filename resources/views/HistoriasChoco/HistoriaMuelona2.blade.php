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
    <h1>La Muelona</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/muelona.jpg') }}"  alt="">
    </figure>
    
    <p>La contra de la Muelona es un escapulario de la Virgen del Carmen o una medalla de San Isidro el Labrador. La idea es que aquella, al hipnotizar a sus victimas con sus ojos electrizantes, los interna por intrincados caminos de la selva que sólo conocen los labradores por razones de su habitual oficio; y son ellos, precisamente, quienes al oír el macabro triturar de sus molares, acuden en ayuda de los necesitados.
        La Muelona, se dice, no ataca a los miembros de una familia respetable y bien constituida, donde hay niños pequeños, recién nacidos o mujeres embarazadas. A esta mujer con colmillos de felino, algunos campesinos también la llaman “Comilona” por que cuando tiene hambre tritura con igual voracidad un tigre, una vaca, un burro o un caballo.
        </p>
    
    
        <a href="{{route('muelon')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>