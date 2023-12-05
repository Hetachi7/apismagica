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
    <h1>Leyenda Del Sol</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/sol.png') }}"  alt="">
    </figure>
    <p>Al llegar a la laguna le preguntaron: “¿dónde está la camareta?”. El niño la mostró indicándoles los pasos a seguir, y lógicamente, comenzaron a llegar los pescados atraídos por el olor de la sangre. Los hombres comenzaron a flechar los pescados sin saber cuántos tenían que matar cogiendo más de la cuenta. Descuidaron al niño y en el momento menos pensado llegó el papá de tariras, Diá Doe, y de repente se tragó al niño. Así, tuvieron que regresar a la maloka con muchos pescados pero sin el hijo del Sol.  
        El Sol, al regresar de la chagra, no encontró a su hijo sospechando que los parientes habían hecho algo indebido. Al saber la verdad se puso muy furioso y decidió ir a matar al papá de tariras, pero el mítico había decidido huir del lugar antes de que sucediera algo en contra de su voluntad. El Sol planeó ponerle trampas en varios lugares y en Las Cachiveras del río Vaupés para que, al huir, cayera en ellas. A partir de esta tragedia y por la huida de Diádoe, se originaron varias cachiveras con sus respectivos nombres, consideradas como lugares sagrados existentes en diferentes partes del río Vaupés y sus afluentes. 
        Diádoe huyó río abajo del Vaupés y para que no se escapara, el Sol puso una trampa de matapí (trampa para atrapar pescado) en la cascada o cachivera, que hoy en día se conoce con el nombre de Matapí. Diádoe no cayó en la trampa y pudo escapar desviándose por otro lado. Seguía bajando y el sol le seguía con la trampa; llegaron a otra cachivera y el padre de tarira se convirtió en cuerpo de arara, pasó volando y a la cachivera le colocaron de nombre Arara (que en lengua yeral quiere decir guacamayo). Siguió bajando Diádoe y llegó a otra cachivera donde el Sol ya tenía puesta otra trampa... al verla, se transformó en un pescado grande, pasó por encima de la trampa y esa cachivera quedó con el nombre de Carurú, que en lengua yeral significa pescado. 
        </p>
    
        <a href="{{route('sol4')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
        <a href="{{route('sol2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


