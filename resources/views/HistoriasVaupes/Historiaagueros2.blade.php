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
    <h1>Agueros</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/agueros.png') }}"  alt="">
    </figure>
        <p>Cuando se sueña que se recibe una flecha en los miembros inferiores o en las manos, se debe tener mucho cuidado cuando al salir al campo, pues significa que va a tener una mordedura de serpiente muy venenosa.
            Cuándo se sueña comprando un reloj, un anillo o un arma , significa que muy pronto se va a casar o va a conseguir una mujer, compañera de su vida. Lo mismo cuando sueña con camas, canoas y hamacas. Es recomendable que esté dispuesto a recibir cualquier sorpresa.
            Es buena suerte cuando sueña que alguien le hiere la cara con un cuchillo: si hay mucha sangre en el cuerpo, significa que va a recibir dinero, de pronto por su renta o algo de recaudo de su negocio. Es recomendable realizar negocios.
            Es mala suerte soñar con la imagen de la Virgen María y Jesucristo. Prepárese para soportar la pobreza y un buen período de desempleo.
            </p>
        <a href="{{route('ague')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


