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
    <h1>LA PRINCESA FLOR EN EL CERRO PAJARITO

    </h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/Flor.png') }}"  alt="">
    </figure>
        <p>El joven trató de seguirla, pero este cerro es imposible de escalar. Dicen que es muy resbaloso como el jabón. Sólo Inírida fue capaz de llegar a la cima. Al despertar, la joven se encontró sola y decidió vivir lejos de los humanos. Convirtiendo el cerro en su castillo. Por eso, es considerada una princesa. Desde entonces, gobierna desde allí a los seres que rodean el cerro: aves, plantas, animales de tierra y agua.
            Cuentan que de vez en cuando la princesa siente nostalgia por los humanos. Por ese motivo es necesario que cada vez que las personas visiten el cerro, la saluden con canciones hermosas para que le alegren su día. Inírida en agradecimiento, deja que por las paredes del cerro caigan hilos de agua que parecen bordados de plata en las rocas y se aparece convertida en una hermosa flor: la flor de Inírida.
            Cuentan que hay que guardar ese regalo. La flor dura viva todo el año y sus colores cambian al ritmo de las emociones de la princesa: es más brillante si ella está alegre. Se apaga cuando la princesa entristece. Se muere cuando la princesa se pone furiosa. Para que conceda algún deseo, se debe mantener brillante.
            </p>
        <a href="{{route('flor')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


