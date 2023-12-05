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
    <h1>EL Mohan</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/mohan.png') }}"  alt="">
    </figure>
    
    <p>El Mohán había sembrado el pánico en el pueblo de Icho; pues al final de recorrido atacaba indiscriminadamente a niños, jóvenes y adultos. Fue, entonces cuando el señor Marcial Gamboa, veterano de la Guerra de los Mil Días, viejo conocedor de la región y sus misterios, preparo su rifle con dos balas en cruz y se dedicó al acecho de la bestia. Al avistarla bastó con dispararle una sola carga para que, herida mortalmente, dando balazos y lanzando mugidos estruendosos, se estrellara aparatosamente contra los árboles y la maleza de la selva, como si se tratara de una operación exterminio de la naturaleza. Ya agónico, un indio le atravesó el corazón con una lanza de palma, ante el peligro de que, como el ave fénix, la fiera se levantara de entre las ruinas.
        Quienes tuvieron la ocasión de ver aquel Mohán depredador aseguran que medía unos tres metros de largo por dos de alto y pesaba más de ochocientos (800) kilos; tenia garras descomunales, en forma de arpón, y confirmaron la visión de su apariencia humana.
        </p>
    
    
        <a href="{{route('mohan')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>