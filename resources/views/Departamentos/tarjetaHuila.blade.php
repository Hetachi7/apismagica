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
   <h1>DEPARTAMENTO HUILA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/guitana.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Historia de la Guitana</h3>
            <p>
                as dignidades del honor, en particular el heroísmo, la valentía y la proeza, se han relatado para perpetuar y engrandecer en el tiempo las gestas de los vencedores. Del vencedor, que encarna al héroe, se dice que estaba tocado por la diosa Fortuna.</p>
            <a href="{{route('Guitana')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/sombreron.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>Historia del Sombreron</h3>
            <p>Leyenda colombiana y de Centroamérica, sin embargo, aquí te contaremos lo que ha pasado en nuestro país con este legendario personaje. Cuenta la historia que hubo un personaje que vivió en diferentes pueblos hace mucho tiempo. Era un hombre viejo que vestía.</p>
            <a href="{{route('Sombre')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/taitapuro.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Historia del Taitapuro</h3>
            <p>Son personajes exclusivos y auténticos de la mitología huilense. Tiene sus orígenes en la raza pijao, donde se les consideraba el dios del fuego y de las cosechas. En las grandes festividades de San Juan, San Pedro y en el Festival del Bambuco se representa.</p>
            <a href="{{route('Taita')}}">Leer más</a>

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



