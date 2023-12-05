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
   <h1>DEPARTAMENTO META</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/candileja.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Candileja</h3>
            <p>
                Cuentan que la Candileja es una bola ardiente de tres antorchas, con brazos como tentáculos rojos candela, que produce ruido de jarrones rotos. Persigue a borrachos, infieles y a padres de familia irresponsables y temerosos.</p>
            <a href="{{route('candileja')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/Elsilbon.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Silbon </h3>
            <p>Si escuchas cerca los silbidos, el Silbón está lejos y no hay peligro; si los escuchas lejos, no tienes escapatoria, el Silbón está cerca y corres peligro.En los Llanos Orientales, hace muchos años, vivía un joven al que </p>
            <a href="{{route('Silbon')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/juanmachete.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Juan Machete</h3>
            <p>Considerable como una de las leyendas más conocidas del llano. Cuenta la vida del hombre que quería ser el más poderoso de la región, su nombre era Juan Francisco Ortiz, amo y señor de las tierras de la Macarena. </p>
            <a href="{{route('juan')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/Rezo.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Rezo Del Pescado </h3>
            <p>El rezo del pescado es un ritual generalizado en los grupos llaneros, el cual se desarrolla con ocasión del comienzo del destete de los bebés antes de su primer año y con ocasión de la primera menstruación femenina. </p>
            <a href="{{route('Rezo')}}">Leer más</a>

        </div>

    </div>



