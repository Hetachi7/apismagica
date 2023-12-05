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
    <h1>La vaca bramadora</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/vaca.png') }}"  alt="">
    </figure>
    
    <p>Cuenta el relato, de un allegado al pueblo acerca de aquella anécdota verificada 
        “Cuando yo era niño, aquí en Tolú todas las noches se oía el bramido tenebroso de una vaca. Todo el que la escuchaba se llenaba de pánico. Tres o cuatro cuadras más allá se volvía a oír su mugido, y asi mantenía al pueblo en permanente susto. Se decía que era una bruja maldita”.
        “Eso sucedía noche tras noche, hasta cuando llego aquí un vendedor de helechos  que dijo saber cómo cogerla. Y efectivamente, una noche le dio una paliza y al día siguiente amaneció la bruja muy grave. Resultó ser una señora del pueblo, de quien todos sospechábamos que tenia pactos con el diablo”.
        “Pero para mi, ahora de viejo, me tengo que no era ninguna bruja, sino la vaca que todas las noches amarraban en el poste del matadero y que nosotros nos comíamos al día siguiente. Era nuestra propia conciencia que nos bramaba de remordimiento”.
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