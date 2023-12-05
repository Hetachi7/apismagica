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
   <h1>DEPARTAMENTO MAGDALENA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/caiman.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Hombre Caiman</h3>
            <p>Hace mucho tiempo existió un pescador muy mujeriego que tenía por afición espiar a las mujeres plateñas desnudas que se bañaban </p>
            <a href="{{route('caiman')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/pata.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Pata Sola</h3>
            <p>La describen como un ser de una sola pierna, que terminada en pezuña de vacuno o de oso, en ocasiones con un solo seno sobre el pecho y un ojo.</p>
            <a href="{{route('pata')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/vaca.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La vaca Bramadora</h3>
            <p>“Cuando yo era niño, aquí en Tolú todas las noches se oía el bramido tenebroso de una vaca. Todo el que la escuchaba se llenaba de pánico</p>
            <a href="{{route('brama')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/casadiablo.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La casa del diablo</h3>
            <p>Casa del diablo propiedad de Manuel Varela, productor de banano, que durante el auge de este cultivo tuvo la visión de construir </p>
            <a href="{{route('casad')}}">Leer más</a>

        </div>

    </div>

</div>





