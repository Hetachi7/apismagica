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
    <h1>El Cupurita</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cupurita.png') }}"  alt="">
    </figure>
    <p>Hablamos de uno de los personajes más conocidos en el país: Curupira.Curupira es conocido como el guardián de los bosques, habita en las matas ColomboBrazileñas y se encarga de proteger la naturaleza, ya sean árboles, plantas y animales, de todos los depredadores. Sus principales enemigos con los cazadores y los leñadores.    
        De tamaño pequeño y cabello pelirrojo, su mayor característica es que tiene los pies hacia atrás. Estohace casi imposible seguir su pista por los caminos, ya que sus huellas despistana todo aquel que le intente seguir. Además, alcance una velocidad sorprendente, lo que hace casi imposible que un ser humano pueda alcanzarle corriendo.
        La primera mención de Curupira data del 1560 cuando el religioso José de Anchieta (fundador de la ciudad de Sao Paulo) escribió: “Es sabido por el boca a boca que hay ciertos demonios, que llaman Curupira, que les sucede muchas veces a los indios en el monte, dándoles azotes, maltratándoles y matándoles. Son testimonios recogidos de nuestros hermanos que algunas veces vieron a los muertos".
        A través de sonidos agudos y gritos atrae a las personas hacia el interior de los bosques. También es capaz de imitar sonidos humanos. Una vez dentro, despista a los enemigos de los bosques para que nunca sean capaces de volver a su rumbo. Además, hace que las presas sean invisibles para que los cazadores no puedan encontrarlas.
        Según cuenta la leyenda, suele llevarse a niños pequeños a vivir con él dentro de los bosques para enseñarles a amar la naturaleza y a que entiendan los secretos que albergan los bosques. Cuando los niños cumplen 7 años los devuelve con su familia para que compartan lo aprendido.
        Si quieres pasar tranquilo por los caminos de los bosques, es mejor tenerle contento, para ellos déjale algún regalos. Sus favoritos son: alimentos, flechas y tabaco
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


