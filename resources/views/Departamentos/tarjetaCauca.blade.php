<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/EThistoria.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{ asset('local_storage/img/logo.png') }}"   alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="titulo">
   <h1>DEPARTAMENTO CAUCA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cresta.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Cresta del Gallo</h3>
            <p>en la vereda Piedra Santa municipio del Tambo -Cauca. al oriente se observa  una montaña muy alta mide aproximadamente  800 metros  de altura ,tambien tiene gran variedad de fauna.</p>
            <a href="{{route('cresta')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/llorona.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Llrona del Cauca</h3>
            <p>Durante los primeros años del México Colonial existió una mujer indígena de gran belleza que se enamoró locamente de un español y con quien tuvo tres hijos . A pesar de ello este caballero .</p>
            <a href="{{route('llorona')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/patia.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Valle del Patia</h3>
            <p>
                En tiempos inmemorables, el Valle del Patía no tenía vegetación. Todo estaba cubierto por agua formando un tranquilo lago cuyas orillas lamían los pies de las cordilleras central y occidental. En el agua.</p>
            <a href="{{route('patia')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/sebastian.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Leyenda del Diablo de San Sebastian</h3>
            <p> En la década de los cuarentas, los padres eran considerados por la comunidad como unos santos y la gente era muy estricta en cuanto a lo espiritual.Del Huila al Valle de.</p>
            <a href="{{route('sebas')}}">Leer más</a>

        </div>

    </div>
</div>
   