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
    <h1>Leyenda Del Vaupes</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/vaupes.png') }}"  alt="">
    </figure>
    <p>Para aclarar sus dudas, la gente buscaba la manera para dialogar con el hijo del Sol; querían saber con qué carnada o de qué manera estaba pescando el Sol. Un buen día, el padre sol descuidó a su hijo y se fue para la chagra diciéndole al niño que si alguien venía a preguntar por él no respondiera ni dijera nada. Tan pronto los demás se dieron cuenta de que el Sol se había marchado, sin perder un segundo, se fueron a buscar al hijo y le preguntaron: “¿Su papá cómo hace para coger pescado tan rápido? ¡cuéntenos o si no lo matamos!”
        De puro susto el niño fue contándoles cómo era que pescaba su papá. Les contó que cada vez que iba de pesca le llevaba a la laguna, que allá le dejaba encima de una camareta bien a ras del agua y le hacía salir sangre de las heridas, lo que atraía a los pescados. “Mi papá los flecha” les comentó el niño, inocentemente. Entonces, al oír el relato del niño, los pícaros dijeron – “Llevemos al niño a la laguna a ver si es cierto...”. Al llegar a la laguna le preguntaron: “¿dónde está la camareta?”. El niño la mostró indicándoles los pasos a seguir, y lógicamente, comenzaron a llegar los pescados atraídos por el olor de la sangre. Los hombres comenzaron a flechar los pescados sin saber cuántos tenían que matar cogiendo más de la cuenta. Descuidaron al niño y en el momento menos pensado llegó el papá de tariras, Diá Doe, y de repente se tragó al niño. Así, tuvieron que regresar a la maloka con muchos pescados pero sin el hijo del Sol. 
        El Sol, al regresar de la chagra, no encontró a su hijo sospechando que los parientes habían hecho algo indebido. Al saber la verdad se puso muy furioso y decidió ir a matar al papá de tariras, pero el mítico había decidido huir del lugar antes de que sucediera algo en contra de su voluntad. El Sol planeó ponerle trampas en varios lugares y en Las Cachiveras del río Vaupés para que, al huir, cayera en ellas. A partir de esta tragedia y por la huida de Diádoe, se originaron varias cachiveras con sus respectivos nombres, consideradas como lugares sagrados existentes en diferentes partes del río Vaupés y sus afluentes.
        </p>
    
        <a href="{{route('Vau3')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
        <a href="{{route('Vau')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


