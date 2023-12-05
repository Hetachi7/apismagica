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
    <h1>La Cresta del Gallo</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cresta.png') }}"  alt="">
    </figure>
    <p>en la vereda Piedra Santa municipio del Tambo -Cauca. al oriente se observa  una montaña muy alta mide aproximadamente  800 metros  de altura ,tambien tiene gran variedad de fauna.
        Cuentan los tatarabuelos que en tiempos de semana santa viernes santo cresta gallo se prendía en fuego , también fue tierra de los indios , se puede decir que en el lugar hay guacas que los indios enterraron en sus tiempos , nunca nadie a descubierto una guaca en aquel 
        ¿por que se llama cresta de gallo:
        se llama así porque tiene forma de la cresta de un gallo al  igual tiene  la cara de un mico con colmillos también tiene cuevas muy profundas y en una de ellas se escucha al fondo un yacimiento de agua , también al comenzar en una parte del camino al pisar fuertemente se escucha que esta zumbo (coco).
        en otra cueva habitan 2 clases de murciélagos:murciélagos vampiros.murciélagos fruteroscuenta una persona que era un día domingo estaba tronando y en la cima cayo en rayo y partió una piedra , en los 2 lados tiene unos grandes riscos es hogar de águilas.
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


