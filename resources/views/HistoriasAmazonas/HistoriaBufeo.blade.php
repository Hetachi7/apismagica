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
    <h1>El Bufeo Colorado</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/bufeo.png') }}"  alt="">
    </figure>
    <p>
        Este famoso pez del Amazonas es también conocido como tonina o delfín. Se cree que se convierte en hombre para seducir a las mujeres. Las muelas y algunas partes del cuerpo de la hembra se usan como talismanes en la pesca, la cacería y el amor. Dicen que el animal se transforma en persona y se le presenta a la gente que utiliza partes de su cuerpo, como dientes, o que mata a su especie para hacer pusanga (brujería) o talismanes para maleficios.
        Con el diente del bujeo se hace un preparado con cualquier aceite y se unta a la gente que se vuelve loca inmediatamente. Solamente a la persona que utiliza el diente para hacer esta maldad se le aparece el animal convertido en persona; le conversa como cualquier humano, lo encanta, lo enamora y lo lleva al río donde lo mata. Si es hombre el que mató al bujeo, éste aparece convertido en mujer y viceversa.
        Durante las noches de fiesta aparecían hombres extraños de tez blanca, altos y siempre con sombrero. Su interés era conquistar las mujeres más hermosas de la fiesta. Compartían y bailaban un tiempo hasta que, convencían a la mujer para ir a otro lugar del cual nunca volvían. Desaparecían sin dejar rastro. Los pobladores tomaron cartas en el asunto y decidieron seguirlos. En la siguiente fiesta los emborracharon con masato, bebida alcohólica tradicional, lograron con esto que sus sombreros cayeran y así poder ver sus rostros. 
        Para sorpresa de los espectadores, en el momento en qué se le cayó se convirtió en una raya. Después se quitó los zapatos, que se convirtieron en cuchas, y por último su correa terminó siendo una boa. Cuando los hombres volvieron en sí, se metieron al rio y la mitad de su cuerpo era la de un bufeo rosado,  y la otra era la de una persona, luego de entrar en el Amazonas no volvieron a salir. En ocasiones se sabe que los bufeos salen al río para enamorar mujeres hermosas..

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


