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
   <h1>DEPARTAMENTO CUNDINAMARCA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/casadavid.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Casa de Don David</h3>
            <p>Ubicada en el barrio Cabecera del Llano en la carrera 39 con calle 44, es conocida porque dicen que allí se realizó un pacto con el diablo para que se pudiera construir la casona en un peñasco que ofrecía riesgos.Otros más osados cuentan que el pacto se hizo .</p>
            <a href="{{route('david')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/3BRIJAS.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Historia de las Tres Brujas</h3>
            <p>Se cuenta que en la edad de las brujas, en las montañas de los Ibores, una madre noble tuvo tres hijas, Tina, Tina y Mada. La ira de una criada [contra la madre, por darle tanto trabajo con las tres hijas], que era bruja, hizo que las enseñara el arte de la brujería.</p>
            <a href="{{route('3brujas')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/damav.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Historia de la Dama Verde</h3>
            <p>Cuenta la leyenda que la Dama Verde, es un espanto que suele aparecerse en callejuelas y lugares ruinosos (ruinas) de los departamentos de Antioquia y Caldas en Colombia.La leyenda relata que la Dama Verde es un espectro que deambula por las calles solitarias.</p>
            <a href="{{route('Dama')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 3.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="{{route('david')}}">Leer más</a>

        </div>

    </div>

<



