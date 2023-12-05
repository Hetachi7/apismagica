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
    <h1>La Historia de San Sebastian</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/sebastian.png') }}"  alt="">
    </figure>
    <p>En la década de los cuarentas, los padres eran considerados por la comunidad como unos santos y la gente era muy estricta en cuanto a lo espiritual.
        Del Huila al Valle de Las Papas hay un camino llamado Camino Nacional, que pasa por la montaña sagrada del Papallacta, cerca de las lagunas de Magdalena y Santiago. Cuentan que por este camino venía el padre Tubor hacia Valencia y en un punto que se conoce como la Piedra del Diablo se le apareció un espíritu. Se dice que el padre tuvo que luchar con ese espíritu, que era el diablo, en una pelea muy fuerte y larga. En ese tiempo los padres llevaban un cinturón y el padre Tubor, después de haber luchado tanto, amarró al diablo a una piedra con el suyo.
        Una vez amarrado el demonio, el padre le dijo que cuando amaneciera él tenía que hacer una cruz en la piedra, para poder soltarse. Entonces el padre siguió su camino y como faltaba tan poco para que saliera el sol, el diablo se movía para todos los lados para poder soltarse. Finalmente, con sus garras, hizo la cruz pero al revés y fue la única forma de soltarse. Cuando el padre volvió a pasar encontró al diablo suelto y la cruz en la piedra.
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


