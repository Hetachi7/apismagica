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
    <h1>La Llorona del Cuaca</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/llorona.png') }}"  alt="">
    </figure>
        <p>La llorona es quizá una de las leyendas más antiguas y conocidas en México, y extendidas al resto de América Latina desde luego tiene tantas versiones como se puedan imaginar: hay quienes afirman que era la antigua diosa azteca Cihuacóatl, otra versión indica que pudo haber sido la célebre Malinche o Doña Marina, de quien hablaremos más adelante; hay otros, sin embargo, que la ubican como una mujer de gran belleza que existió durante la época del México colonial.
            Pero ¿quién es esta misteriosa y al mismo tiempo aterradora mujer? Aunque el origen varia, a grandes rasgos La Llorona es el alma en pena de una hermosa mujer vestida de blanco que todas las noches vaga por las calles o a las orillas de los ríos, lamentándose por la pérdida de sus hijos, su belleza ejerce una gran atracción en todos los hombres y sus gemidos y lamentos aterrorizan a todo el que la escucha.
            Es muy posible que esta leyenda haya tenido su origen en la antigua cultura azteca, donde se creía en las Cihuateteo, que no eran otra cosa más que los espíritus de las mujeres muertas durante el parto y a quienes se les honraba por haber perdido la batalla que representaba el dar a luz; los antiguos pobladores de México Tenochtitlan creían que podían encontrar a estos espíritus llorando por sus hijos en los cruces de los caminos.
            Es muy común que las Cihuateteo estén profundamente relacionadas con la diosa Cihuacóatl (a quién ya hemos mencionado) quién, dentro de la mitología azteca, fue la primera mujer en dar a luz y por lo tanto se convirtió en la diosa protectora de los partos y de las mujeres que morían al parir.
         </p>
        <a href="{{route('llorona')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


