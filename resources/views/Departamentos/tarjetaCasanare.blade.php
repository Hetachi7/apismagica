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
   <h1>DEPARTAMENTO CASANARE</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/Boladefuego.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Bola De Fuego</h3>
            <p>
                En los Llanos Orientales de Colombia, desde hace muchas décadas, surgió una leyenda que muchos han calificado como cierta, pues diversas personas la han presenciado. Se trata de la “bola de fuego” que aparece en las noches, llevándose a quien atrape. </p>
            <a href="{{route('Bola')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/felipe.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Chanza de Felipe</h3>
            <p>En un municipio que hace parte del actual departamento de Casanare y que limita en su totalidad con Arauca, según me decía Saúl, el Niño mentiroso, vivió un personaje descendiente de una de las familias más respetables que han existido en este territorio</p>
            <a href="{{route('Felipe')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/rompellano.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Rompellanos</h3>
            <p>Muy arraigada en Arauca (capital), es la devoción a Eduardo Fernández, más conocido como “Rompellanos”. Natural de Casanare, posiblemente de la población de Hato Corozal, hombre alto, delgado, cabello castaño y lacio, ojos claros y brillantes.  </p>
            <a href="{{route('Rompe')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/Supersticiones.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Las Supersticiones</h3>
            <p>Se cree que la ubre de las vacas se daña cuando se deja derramar la leche en las topias calientes.Quienes tienen negocios, especialmente tiendas y almacenes, además de protegerlos con una mata de sábila que se cuelga detrás de la puerta principal.
                </p>
            <a href="{{route('Super')}}">Leer más</a>

        </div>

    </div>

</div>


