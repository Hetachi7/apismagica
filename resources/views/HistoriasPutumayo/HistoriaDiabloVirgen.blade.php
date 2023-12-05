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
    <h1>La Historia del Diablo y la Virgen</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/diablovirgen.png') }}"  alt="">
    </figure>
    <p>Hace mucho tiempo, en la desolada vía que de Mocoa conduce a Pasto, pocos conductores de vehículos se atrevían a transitar de noche por esta carretera, por temor a encontrarse con el Diablo, que según muchas personas decían haber visto, y que hacía que los conductores perdieran el sentido o toda noción, por lo que los carros iban a parar al abismo, causando muerte y desolación.
        Así es como hoy en día se colocó una imagen de la Virgen de Fátima, para de esta forma ahuyentar el fantasma que comúnmente se aparecía por esos sitios, y que según se cuenta sirvió de protectora de los conductores, logrando que no se volviera aparecer.
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


