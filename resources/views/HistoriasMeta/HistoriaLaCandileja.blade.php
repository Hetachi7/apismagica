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
    <h1>La Candileja</h1>
    <figure>
        <img id="candileja" src="{{ asset('local_storage/img/candileja.png') }}"  alt="">
    </figure>
    
    <p> Cuentan que la Candileja es una bola ardiente de tres antorchas, con brazos como tentáculos rojos candela, que produce ruido de jarrones rotos. Persigue a borrachos, infieles y a padres de familia irresponsables y temerosos.

        Dicen además, que asusta también a los viajeros que transitan en horas avanzadas de la noche. Los abuelos y tatarabuelos, en hogares de familias numerosas, contaban esta leyenda una y otra vez para darles una lección a sus hijos y nietos que se portaban mal.
        
        Según cuentan, hace muchísimos años había una anciana que tenia dos nietos a quienes consentía demasiado, tolerándoles hasta las más extrañas ocurrencias, groserías y desenfrenos. Los malos comportamientos de los nietos, llegaron hasta exigirle a la viejita que hiciera el papel de caballo de carga para ensillarla y luego montarla entre los dos; la abuela accedió para la felicidad de sus dos nietos, quienes anduvieron por toda la casa como sobre el más manso caballo.
        
        Cuando murió la anciana, San Pedro la regañó por la falta de rigidez en la educación de sus dos nietos y la condenó a purgar sus penas en este mundo entre tres llamaradas de candela que significan: el cuerpo de la anciana y el de los dos nietos.
        </p>
    
    
        <a href="{{route('leyenda')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>