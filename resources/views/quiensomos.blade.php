<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/Equiensomos.css')}}">
</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{ asset('local_storage/img/logo.png') }}" alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="fonhis1">
    <img src="{{ asset('local_storage/img/fonhis1.png') }}"  alt="">
</div>
<div class="fonhis2">
    <img src="{{ asset('local_storage/img/fonhis2.png') }}"  alt="">
</div>

<div class="texto">

    <div class="pregunta"><img src="{{ asset('local_storage/img/quiensomos.png') }}"  id="historia"></div>

<p><h2>Somos un aplicativo creado con el fin de dar a conocer todas esas historias que cubren nuestro hermoso
    pais colombiano
</h2></p>
<p><h1>Nuestro Logo</h1></p>

<div class="logotext">
    
<img src="{{ asset('local_storage/img/logo.png') }}" alt="">
</div>

<h2>Creado por Alejandro Cruz, nuestro logo está representado por una leyenda colombiana llamada "El sombrerero". 
    Y en las letras representa los colores de nuestra bandera.
</h2>





</div>