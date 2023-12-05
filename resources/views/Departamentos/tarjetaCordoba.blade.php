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
   <h1>DEPARTAMENTO CORDOBA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/aguerosCo.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Agueros del cordoba</h3>
            <p>Los niños en cruz, los animes, las piedras de ara, la aguja del muerto y los heliconios, son objetos de magia negra que ayudan y protegen a sus poseedores.
                El niño en cruz
                </p>
            <a href="{{route('agueroco')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/griton.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Griton</h3>
            <p>El Griton es una leyenda muy famosa en Colombia, aunque también es conocida en Ecuador y Brasil, con los cuales la historia comparte los mismos rasgos</p>
            <a href="{{route('griton')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/aguja.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La Aguja Del Muerto</h3>
            <p>Como se pregunta y rumora acerca de este aguero ya hecho un mito entre la comunidad. & No es más que una simple aguja que con mucho sigilo se hunde</p>
            <a href="{{route('aguja')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/animes.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Los Animes</h3>
            <p> Y como se preguntaba, vamos a acercarnos mas a ver acerca de este gran mito-leyenda Son animalitos de color oscuro que tienen la boca roja</p>
            <a href="{{route('anime')}}">Leer más</a>

        </div>

    </div>

</div>





