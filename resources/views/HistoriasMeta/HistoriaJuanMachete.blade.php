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
    <h1>Juan Machete</h1>
    <figure>
        <img id="candileja" src="{{ asset('local_storage/img/juanmachete.png') }}"  alt="">
    </figure>
    
    <p> Considerable como una de las leyendas más conocidas del llano. Cuenta la vida del hombre que quería ser el más poderoso de la región, su nombre era Juan Francisco Ortiz, amo y señor de las tierras de la Macarena. Este señor hizo un pacto con el diablo en el cual le entregaba su mujer e hijos, a cambio de mucho dinero, ganado y tierras.
        El diablo le dijo a Juan que agarrara un sapo y una gallina, a los cuales debería coserle los ojos y enterrarlos vivos un Viernes Santo a las doce de la noche, en un lugar apartado, luego debería invocar el alma y el corazón. Juan cumplió con lo encomendado. Pasando varios días, el hombre se dió cuenta que los negocios prosperaban.
        Una madrugada se levantó temprano, y al ensillar su caballo divisó un imponente toro negro, con los cuatro cascos y los dos cachos blancos. Pasó este hecho desapercibido y se fué a trabajar como de costumbre.
        En la tarde regresó de la faena y observó que el toro todavía se encontraba merodeando la casa. </p>
    
    
        <a href="{{route('juan2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>