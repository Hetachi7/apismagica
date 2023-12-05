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
    <h1>Agueros</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/agueros.png') }}"  alt="">
    </figure>
    <p> Los agüeros son interpretaciones hechas por los sabedores como los payes, sakáka, kúmu y otros rezanderos cuando están en momentos de concentración mental. Ellos presienten circunstancias del futuro, de algo que puede ocurrir, ya sea de inmediato o en el transcurso de tiempo. Las interpretaciones también surgen cuando alguien tiene pesadillas. A continuación se describen algunos agüeros indígenas.
        Si uno sueña que se baña en un río y escucha la explosión de un arma de fuego, significa que el día siguiente lloverá con muchos truenos y relámpagos en el cielo. Es un día no recomendable para trabajos de caza y pesca.
        Si uno sueña que se baña bajo la lluvia o se hunde dentro de agua y oye golpes en la superficie significa que alguien o uno mismo, corre el riesgo de perder la vida y el agua que cae significa la cantidad de tierra que echan al enterrar al difunto. Procure que un kúmu le santigüe.
        </p>
    
        <a href="{{route('ague2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

