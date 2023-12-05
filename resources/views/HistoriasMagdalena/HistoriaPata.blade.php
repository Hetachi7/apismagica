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
    <h1>La Pata Sola</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/pata.png') }}"  alt="">
    </figure>
    
    <p>
        La describen como un ser de una sola pierna, que terminada en pezuña de vacuno o de oso, en ocasiones con un solo seno sobre el pecho y un ojo. Se cree que la tal pezuña está dispuesta al revés, de manera que quienes le siguen el rastro, toman la dirección contraria.
        La leyenda cuenta que una bella mujer estaba casada con un campesino muy trabajador que se la pasaba vendiendo las cosechas de su patrón. Aprovechando las ausencias del campesino, el patrón le coqueteaba a la bella mujer con la que terminaron en amoríos.
        Un buen día le contaron todo al marido y este tomó por sorpresa a los amantes abrazados en la cama. Lleno de ira, el campesino desenvainó su machete, se arrojó sobre ellos y le cortó la cabeza al patrón. La mujer quiso salir huyendo</p>
    
    
        <a href="{{route('pata2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>