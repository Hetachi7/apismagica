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
    <h1>LA PRINCESA FLOR EN EL CERRO PAJARITO</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/Flor.png') }}"  alt="">
    </figure>
    <p>Cuenta la historia que la palabra Inírida significa “espejito de sol”, un nombre muy bonito para una indígena que habita en el cerro Pajarito desde hace siglos. Dicen que desde niña, Inírida era tan bella que todos los hombres de la región querían casarse con ella. Pero la joven no se quería casar con ninguno y rechazaba cuanta propuesta le hacían.
        Un día, un hombre se enamoró  perdidamente de Inírida. Averiguó por aquí y por allá, tratando de encontrar una receta para lograr el amor de la muchacha. Aprendió a preparar un brebaje con puzana, una planta que crece en los cerros del Mavicure. Pero él no sabía muy bien la fórmula y le quedó demasiado fuerte.
        Cuentan que el hombre logró  que Inírida lo bebiera. Pero el brebaje quedó tan fuerte que el efecto fue infortunado. En lugar de enamorarse, la princesa enloqueció, perdió el sentido de la realidad, no sabía dónde estaba, corría de un lado para el otro sin parar. En su loca carrera escaló el cerro pajarito y al llegar a lo más alto, se desmayó.
         </p>
    
        <a href="{{route('flor2')}}"><img id="flecha" src="{{ asset('local_storage/img/derecha.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>

