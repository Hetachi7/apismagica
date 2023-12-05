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
    <h1>El Cacique Rabon</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/caciqueR.png') }}"  alt="">
    </figure>
    <p>Un 'espectro' animal es parte de las leyendas colombianas: esta es la historia paranormal detrás del Perro San Francisco, que alertaba la llegada de la muerte y aterrorizaba a todos en Boyacá. Según las creencias, el perro era el protector del Convento de San Francisco, pero después de que pereció. Su existencia quedó "siempre presente", en una estatua forjada en piedra. Los que vivían cerca del convento, se dieron cuenta después de la medianoche, se escuchaban las cadenas, que tenía el perro. Ahora bien, eso no quedó ahi, comenzó a hacerse más permanente, veían el perro como encendiendo sus ojos en "bolas de fuego", pero luego comenzó a entrar a las casas, que quedaban abiertas en las noches.
        Antes de ir a dormir, las personas revisaban el portón para estar "alertas" si el perro les anunciaba sobre alguna tragedia próxima, en sus familias o personas cercanas.
        Otro lugar, donde solía aparecer el perro, era en las casas que hacían velorios de un ser querido y se "veía custodiando" desde afuera, como un "espíritu guardián". Sin embargo, es un mito que se convirtió en leyenda. Aunque si hay registros de la existencia del perro, era un "Guardián" que tenían los Franciscanos, en la época de otrora. Aunque con el tiempo, aseguraban que se trataba de un espíritu en "busca de oración", por que a menudo, de que se quedaba cerca de la Iglesia y cerca los velorios, ya no se le veían "los ojos rojos". 
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


