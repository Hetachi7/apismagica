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
    <h1>Historia del Taitapuro</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/taitapuro.png') }}"  alt="">
    </figure>
    <p>Son personajes exclusivos y auténticos de la mitología huilense. Tiene sus orígenes en la raza pijao, donde se les consideraba el dios del fuego y de las cosechas. En las grandes festividades de San Juan, San Pedro y en el Festival del Bambuco se representa como amo y señor de las fiestas.
        Se puede seguir hablando de otros mitos, como por ejemplo la Madre Monte, que es la historia de un ser que protege los montes de Colombia, y en el caso de la mitología huilense coincide con todo el recorrido del Magdalena, con algunos nombres y algunas modificaciones fundamentales, agrega González Otalora.    
        La Mama de agua, que es la que cuida los manantiales, que junto a los duendes, que son los que conquistan a niños y niñas para llevarlos a las profundidades.
        El Mohán, es un ser de forma humana, con la cara quemada por el sol, de cabello largo, ojos penetrantes y picarescos. La gente dice que es un gran perseguidor de mujeres. El Poira es el Mohán travieso y enamorado. Les roba la tranquilidad a las jóvenes, las idiotiza, las emboba y las atrae hacia él con artificios.
        Tenemos también el tunjo de oro, representado por un niñito que llora y que circula por las calles de nuestros pueblos y que al tocarlo se convierte en un niño de oro.
        Otro mito es la Mula del Diablo que según la historia que se cuenta tiene que ver con una niña que conquistó a un apuesto sacerdote y se convirtió en mula al ser condenada a arrastrar cadenas y caminar por las solitarias calles de los pueblos y las veredas.
        Son muchos los mitos y leyendas que desde el imaginario del hombre han sido creadas para que se proteja la naturaleza, no llegue tarde a la casa, que no se quede en los bares consumiendo licor y que se mantenga en familia y dentro del hogar.
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


