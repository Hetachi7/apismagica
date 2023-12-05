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
    <h1>El Valle del Patia</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/patia.png') }}"  alt="">
    </figure>
    <p>En tiempos inmemorables, el Valle del Patía no tenía vegetación. Todo estaba cubierto por agua formando un tranquilo lago cuyas orillas lamían los pies de las cordilleras central y occidental. En el agua bailaban variedad de peces multicolores, rebosantes de alegría y desde la cima de las montañas, los habitantes de la tierra recreaban su mirada observando su verde aguamarina.
        Todos los días, cuando el sol se detenía en el centro del cielo, las aves de la cordillera central y occidental se ponían de acuerdo para cambiar de cordillera. Entonces volaban sobre el agua, entonando rítmicas tonadas que dieron origen al bambuco patiano. Las aves, al entrecruzarse formaban una policromía preciosa, para que el alma del lago se llenara de emoción. 
        Pero la maldad ha existido siempre. No se sabe de donde vinieron dos monstruos grandes y grises, con una trompa enorme, llena de afilados dientes y miles de patas. Estos monstruos se internaron en el mar y devoraron los peces de colores. </p>
    
        <a href="{{route('patia2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


