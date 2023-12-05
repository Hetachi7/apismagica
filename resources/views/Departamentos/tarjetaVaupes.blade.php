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
   <h1>DEPARTAMENTO VAUPES</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/agueros.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Agueros</h3>
            <p>Los agüeros son interpretaciones hechas por los sabedores como los payes, sakáka, kúmu y otros rezanderos cuando están en momentos de concentración mental. Ellos presienten circunstancias del futuro, de algo.</p>
            <a href="{{route('ague')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/sol.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Leyenda del Sol</h3>
            <p>Leyenda del sol y su hijo Cerca a la comunidad indígena de YUTICA, que en dialecto se llama ÑAPIMA, del bajo Vaupés, ubicada en un caño pequeño llamado caño sol, hay una laguna conocida con el nombre de DIADOEDIJTARA.</p>
            <a href="{{route('sol')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/danta.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>La Danta y el Morroco</h3>
            <p>Había una vez una mujer indígena que vivía en una maloka lejana, con su nieto morroco pequeño, que siempre le acompañaba por donde ella fuera. La anciana tenía su chagra con cultivos de piña, ñame, yuca y batata. Cada mañana se.</p>
            <a href="{{route('danta')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/vaupes.png') }}" >
        </figure>
        <div class="contenido">
            <h3>La Leyende del Vaupes</h3>
            <p>
                Esta leyenda es conocida en todo el departamento y es muy especial para su pueblo, especialmente por los personajes míticos de la región: el Sol, Diádoe (padre del pez tarira) y Waí deyú (padre de los pescados)..</p>
            <a href="{{route('Vau')}}">Leer más</a>

        </div>

    </div>

</div>


