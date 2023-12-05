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
   <h1>DEPARTAMENTO AMAZONAS</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/bufeo.png') }}" >
        </figure>
        <div class="contenido">
            <h3>EL Bufeo Colorado</h3>
            <p>Este famoso pez del Amazonas es también conocido como tonina o delfín. Se cree que se convierte en hombre para seducir a las mujeres. Las muelas y algunas partes del cuerpo de la hembra se usan como talismanes en la pesca, la cacería.</p>
            <a href="{{route('bufeo')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/chuya.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Chuyanchique</h3>
            <p>es considerado el duende o guardián del bosque; infunde respeto y temor a propios y extraños. Está asociado o relacionado, a menudo, con el diablo, en algunas variantes, y en parte, con seres demoníacos.</p>
            <a href="{{route('chuya')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/creacion.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Mito de la Creacion</h3>
            <p>La explicación del origen del pueblo de los Ticunas, llamados “Pieles negras” por sus vecinos debido a que así pintaban sus cuerpos en las ceremonias dedicadas a sus dioses o sus protectores de clan, narra que Yuche.</p>
            <a href="{{route('creacion')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cupurita.png') }}" >
        </figure>
        <div class="contenido">
            <h3>Cupurita</h3>
            <p>Hablamos de uno de los personajes más conocidos en el país: Curupira.Curupira es conocido como el guardián de los bosques, habita en las matas ColomboBrazileñas y se encarga de proteger la naturaleza, ya sean.</p>
            <a href="{{route('cupurita')}}">Leer más</a>

        </div>

    </div>

</div>
