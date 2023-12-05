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
    <h1>La Casa de Don David</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/casadavid.png') }}"  alt="">
    </figure>
    <p>Ubicada en el barrio Cabecera del Llano en la carrera 39 con calle 44, es conocida porque dicen que allí se realizó un pacto con el diablo para que se pudiera construir la casona en un peñasco que ofrecía riesgos.
        Otros más osados cuentan que el pacto se hizo para que los dueños de la vivienda obtuvieran riqueza y poder.
        El sociólogo e historiador Emilio Arenas, quien se ha dedicado a estudiar lo que hay detrás de estos mitos, habla en su libro La Casa del Diablo de esta historia atribuida a trabajadores de la casa, quienes contaban que David Puyana, propietario de los terrenos, “hizo un pacto con el diablo para tener riqueza y buena suerte, a cambio de entregarle su alma al demonio cuando hubieran transcurrido 10 años.
        El tiempo pasó y al cumplirse la fecha, el diablo regresó a cobrar su parte, pero la familia disfrazó a un chivo como humano, haciéndole creer que ese era don David, porque el diablo es un ser ignorante (de acuerdo con las creencias populares).
        Finalmente, cuando el diablo se dio cuenta del engaño, regresó por el alma de don David pero fue demasiado tarde porque ya él había fallecido y se dice, desde ese entonces, que el alma le quedó perteneciendo a Dios y no al diablo”, explica Arenas.
        </p>
    
        <a href="{{route('Felipe2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

