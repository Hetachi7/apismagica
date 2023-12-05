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
    <h1>Corcovao De Tofeme</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/corcovao.png') }}"  alt="">
    </figure>
    
    <p>Desde la orilla del río San Jorge se alcanza a ver por las mañanas despejadas o después de fuertes lluvias la sombra azul del cerro del Corcovao. Según la tradición, dicen que allí vive el Mocán -guerreo-Tofán o Tofeme, ñato y tuerto de tanto guerrear, ya que viejo lo pusieron a vigilar al enemigo en lo más alto del cerro, debajo del árbol de totumo de oro que nadie puede coger, porque se pierde en la manigua.
        Tofeme es bueno porque además de conducir lauras y águilas que van a desovar al cerro, cuando se fastidia de vivir solo entra en ira y desata tempestades e inundaciones cada 12 años, pero cuando ve aproximarse un enemigo, truena con voz ronca y suelta relámpagos en seco. ¡Tronó Corcovao! Gritaban los indios y salían a esconderse a una isla flotante, que nadie jamás ha conocido. Hoy día los habitantes de las cercanías al río San Jorge siguen creyendo en él y cuando suena Corcovao no salen a esconderse como los indios, sino que se apresuran a preparar las fértiles tierras para sus cultivos y la madera para los posibles tambos, porque tras los truenos vienen las lluvias.</p>
    
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>