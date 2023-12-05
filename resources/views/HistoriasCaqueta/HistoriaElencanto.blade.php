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
    <h1>El Encanto de la Doncella</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/doncella.png') }}"  alt="">
    </figure>
    <p>Como “El Encanto” fue bautizado el puente construido sobre el río Hacha, para permitir el paso de los habitantes de la capital del Caquetá hacia el resto de la población ubicada al sur del departamento. Este paraje de encanto sin igual ofrecía un aire de tranquilidad y frescura. Las cristalinas aguas del río formaban en la parte superior un remanso junto a una grande y hermosa peña.
        En los atardeceres solía aparecer una hermosa doncella. Se mostraba entristecida, sentada junto a la raíz de un árbol seco cercano a la orilla del río. Era tan encantadora que al contemplar su belleza, transcurría el tiempo sin advertirse. Todo era un verdadero encanto. Los conductores de buses y camiones siempre fueron los más débiles y no controlaban sus deseos de aproximarse. Cuando esto ocurría, ella solicitaba que le dieran la oportunidad de dar un paseo en el carro. Por unos minutos sonreía sin pronunciar palabra, pero al menor descuido se transformaba en esqueleto. El susto privaba al conductor, provocando accidentes</p>
    
     
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>