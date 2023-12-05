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
    <h1>Agueros</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/aguerosCo.png') }}"  alt="">
    </figure>
    
    <p>Los niños en cruz, los animes, las piedras de ara, la aguja del muerto y los heliconios, son objetos de magia negra que ayudan y protegen a sus poseedores.
        El niño en cruz
        Es un objeto que representa a un niño crucificado. El usuario debe metérselo entre cuerpo y carne y alimentarlo con su sangre. Como tribulación, el objeto maligno no permitirá que su dueño sea herido.
        Los animes
        Son animalitos de color oscuro, que tienen la boca roja y los ojos centellantes. Se guardan en un cacho de buey, que es muy resistente, ya que los animes padecen de un hambre voraz y todo lo roen. El hombre que tenga los animes es un buen trabajador en todos los campos. Se dice que para alimentar a los animes se les da saliva y dos veces al año hay que llevarlos a una hacienda para que devoren reces, lo cual se hace a escondidas. Si los animes no son alimentados se comerán al dueño.
        La aguja del muerto
        No es más que una simple aguja que con mucho sigilo se hunde en el talón de un enfermo en estado agónico. Al momento de expirar preguntará: “¿para qué la quieres?” y se contesta: “para enamorar”. Se saca la aguja del talón y se envuelve en un algodón impregnado con agua bendita.
        El poseedor la usará dando puntadas en el aire cerca de la mujer pretendida, y ésta, al momento, enloquecerá por él
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