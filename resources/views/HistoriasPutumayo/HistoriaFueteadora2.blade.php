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
    <h1>Mito Fueteadora</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/futeadora.png') }}"  alt="">
    </figure>
        <p>yo alcanzar a doblarla pero ser como cacho y no sentir nada y soltarse rápidamente, entonces yo ya no dando miedo si no dando miedo agarrar cola con mano izquierda y apretarla duro, luego morderla hasta trozar pedazo de cola; animal empezar a aflojar soltándome brazo y levantando cabeza, entonces yo con mano izquierda agarrar cabeza y con cuchillo rajarla, animal morir, yo desenredar y botarla; iba a venirme cuando alcanzar a ver la otra, ella tratar de agarrarme pero yo con ramas de yoco matarla y traerla para quemarla para que las otras huyan con olor de culebra muerta
            Ahora yo hacerme remedios para borrar señales de culebra y no quedar con defecto”.
            Al cabo de 15 días el aborigen no presentaba en su cuerpo rastros de la paliza recibida por parte de la serpiente, pero la secuela continuaba, nadie podía caminar junto a él ya que su andar se volvió bastante rápido, casi corría como huyendo de la sombra de algún fantasma y todo a causa de la fueteadora.
            La fueteadora es una serpiente propia de las selvas de Putumayo, que no muerde pero a cambio de ella menea a las personas y con su cola les da una tremenda paliza hasta hacerla verter sangre; posteriormente se desenreda y se pierde entre la maleza.
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


