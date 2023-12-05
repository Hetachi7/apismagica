<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/Esubirhistoria.css')}}">
</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{ asset('local_storage/img/logo.png') }}" alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
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

    <div class="pregunta"><img src="{{ asset('local_storage/img/historia.png') }}"  id="historia"></div>

<p><h2>Para subir tu historia primero debes redactarla lo mejor posible, que tenga lógica y lo mas importante que sea verdad.
    Luego debes presionarle al boton de "+".
</h2></p>

<h2>Despues debes llenar la información que te pide como Ciudad, Departamento y que genero de historia és, luego confirmas y esperas
    a que uno de nuestros administradores la revise y sea subida correctacmente.
</h2>

<a href="{{route('form')}}"><div class="subir">
    <img src="{{ asset('local_storage/img/botonmas.png') }}"  alt="">
</div></a>



</div>

