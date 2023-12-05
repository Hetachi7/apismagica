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
    <h1>El Pajaro Caxin</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/pajaro.png') }}"  alt="">
    </figure>
    <p>Cuando se ve algún cometa ardiendo en el cielo dicen que es un pájaro quemanda Auxizuc llamado Caxin, palabra que quiere decir matador con macana.Y que el motivo por el que salió de la tierra para venirla cielo es porque ellaestá enojada y viere a hacerle la guerra a los hombres “tomando porinstrumento medianero del castigo aquella ave que viene a destruir y secarlas sementera, y que aquel Caxin o caxir trae ordenes de matar con lamacana muchos Panches.Los rayos que salen de la cola o cabeza dice que son plumas y pelos delPájaro, que “yendo volando las va despidiendo para fin de las cosas queviene a acabar”. Y para calmar su furia ayunan durante quince días, altérmino de los cuales en sus labranzas arman unas redes de hilo paraenredar y cazar en ella el cometa y hacer con él lo que ellos querían hacer.</p>
    
        
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


