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
    <h1>Historia de la Creacion</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/creacion.png') }}"  alt="">
    </figure>
    <p>La explicación del origen del pueblo de los Ticunas, llamados “Pieles negras” por sus vecinos debido a que así pintaban sus cuerpos en las ceremonias dedicadas a sus dioses o sus protectores de clan, narra que Yuche, quien vivía desde siempre en el mundo, en compañía de las perdices, los paujiles, los monos y los grillos, había visto envejecer la tierra. A través de estos animales, se daba cuenta de que el mundo vivía y que la vida era tiempo y que el tiempo... era muerte.
        No existía en la tierra sitio más bello que aquel donde Yuche vivía; era una pequeña choza en un claro de la selva, muy cerca de un arroyo enmarcado en playas de arena fina. Todo era tibio allí, ni el calor ni la lluvia entorpecían la belleza de aquel lugar. Dicen que nadie ha visto el sitio pero los Ticunas esperan ir allí algún día.
        Un día Yuche fue a bañarse al arroyo como de costumbre. Llegó a la orilla y se introdujo en el agua hasta que estuvo enteramente sumergido. Al lavarse la cara se inclinó hacia adelante mirándose en el espejo del agua; por primera vez notó que había envejecido.
        </p>
    
        <a href="{{route('creacion2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


