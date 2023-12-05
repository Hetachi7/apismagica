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
    <h1>GORANCHA HIJO DEL SOL Y PROFETA CHIBCHA</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/Gorancha.png') }}"  alt="">
    </figure>
    <p> Hace muchos años, el Sol quiso reencarnar en una mujer chibcha, por lo cual, todas las mañanas las mujeres desnudas esperaban la concepción a través de los rayos del astro rey. Sin embargo, los indígenas conocieron luego, que el sol quería enviar sus rayos a una doncella del pueblo de Guachetá, quien habría de parir lo que concibiese de los rayos divinos, quedando virgen.
        En toda la región se conoció la noticia, la cual fue acatada por las dos hijas doncellas del cacique de Guachetá, deseosas ambas de que sucediese el milagro. Todos los días a la alborada, las hijas del cacique se salían del bohío de su casa y se subían a un cerro cerca del pueblo para esperar la salida del sol por el oriente. Ellas se acostaban desnudas frente al sol, esperando que las pudiese fecundar con sus rayos.
        Una de las doncellas de Guachetá apareció embarazada y al cabo de nueve meses parió una esmeralda muy grande y muy rica. La princesa la tomó y la envolvió en unos algodones, la puso entre los pechos durante varios días, hasta que al fin, la esmeralda se convirtió en un niño él que llamaron Goranchacha, hijo del sol.
        Cuando cumplió sus 24 años, el hijo del sol se dedicó a recorrer el territorio chibcha predicando las sabias enseñanzas de Bochica y convirtiéndose en profeta. En la corte de Ramiriquí, en Sogamoso y demás pueblos del altiplano Boyacense, Goranchacha era recibido como hijo del sol y predicador religioso.
        Cuando el hijo del sol tuvo conocimiento del castigo que el cacique de Ramiriquí le había infligido a uno de sus acompañantes, regresó a la entonces capital de los Zaques, le dio muerte al Cacique y asentó allí su corte, 
        </p>
        <a href="{{route('Felipe')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


