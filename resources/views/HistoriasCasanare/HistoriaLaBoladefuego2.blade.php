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
    
    <p>
        Como era tanta su belleza y al enterarse de su viudez, docenas de hombres comenzaron a pretenderla, pero la silvestre mujer nunca aceptó a alguno de ellos. Sólo se enfocó en la crianza de sus primogénitos. Cuando Sigifredo alcanzó la edad de 15 años, se volvió un apuesto galán de ojos azules como su madre. Pero ella se enamoró de su propio hijo y prácticamente, lo hizo su amante. Candelaria cuidaba celosamente de que ninguna chica se le acercara a Sigifredo.
        Pero cuando Esteban, el menor, cumplió 15 años, tomó una apariencia mucho más seductora y adquirió finas maneras de comportarse y facultades de todo un llanero fuerte. En consecuencia, su madre ahora se fijó en él y quiso también, llevarlo a la cama. Pero los principios éticos que adquirió el joven lo condujeron a negarse ante las propuestas indecorosas de Candelaria y le parecía absurdo.
        Pero ese rechazo desató la terrible furia de Candelaria, al igual que en aquella ocasión en la que asesinó a su esposo, pensó que si ella no había podido disfrutar del muchacho, no lo haría ninguna otra mujer en el mundo. Así que también lo mató.
        La temible mujer envejeció al trascurrir de los años de manera natural y falleció sin haberse arrepentido de sus pecados mortales. Cuenta la leyenda, que Dios a modo de castigo, la condenó a vagar como alma en pena por las llanuras, con forma de una bola de fuego. Desde entonces, se dedica a atacar a algunos caminantes, sobre todo muchachos apuestos que según dicen, si se dejan atrapar por la bola de fuego, desparecen para siempre.
        </p>        
    
        <a href="{{route('Bola')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>