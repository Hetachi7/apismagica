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
    <h1>Historia de la Guitana</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/guitana.png') }}"  alt="">
    </figure>
    <p>as dignidades del honor, en particular el heroísmo, la valentía y la proeza, se han relatado para perpetuar y engrandecer en el tiempo las gestas de los vencedores. Del vencedor, que encarna al héroe, se dice que estaba tocado por la diosa Fortuna, lo que por negación convierte al vencido en villano.
        La gesta de la conquista española en América tuvo el ingrediente adicional de haberse desarrollado bajo el prejuicio y cosmovisión que animaba a los guerreros peninsulares del siglo XV y XVI, deseosos de tierras para establecer sus dominios en nombre del Rey, de salvar almas perdidas para la fe, pero sobre todo, de una insaciable sed de oro que obnubilaba el pensamiento hasta la locura.
        Afortunadamente existe una figura para orgullo del Huila que sobrevivió a la persecución histórica y al olvido, cuya gloria se equipara con el de los más altos guerreros indígenas que resistieron al conquistador  </p>
    </p>
        <a href="{{route('Guitana2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

