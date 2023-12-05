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
   <h1>DEPARTAMENTO GUAVIARE</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/virgen.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>COMPADRE BOTOTO</h3>
            <p>cuando un niño ha sido alzado por una persona que ha estado en un cementerio o ha ido a un velorio se dice que el niño queda yelado, entonces se lo ofrecen al compadre para que le quite el yelo, llevando al niño a abrazar el tronco .</p>
            <a href="{{route('compa')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 1.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>IDN KAMNI CREA AL MUNDO CON SALIVA</h3>
            <p>Los nukaks viven en la selva tropical, entre los ríos Guaviare e Inárida, en el Departamento de Guaviare en Colombia. Actualmente, existen alrededor de 500 nukaks que enfrentan.</p>
            <a href="{{route('crea')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/yuripari.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Leyenda del Yurapari</h3>
            <p>“De cómo los hombres se apropiaron de las flautas sagradas”.En un principio había en la tierra dos personas: una hacía cosas buenas y se llamaba Tupana; hacía el bien. El otro personaje era Yuruparí, amigo.</p>
            <a href="{{route('yuripa')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/motorista.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Motorista Sin Cabeza</h3>
            <p>Se cuenta que en el año 1973, entre los primeros colonos que recorría las estribaciones del río Guaviare con un motor fuera de borda, se encontraba un hombre de gran experiencia en leer el río y manejar le relinga.</p>
            <a href="{{route('moto')}}">Leer más</a>

        </div>

    </div>

</div>




