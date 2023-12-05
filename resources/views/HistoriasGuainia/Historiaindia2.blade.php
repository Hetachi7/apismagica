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
    <h1>La India de Guainia</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/felipe.png') }}"  alt="">
    </figure>
        <p>corcoveaba y de que manera y frecuencia lo hacía; se espantaba, se tiraba de lomo; en fin, era un maldito animal de carga al que nunca habían montado.
            Cuando llegamos al Hato la Bendición, quien nos abrió el tranquero fue el herido. Estaba perfectamente bien, solo había sufrido un leve rasguño y éste había sido las causa del desmayo. Ya les había explicado a todos mi inocencia y ellos precedieron a pedirme disculpas por no haberme creído.  
            Viajé a Paz de Ariporo. Pasaron varios años y una vez hubo un desafío de gallos entre ese pueblo y Hato Corozal. Don Felipe vino con ellos. Estando en la gallera me vio y sin mediar palabra alguna me dijo: “huyuyuii aaaqui está el hombre queee me quería matar aaa mi muchacho, queee se eeentienda conmigo, queee yo si le voy aaa enseñar cooomo es que pelean looos hombres”. Me miraba y se llevaba la mano a su faja, ancha de cuero en la que tenía su revolver. Cada vez se me acercaba más, acordándome a cada momento a mi señora madre, y repetía el mismo estribillo. Yo que conocía su manera de proceder, me retiré sin tener en cuenta sus insultos.
            Volví más tarde y me sacó corriendo de nuevo con las mismas palabras y por la misma razón. Al otro día y tras de haberle corrido varias veces, pues no quería tener ningún enfrentamiento con tan singular y respetado personaje. Estaba peleando un gallo de mi propiedad al que llamaba Careador, cuando se me vino encima don Felipe: “Huyuyui aaahora si vamos arreglar de una vez. Diiígame, por que me quería matar mi muchacho”. De nuevo llevó su mano a la chapuza donde portaba su arma. Cansado de tantos insultos salté dentro de la gallera, le eché mano a mi revolver y le dije: “Mire don Felipe, yo no tuve la culpa en lo de su hijo y jamás sería capaz de matar a un amigo, pero a Usted sí lo voy a mandar al diablo, para que no me joda más y, dicho lo anterior, me le fui encima con el revolver montado. Entonces grito don Felipe: “Huyuyuii, cóoomo se vé que eeesté muchacho nooo sabe de chanzas”.
            </p>
        <a href="{{route('india')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>
