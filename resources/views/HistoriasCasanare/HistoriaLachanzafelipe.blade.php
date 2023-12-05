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
    <h1>La Chanza de Don Felipe</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/felipe.png') }}"  alt="">
    </figure>
    <p>En un municipio que hace parte del actual departamento de Casanare y que limita en su totalidad con Arauca, según me decía Saúl, el Niño mentiroso, vivió un personaje descendiente de una de las familias más respetables que han existido en este territorio, heredero y hacedor de una inmensa fortuna representada en ganados vacunos y caballares. Sus antepasados, nacidos en Venezuela, coadyuvaron notoriamente en la campaña libertadora y algunos de ellos alcanzaron grados de consideración otorgados por el libertador; por otra parte, dos de sus ascendientes por el lado materno, hicieron parte de los centauros que conformaron los catorce lanceros, que en el Pantano de Vargas convirtieron una derrota de las Fuerzas Patriotas, en la mas esplendente victoria. De ellos se puede decir que fueron los verdaderos artífices de nuestra independencia.
        Felipe se llamaba nuestro personaje y lo apodaban el loco. Era un llanero en toda la extensión de la palabra, generoso como ninguno y amigo del aguardiente. Alto de cuerpo y su contextura no le hacía ningún honor a su apellido. Permanecía, cuando estaba en su hato denominado el Recuerdo, de pie junto al tranquero, contemplando sus extensos dominios y esperando para conocer de muy lejos, a las personas próximas a llegar a la casa. Cuando divisaba a alguien llamaba a uno de sus mensuales y le decía: “aa llaaa, viene julano de tal y seguro viiiene muerto de hambre, eeen su rancho no tieeenen quecomer yyy se vino aaa que yo le de de tragar, vaaya y dìgale a la coca que aaliste unos pocillos de café La malicia indígena me aconsejó que no le permitiera su proyectado regreso y le aconsejé enviar un papel con mi amigo, quien iría hasta la casa a traer lo que él ordenara.
        Le asigné al médico el caballo con el que yo había llegado y procedí a montar en el maldito macho, por desgracia poseedor de todas las mañas que puede adquirir un animal machiro: tiraba pata cuando uno iba a meter el pie en el estribo
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


