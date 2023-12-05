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
    <h1>La Casa del Diablo</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/casadiablo.png') }}"  alt="">
    </figure>
    
    <p>Casa del diablo propiedad de Manuel Varela, productor de banano, que durante el auge de este cultivo tuvo la visión de construir un ramal ferroviario, para conectar su propiedad con la línea férrea principal, lo que le facilitó exportar su banano y obtener un significativo beneficio. Su prosperidad superó cualquier pronóstico, y la gente de la época atribuyó este hecho a que él había hecho un «pacto con el diablo», creencia que le da el nombre a esta casa. Pero su casa, esa mansión, fue la que más llamó la atención de la región. Los planos, fueron traídos desde España, los materiales eran de marmolina, vigas grandes, dos plantas, donde vivían plenamente sus hijos y esposa. 
        Pero las personas que vieron cómo llegó a la región, aseguraban que habría hecho un "Pacto con el Diablo" para lograr la fortuna que tuvo, y lo hizo a base de ofrendas de niñas. 
        El rumor, se convirtió en algo tenebroso, cuando en una de las fincas de Varela, hallaron el 'cuerpesito' de una niña de 13 años. 
        A partir de eso, si alguién en el pueblo se perdía, le echaban la culpa a
        Valera. Ánimas en pena, apariciones del Demonio y varios desaparecidos durante varios años, todo, era culpa de este hombre. 
        .</p>

    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>