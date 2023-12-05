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
    <h1>El Sombreron</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/sombreron.jpg') }}"  alt="">
    </figure>
    <p>Leyenda colombiana y de Centroamérica, sin embargo, aquí te contaremos lo que ha pasado en nuestro país con este legendario personaje. Cuenta la historia que hubo un personaje que vivió en diferentes pueblos hace mucho tiempo. Era un hombre viejo que vestía de negro y se ponía un gran sombrero del mismo color; montaba un audaz caballo también negro que se confundía con la noche, no hablaba con nadie y a nadie le hacía daño; aparecía y desaparecía como por encanto.
        Dicen que al anciano se le podía encontrar en las orillas del camino, y aunque hace mucho tiempo que murió, la gente sigue sintiendo su presencia. Físicamente se le describe como un hombre anciano, con un sombrero grande, bien vestido, de rostro opaco y en actitud de observación permanente.
        Las personas que lo han visto aseguran que lo acompañan dos enormes perros negros cogidos por gruesas cadenas. Los trasnochadores que lo han visto o a quienes se les ha presentado, dicen ver la figura que les sale al camino, los hace correr y les va gritando cosas para asustarlos.
        </p>
    
        <a href="{{route('Sombre2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

