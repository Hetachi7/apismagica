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
    <h1>La anima sola</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/animasola.png') }}"  alt="">
    </figure>
    
    <p>Es un mito que tiene asiento en muchas regiones del occidente colombiano, entre ellas el departamento de Chocó. Valga la pena recordar que el mes de noviembre es destinado a los difuntos y se acostumbra rezarles rosarios a la Virgen del Carmen, tanto en las casa como en las iglesias. Para sacarlos de pena y ponerlos a descansar. En otros tiempos existía, en muchos pueblos de Colombia, la costumbre de ofrecer “mandas” a las Benditas Ánimas del Purgatorio, menos a una conocida como “el Ánima Sola” la cual esta condenada a quedarse allí hasta el día del Juicio Final; pero el campesino, a pesar de ello, le tiene devoción.
        Como ha purgado tanto tiempo de su castigo, considera que es un alma purificada que tiene el poder del milagro. Algunos aseguran que han sentido su compañía en momentos difíciles de la vida y que han visto su luz protectora. A quienes han dudado de sus favores, dice la creencia, se les ha aparecido envuelta en las llamas de sufrimiento del purgatorio y han quedado desmayados y privados del habla por el susto, durante horas y días.
        El Ánima Sola tiene dos días especiales para su devoción: Viernes Santo, después del primer canto del gallo, y el 2 de noviembre, día de las ánimas o los difuntos.
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