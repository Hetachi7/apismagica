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
   <h1>DEPARTAMENTO VALLE DEL CAUCA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/burizaco.png') }}" >
        </figure>
        <div class="contenido">
            <h3>BURIZACO EL DEMONIO DEL CERRO</h3>
            <p>A principios del siglo XIX, Cali estuvo azotada por epidemias, desbordamientos y males. Estos se le atribuyeron al Buziraco, un demonio que llegó de Cartagena para asentarse en la Sultana.</p>
            <a href="{{route('burizaco')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/mano.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Mano Peluda</h3>
            <p>leyenda de la mano peluda es una de las más antiguas de Latinoamérica. Son muchas las generaciones que han crecido siendo intimidadas por sus padres o abuelos quienes para castigarlos hacían referencia.</p>
            <a href="{{route('mano')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/tunda.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Tunda</h3>
            <p>Este es un mito propio de los departamentos que poseen costa en el océano Pacífico. Cuentan los que saben que este personaje mítico es una mujer fea, que tiene un pie de molinillo o de tingui-tingui. raíz de un árbol</p>
            <a href="{{route('tunda')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 3.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La virgen de Caquiona</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla asperiores nam repellendus dolor itaque, delectus fuga debitis corporis facilis veritatis.</p>
            <a href="{{route('leyenda')}}">Leer más</a>

        </div>

    </div>

</div>
