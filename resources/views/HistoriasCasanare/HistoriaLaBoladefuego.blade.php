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
    <h1>La Bola de Fuego</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/Boladefuego.png') }}"  alt="">
    </figure>
    
    <p>En los Llanos Orientales de Colombia, desde hace muchas décadas, surgió una leyenda que muchos han calificado como cierta, pues diversas personas la han presenciado. Se trata de la “bola de fuego” que aparece en las noches, llevándose a quien atrape. Según las personas más longevas de dicha región suramericana, manifiestan que todo inició cuando siglos atrás, una bella dama llamada Candelaria, con un cuerpo voluptuoso y bien formado, con un suave y liso cabello negro que llegaba casi hasta sus rodillas, ojos azules encantadores y una sin igual piel canela, contrajo nupcias con un sujeto de fuerte contextura y temperamento, andador de esas tierras, llamado Esteban.
        Se trataba de un individuo que gustaba de beber licor continuamente, cantando coplas como buen músico que era. Dos hijos varones fueron el fruto de este matrimonio, que duró poco tiempo porque cierto día, cuando Esteban se preparaba para asistir a un gran festejo, pero no quería llevar por nada del mundo a su mujer.
        Entonces Candelaria enfureció y su ira la encegueció tanto, que estaba dispuesta a acabar con la vida de su esposo si fuese necesario con tal y no fuera a la susodicha parranda, si ella tampoco iba. De tal modo que sin importarle que sus dos hijos estaban en medio de la fuerte discusión, sin más, ella cogió un hacha y acabó brutalmente con la vida de Esteban.Luego, solicitó a sus hijos Sigifredo y Esteban junior, que le ayudaran a deshacerse del cadáver.</p>        
    
        <a href="{{route('Bola2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>