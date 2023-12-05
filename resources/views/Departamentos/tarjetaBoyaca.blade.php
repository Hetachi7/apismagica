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
   <h1>DEPARTAMENTO BOYACA</h1>
</div>

<div class="container">
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/perro.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Perro de San Francisco</h3>
            <p>Un 'espectro' animal es parte de las leyendas colombianas: esta es la historia paranormal detrás del Perro San Francisco, que alertaba la llegada de la muerte y aterrorizaba a todos en Boyacá. Según las creencias, el perro era el protector del Convento de San Francisco.</p>
            <a href="{{route('perro')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/pajaro.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Pajaro Coaxin</h3>
            <p>Cuando se ve algún cometa ardiendo en el cielo dicen que es un pájaro quemanda Auxizuc llamado Caxin, palabra que quiere decir matador con macana.Y que el motivo por el que salió de la tierra para venirla cielo .</p>
            <a href="{{route('pajaro')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/caciqueR.png') }}" >
        </figure>
        <div class="contenido">
            <h3>El Cacique Rabon </h3>
            <p>Según la tradición legendaria de los Muiscas, en tiempos remotos gobernó el Cacicato de Tunja el Zaque Tomagatha, un cacique rabón, con cola de león, un solo ojo y cuatro orejas. Los dioses le habían proporcionado.</p>
            <a href="{{route('cacique')}}">Leer más</a>

        </div>

    </div>
    <div class="tarjetas">
        <figure>
            <img src="{{ asset('local_storage/img/cauca/Caquiona/imagen 3.jpg') }}" >
        </figure>
        <div class="contenido">
            <h3>GORANCHA HIJO DEL SOL Y PROFETA CHIBCHA</h3>
            <p>
                Hace muchos años, el Sol quiso reencarnar en una mujer chibcha, por lo cual, todas las mañanas las mujeres desnudas esperaban la concepción a través de los rayos del astro rey. Sin embargo, los indígenas </p>
            <a href="{{route('goroncha')}}">Leer más</a>

        </div>

    </div>

</div>


