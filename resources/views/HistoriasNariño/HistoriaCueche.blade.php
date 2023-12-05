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
    <h1>Historia del Cueche</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cueche.png') }}"  alt="">
    </figure>
    <p>El Arco iris fue el símbolo de paz entre Dios y el hombre según reza la Sagrada Biblia, pero en nuestra región y en otras del sur occidente patrio y norte del estado vecino; fue siempre parodia del demonio, era un ser maligno con los animales y la gente, más aún con los niños a quienes perseguía hasta las calles del poblado.
        Todos sabemos que al mezclarse la llovizna con los rayos solares en una atmósfera tibia pletórica de oxígeno, se nos presenta el bello arco iris, fenómeno natural digno de admiración, gigantesco unas veces pero en otras oportunidades se presenta un sector por acá y otro por allá; entonces es cuando nuestros nativos le dieron el nombre de Cueche, le pusieron cabeza, ojos, cuernos, boca y movimiento infernal, peligroso, decían que persigue principalmente a las mujeres embarazadas para que sus criaturas resulten lisiadas o a los animales domésticos cuando estos pertenecían a gentes de poca fe, produciéndoles llegas en el espinazo, en las extremidades, en la cabeza llagas que cada día eran más profundas y visiblesque llegaban a producir la muerte.
        Generalmente en un sector denominado El Salto, que era un hueco, una depresión geográfica, aparecía el Cueche; tanto como por el cañón de la quebrada La Ruidosa y subía poco a poco al cielo despejado y lleno de ozono donde se lo miraba desde cualquier sector del pueblo; entonces las gentes se recogían en sus casas se protegían en cuevas, bajo un árbol, generalmente beatos y beatas corrían a la iglesia para que el páramo que producía la atmósfera preñada de energía les caiga y les haga daño. Nosotros, los niños sabíamos que el Cueche </p>
    
        <a href="{{route('cueche2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


