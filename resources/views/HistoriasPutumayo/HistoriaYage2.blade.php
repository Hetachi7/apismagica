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
    <h1>Historia del Yage </h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/Yage.png') }}"  alt="">
    </figure>
        <p>con profunda reverencia, atención y silencio escuchan esas oraciones, como para alejar el espíritu malévolos de los “Uattis”, con el fin de que no hagan daño a la bebida; pasada la oración, el curaca saca la primera totuma y bebe, con lo cual los espíritus enemigos no causarán ya daño alguno, pues con su aliento queda curado el contenido de la olla.
            Luego se reparte entre los concurrentes, los cuales, cuando han escanciado la primera totuma, se levantan y el curaca, tomando una rama, principia una danza de corta duración para volver a repartir la bebida del yagé; empiezan los efectos y muchos quedan completamente transformados, rendidos y dando aullidos terribles. Generalmente el curaca es el primero que despierta y entonces comienza a dar a los embriagados la “contra” del narcótico, que es otra bebida extraída de la planta “Benan”. 
            Al despertar, cada uno de los pacientes describe lo que ha visto; unos relatan haber visto animales de toda especie en un lugar determinado de la selva y aconsejan salir a cazarlos; otros haber volado en alas de “Uattís” por los aires, otros han visto muchas ciudades, gentes, mujeres hermosas, trajes lindos y hermosos vestidos, mientras que otros afirman que han visto minas de toda naturaleza en donde se encuentra en abundancia el “Curí” (Oro), piedras preciosas y rubíes.
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


