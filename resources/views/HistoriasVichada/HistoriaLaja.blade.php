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
    <h1>El Encanto De la Laja</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/felipe.png') }}"  alt="">
    </figure>
    <p>Es una leyenda mitológica que se fundamenta principalmente en el sector pesquero. Juan Reyes, un señor de estas tierras que murió hace más de 10 años, quien vivía en el Cerro del Vita y su compañía era cualquier cantidad de perros, contaba que debajo de esa inmensa piedra del barrio Punta de Laja se encuentra un túnel que conduce a una ciudad, la cual tiene una reina que se llama Rosita. Cuando sale de la ciudad se convierte en Tonina y se identifica por un lunar blanco que tiene en la nuca; cuando no quiere dejar pescar ahuyenta los pescadores, les quita las mallas, los amedrenta con chapaleos en el agua y recurre a cualquier distracción con tal de no dejar pescar. Cuando los pescadores la ven, se retiran.
        Cuentan que la única persona que la ha visto vive en San Fernando de Apure (Venezuela) y se llama Pedro Barrios, quien dice que estuvo en esa ciudad encantado por Rosita
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


