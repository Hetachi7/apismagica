<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css_index/Eleyenda.css')}}">

</head>
<body>

<header>
<a href="{{route('inicio')}}" class="logo">
    <img src="{{asset('local_storage/img/logo.png')}}"  alt="">
    <h2>La Mágica Colombia</h2>
</a>


<nav>
    <a href="{{route('subirhistoria')}}" class="link">¿Quieres subir tú historia?</a>
    <a href="{{route('info')}}" class="link">¿Quienes Somos?</a>
    <a href="{{route('contac')}}" class="link">Contacto</a>
    <a href="{{route('registro')}}" class="link">Registráte</a>
</nav>
</header>

<div class="audioo">
    <h2>Música de ambiente</h2>
    <div class="ojoo">
        <img src="{{ asset('local_storage/img/ojo.gif') }}" >
    </div>
<audio  controls autoplay >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

<div class="leyenda">
    <div id="fondoo">

    </div>
    <h1>Historia de la Dama Verde</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/damav.jpg') }}"  alt="">
    </figure>
        <p>La Dama Verde viste un sayal de bayetón verde (vestido largo), con guantes negros que cubren la mayor parte de sus brazos, sus ojos son rojos como los rubíes, carga un rosario de ébano (algunos suelen decir que este rosario suele brillar o emitir luz fluorescente), por calzado lleva chapines y usa un velo negro que cubre la mayor parte de su rostro.
            Su estatura suele rondar los 1,90 mts y muchos dicen que tiene aspecto de mujer bella y elegante; en algunos poblados suelen describirla con un “lio de ropa”
            o varias cosas atadas bajo su brazo.
            Origen de la Leyenda de “la Dama Verde”
            No se tiene una certeza real sobre el origen de la leyenda; algunos han comentado que la leyenda se originó a partir de una mujer de la alta sociedad de los siglos pasados que cometió infanticidio (asesino a su hijo) y oculto su cadáver, por ello fue condenada a vagar por el mundo como un alma en pena.
            Pero la realidad es que no se tiene certeza sobre si este es realmente su origen, al igual que muchas leyendas probablemente esta fuese creada con la intensión de aleccionar a la sociedad de la época, en la búsqueda de infundir temor por cometer actos inmorales o por prácticas mal vistas como andar borrachos a altas horas de la noche.
            Versiones de la leyenda
            Aunque en muchas ocasiones a la Dama Verde se le ha confundido con la viudita, son dos espantos distintos.
             </p>
        <a href="{{route('Felipe')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


