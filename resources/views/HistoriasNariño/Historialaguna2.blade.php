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
    <h1>Historia de la Laguna de la Cocha</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/cocha.png') }}"  alt="">
    </figure>
        <p>Dicen que cuando la gente se dio cuenta de que Tamia y Munani estaban enamorados, Pucara se entristeció, acabó  con su liderazgo y no queriendo estorbar en el camino de los nuevos amantes, se fue a la montaña con sus tres hijos y comenzó a criar y cuidar insectos.
            Tamia y Munani comenzaron a andar sin restricción alguna por entre las siete ciudades, se entregaron al amor y la diversión sin ninguna restricción, situación que escandalizó a la comunidad entera, obligando a las personas a no prestar ninguna clase de servicio a los nuevos amantes.
            Dicen que un día, golpeando de puerta en puerta, pedían que les regalaran un pilche (totuma o mate) con agua y nadie respondía a su llamado. Hasta cuando se encontraron con un niño, a quien engañaron con la entrega de un pedazo de pan, logrando el pilche con agua.
            Los dos enamorados, se acostaron en un potrero cercano y dejaron el pilche con agua a sus pies, y el hombre lo regó. No se dio cuenta que el agua derramada de la totuma comenzaba a crecer hasta que prácticamente los estaba ahogando; en ese momento, llegó un insecto, de los que Pucara criaba y cuidaba con sus tres hijos, lo picó y lo hizo botar abundante agua por la boca y nariz.
            Era tan grande su caudal que rápidamente inundó la totalidad del valle, quedando bajo el agua las siete ciudades. Cuentan algunos pobladores, que un sonido de campana fue lo último que se escuchó sobre ese sector que hoy conocemos como el Lago Guamuez o Laguna de La Cocha.
            Pucara, que asombrado y entristecido observaba desde la montaña con sus hijos el encantamiento del lugar, lloró tristemente su desgracia, se acogió cariñosamente a sus tres hijos y se quedó petrificado para siempre en la montaña que lleva el nombre del insecto que picó a su rival, !El Tábano!
            Cuenta la tradición popular que cuando Pucara recuerda la traición de Tamia con Munami, llora tristemente en medio de rayos y centellas, y sus lágrimas aumentan el caudal de la laguna, causando grandes estragos a los pobladores de las orillas de La Cocha.
        
            </p>
        <a href="{{route('laguna')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


