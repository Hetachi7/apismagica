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
   <h1>DEPARTAMENTO CAQUETA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/doncella.png') }}" >
        </figure>
        <div class="contenido">
            <h3> El Encanto de la Doncella</h3>
            <p>Como “El Encanto” fue bautizado el puente construido sobre el río Hacha, para permitir el paso de los habitantes de la capital del Caquetá hacia el resto de la población ubicada al sur del departamento. Este paraje de encanto sin igual ofrecía un aire de tranquilidad y frescura. </p>
            <a href="{{route('Doncella')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/mula.png') }}" >
        </figure>
        <div class="contenido">
            <h3> La Mula del Diablo</h3>
            <p>Suele ser considerada como una hermosa y atractiva mujer de edad primaveral, seductora y  comprometedora en sus actos al punto que llego a seducir a un sacerdote. La mujer que enamora a un sacerdote recibe el apodo de “Mula del Diablo”. Este remoquete aún perdura en la mente.</p>
            <a href="{{route('Mula')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/pollo.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Pollo Malo</h3>
            <p>Cuenta la leyenda que el pollo malo o pollo maligno es un espanto que suele aparecerse en los campos y caminos del Huila, y que su aparición es un presagio de muerte y mala suerte.Según la leyenda durante las noches en las que los hombres se suelen reunir con sus amigos. </p>
            <a href="{{route('Pollo')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/tunjo.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Tunjo de Oro</h3>
            <p>Cuenta la leyenda, que el Tunjo es representado como un muñeco de oro. Algunos dicen que son pequeños ídolos simbólicos o divinos de los "Pijaos"; otros dicen que fueron dioses o solo ofrendas para sus dioses o sus caciques El Tunjo aparece por las noches en forma de un Bebé. </p>
            <a href="{{route('Tunjo')}}">Leer más</a>

        </div>

    </div>

</div>




