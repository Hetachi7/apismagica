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
    <h1>Supersticiones</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/Supersticiones.png') }}"  alt="">
    </figure>
    
    <p>
        Se cree que la ubre de las vacas se daña cuando se deja derramar la leche en las topias calientes.
        Quienes tienen negocios, especialmente tiendas y almacenes, además de protegerlos con una mata de sábila que se cuelga detrás de la puerta principal, evitan hacer la primera venta del día a una mujer.
        El llanero monta por el lado izquierdo porque dice que por el lado derecho monta el diablo. 
        Cuando una mariposa o un abejón entran a una casa se dice que va a llegar visita. Si la mariposa es negra pueden llegar malas noticias. 
        Se dice que el café no se debe tomar frío, pues en esta forma es fácil dar bebedizos. 
        Se dice que para causarle daño a un negocio se le riega sal. De esta forma bajarán las ventas y le caerá guiña al establecimiento. 
        El llanero cree que si por algún motivo un niño recién nacido o de pocos meses tiene contacto con personas que hayan estado en un velorio se enfermarán por el "hielo del muerto" y le da “sutera”, que es el aniquilamiento persistente de niño que debe ser mondongueado. 
        Si un alcaraván pasa cantando sobre una casa llegará una niña; si pasan dos llegará un niño. Si pasan tres, o sea, número impar, será una niña. 
        Se cree que si uno unta limón en la mordedura de un perro, habiendo dejado la mitad del limón en el árbol cuando está se seque y caiga, se le caerán los dientes al perro. 
        </p>
    
        <a href="{{route('Super2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>
