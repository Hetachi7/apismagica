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
    <h1>Pollo Malo</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/pollo.png') }}"  alt="">
    </figure>
    <p>Cuenta la leyenda que el pollo malo o pollo maligno es un espanto que suele aparecerse en los campos y caminos del Huila, y que su aparición es un presagio de muerte y mala suerte.
        Según la leyenda durante las noches en las que los hombres se suelen reunir con sus amigos a jugar cartas, contar chistes, tomar alcohol o mujerear se suele aparecer un espanto conocido como el pollo malo o pollo del diablo.
        Este espanto en la mayoría de los casos se ha descrito como un ser invisible del cual solo se oye su piar, el cual siempre que se escucha es un anuncio de muerte, se dice que si su canto es agudo significa la muerte de un niño(a) pero si su canto es grueso es el anunció de la muerte de un adulto, este espectro odia cuando alguien arremeda o imita su canto, es por ello que si escucha a alguien imitarlo cuando aparece suele dejar caer su desgracia sobre esta persona.
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