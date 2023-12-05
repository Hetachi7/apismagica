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
    <h1> Historia de la Dama Verde</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/damav.jpg') }}"  alt="">
    </figure>
    <p>Cuenta la leyenda que la Dama Verde, es un espanto que suele aparecerse en callejuelas y lugares 
        ruinosos (ruinas) de los departamentos de Antioquia y Caldas en Colombia.
        La leyenda relata que la Dama Verde es un espectro que deambula por las calles solitarias en las altas horas de la noche, también suele aparecer en lugares ruinosos, como casas abandonadas.
        Muchos la describen como una mujer muy bella y elegante, que usa un largo vestido verde (de allí  
        su nombre característico), y cubre su rostro con un velo negro.
        Se le suele aparecer mayormente a borrachos, jugadores empedernidos y trasnochadores, los cuales suelen caer en sus encantos y la siguen con la intención de enamorarla, pero cuando ambos llegan a un lugar solitario y apartado, la dama verde se quita el velo del rostro y se transforma en una calavera que deja desmayado del miedo a la persona que la siguió.
        También se dice que la Dama Verde es un ser protector de las parejas y que suele guiar a las personas a guacas y tesoros, cuando estos son capaces de dominar su miedo y seguirla hasta el lugar donde desaparece pueden encontrar gran fortuna, pues deben según la leyenda empezar a cavar en el lugar donde desapareció, pues allí habría escondida una guaca o tesoro.
        </p>
    
        <a href="{{route('Felipe2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>