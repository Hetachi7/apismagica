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
    <h1>La Danta y el Morroco</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/danta.jpg') }}"  alt="">
    </figure>
    <p>Había una vez una mujer indígena que vivía en una maloka lejana, con su nieto morroco pequeño, que siempre le acompañaba por donde ella fuera. La anciana tenía su chagra con cultivos de piña, ñame, yuca y batata. Cada mañana se iba a recoger sus frutos, pero nunca los hallaba, pues todas las mañanas muy temprano salía la danta y se los comía...por esto la pobre anciana regresaba siempre sin nada.
        Un día al ver esto se puso muy triste, pero al mismo tiempo se enfureció y dijo en voz alta: “yo quisiera comerme el hígado de la danta por haberse comido mis piñas”. Cuando la mujer gritó de esa maneara, la danta que se encontraba entre los matorrales contestó: “si usted quiere comer mi hígado, meta su mano en mi ano y lo saca”. La anciana, aunque muy asustada, corrió hacia la danta y le introdujo la mano, pero la danta salió corriendo arrastrándole lejos del lugar hacia el monte y allí la abandonó. La abuela se murió en el monte, pues no supo cómo regresar a la casa y su pobre nieto se puso muy triste cuando se enteró de esta tragedia.
        El morroco buscó la manera de vengarse de la muerte de la abuela y un buen día se le presentó una oportunidad. Él vigilaba cada movimiento de la danta, hasta que un día la encontró dormida en el matorral. Mientras la danta dormía, el morroco buscaba la parte más débil para atacarla. Por fin decidió morderla en los testículos lo más fuerte que pudo y sin soltarla. La danta desesperada comenzó a brincar y a correr entre las montañas haciendo de todo para poderse soltar, pero el morroco no la soltó hasta que la danta murió. 
        Así pudo vengar el morroco la muerte de su abuela.
        
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


