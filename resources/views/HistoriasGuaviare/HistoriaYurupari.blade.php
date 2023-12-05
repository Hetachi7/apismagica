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
    <h1>La Leyenda del Yuripara</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/yuripari.png') }}"  alt="">
    </figure>
    <p>“De cómo los hombres se apropiaron de las flautas sagradas”.
        En un principio había en la tierra dos personas: una hacía cosas buenas y se llamaba Tupana; hacía
        el bien. El otro personaje era Yuruparí, amigo del juego, las borracheras y los bailes. La palabra
        Yuruparí significa Diablo en Guaraní…Yuruparí era amigo de mucha gente; lo contrario a Tupana, que tenía pocos seguidores. Un día
        Tupana resolvió matar a Yuruparí para no tener más dificultades y enemistades con él. Hizo una
        hoguera grande y allí quemó a Yuruparí; una vez hecho cenizas, vinieron sus amigos y con gran
        tristeza quedaron silenciosos.
        Pasaron muchos días. De las cenizas retoñó una palma llamada pachua, que se convirtió en una mujer muy bonita. Vinieron mujeres al lugar y al mirar la palma tan hermosa llamaron a los hombres para convenir con ellos en tumbarla y construir un instrumento que imitara la voz de Yuruparí. Éste era el recuerdo viviente de Yuruparí. Tres pedazos de palma fueron suficientes para hacer el instrumento que imitó perfectamente su voz.
        Desde entonces las mujeres fueron las poseedoras del gran Yuruparí. Lo tocaban en las mañanas cuando iban al baño.
        Las mujeres tenían la tarea de traer pepas del monte para que los hombres hicieran los oficios domésticos. Con el correr del tiempo, los hombres se aburrieron de ser ellos los llamados a hacer los quehaceres del hogar.
        </p>
    
        <a href="{{route('yuripa2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


