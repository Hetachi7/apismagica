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
    <h1>El Padre Sin Cabeza</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/padre.png') }}"  alt="">
    </figure>
    <p>En las ciudades que se fundaran mucho tiempo ha, en sus calles añejas que de una u otra manera fueran a dar con alguna de sus iglesias o con el cementerio, es muy común el que se hayan conocido espantos de diversas categorías, animas y resucitados.
        En pasto, en las cercanías de la iglesia de san Felipe o en los alrededores de san Agustín, o en Ipiales o en sapuyes; en estas zonas con fama de mal aire y desolación en donde para quienes tengan que pasar por ahí a altas horas de la noche significa que tengan que pensarlo 2 veces
        Y no solo pensarlo 2 veces, sino persignarse, encomendar su alma al santo de su devoción y apurar el paso; en estos sitios existe un ente, o como quiera llamarse, trascendente dentro de las consejas legendarias, este es el llamado padre descabezado.
        El padre descabezado se aparece muy de vez en cuando, muy de viernes en viernes. Es un cura alto, robusto, mejor dicho que la sotana la lleva bien rellena, su larga y negra sotana es su distintivo, y sería un cura común y corriente si llevara cabeza, pues a este fraile nadie sabe porque le falta la cabeza. Le han visto todo el cuerpo y en lugar de cuello un hueco, un impresionante hueco.
        Se cree que es un anima en pena, que anda pagando una larga cuenta de misas que en su vida le contrataron y el no cumplió, que cansado de transitar por los pasillo del que fuera su convento sale hasta las iglesias en las que celebrara misa alguna y que en este trayecto es cuando se deja ver con una vela que nunca apagara a pesar del viento nocturno, y pobrecito del que a esas horas también transite por esos lados, patarribiado y sin habla se queda cuando lo ve, esto de la mudez le dura por días y hasta por semanas enteras.
        El padre descabezado ha ido dejando de hacer su aparición en estos últimos tiempos, según se comenta, ya la pena que debía pagar está llegando a su término, por eso es que casi ya no se ha escuchado de personas que lo hayan visto, pero antes no era cosa rara.
        </p>
    
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


