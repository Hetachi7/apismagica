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
    <h1>El Griton</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/griton.png') }}"  alt="">
    </figure>
    
    <p>El Griton es una leyenda muy famosa en Colombia, aunque también es conocida en Ecuador y Brasil, con los cuales la historia comparte los mismos rasgos: Un ser desconocido que grita aterradoramente.!
        En Cordoba se le conoce solamente con el nombre de El Griton, pero en otros sitios se le llama el griton de medianoche…on muchas las ideas que la gente se hace acerca de este extraño ser paranormal; algunos aseguran que
        es el diablo que llega por las noches para atormentar las almas y poder llevárselas, otros en cambio no le temen pues aseguran que única intención del griton es asustar a las personas con sus horrendos gritos. Sea cual sea la verdad oculta, no quisiéramos escuchar jamás los chillidos del griton pues si existe no creemos que sea algo bueno.
        adie sabe lo que pasa, ni lo que busca, ni lo que quiere, solo se escuchan sus gritos.
        Algunos campesinos de Trujillo y el Valle de Sula aseguran que lo han escuchado, pero jamás lo han visto; y aunque conocen muchos animales de la montaña aseguran que jamás han escuchado alguno que chille parecido.
        Hay personas que piensan que el Griton podría ser el demonio, otros en cambio creen que esos gemidos pueden ser de los «espíritus errantes» de los hombres que han sido asesinados en los senderos y las quebradas de los alrededores que gritan de desesperación. En la leyenda de el Griton de Colombia se dice que algunas personas han visto en una montaña a un arriero enojado, y desde ese lugar grita sin descansar con un fuerte sonido agudo para asustar a la gente que camina por las noches.
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