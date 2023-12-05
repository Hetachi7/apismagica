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
        <img id="caquiona" src="{{ asset('local_storage/img/3BRIJAS.png') }}"  alt="">
    </figure>
    <p>Se cuenta que en la edad de las brujas, en las montañas de los Ibores, una madre noble tuvo tres hijas, Tina, Tina y Mada. La ira de una criada [contra la madre, por darle tanto trabajo con las tres hijas], que era bruja, hizo que las enseñara el arte de la brujería. Estas tres muchachas, al verse con poder, no tenían ninguna compasión [a la hora de] hacer mal, y todo aquello que les molestaba lo hacían desaparecer o lo maldecían. Al llegar a oídos de sus padres, las quisieron matar. Al ver éstas que sus padres no las querían, el odio se apoderó de ellas y se vengaron de sus padres matándoles e intentaron vengarse de la criada, pero ésta última las hechizó de tal manera que lo que sentía una lo sentían las tres. Las brujas, enfurecidas por el hechizo, culparon a la criada del crimen de sus padres.
        Se dice que esta bruja veía el futuro
        Cuando la quemaron en la hoguera, se reía frívolamente. Las hermanas notaron el hechizo al tiempo: si una se caía, a las tres les dolía; si una quería comer</p>
    
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