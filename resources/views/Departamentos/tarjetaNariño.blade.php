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
   <h1>DEPARTAMENTO NARIÑO</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cueche.png') }}" >
        </figure>
        <div class="contenido">
            <h3>EL Cueche</h3>
            <p>El Arco iris fue el símbolo de paz entre Dios y el hombre según reza la Sagrada Biblia, pero en nuestra región y en otras del sur occidente patrio y norte del estado vecino; fue siempre parodia del demonio.</p>
            <a href="{{route('cueche')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cocha.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Laguna de la Cocha</h3>
            <p>El cacique Pucara, cuyo nombre significa Fortaleza, estaba enamorado de la princesa Lluvia de Estrellas, logró conquistarla y formar con ella un hogar donde nacieron tres hijos: Lucero.</p>
            <a href="{{route('laguna')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/padre.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Padre Sin Cabeza</h3>
            <p>
                En las ciudades que se fundaran mucho tiempo ha, en sus calles añejas que de una u otra manera fueran a dar con alguna de sus iglesias o con el cementerio, es muy común el que se hayan.</p>
            <a href="{{route('padre')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/viuda.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Viuda</h3>
            <p>Suele aparecerse a los hombres ebrios tomando la apariencia de una hermosa mujer. Acostumbra a llevarlos con sus embrujos hacia el cementerio para encerrarlos dentro de bóvedas.</p>
            <a href="{{route('viuda')}}">Leer más</a>

        </div>

    </div>

</div>

</div>




