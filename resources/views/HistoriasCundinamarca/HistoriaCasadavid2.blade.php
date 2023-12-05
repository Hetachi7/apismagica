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
    <h1>La Casa de Don David</h1>
    <figure>
        <img id="caquiona" src="{{ asset('local_storage/img/casadavid.png') }}"  alt="">
    </figure>
        <p>Para conocer otra cara del relato, 15  consultó a la familia Moreno DeLuca, que vivió durante 3 años en la casa y dijeron que jamás sintieron ruidos y mucho menos pasos. En cambio, recordaron que el lugar es apacible y agradable para vivir.
            ¿Un castillo dónde asustan?
            En la carrera 27, en una esquina al costado del Parque de Los Niños, está ubicada la casa que perteneció a los Streithorst, la familia de un alemán que llegó por negocios a Bucaramanga, pero se enamoró de la ciudad y se quedó. Él quería recordar parte de su país y por eso se dio a la tarea de hacer una construcción diferente. 
            La casa fue construida entre 1920 y 1933 a imagen y semejanza de una vivienda típica alemana y como regalo de matrimonio. Ellos tuvieron dos hijos y desde entonces, han pasado cuatro generaciones más. Friederich murió a los 33 años y un tiempo después, la casa fue vendida. En la actualidad es una sede de la Universidad Antonio Nariño.
            Juan Federico Streithorst, uno de sus descendientes y quien ahora vive en Bogotá,  afirma que en esa casa no ocurre nada extraño, ni que le pertenece al diablo o tiene fantasma propio.
            “Creo que la gente confunde relatos. Lo que muchos dicen sobre una ventana que no se deja reconstruir, un alma que asusta y demás creencias que rodean al lugar, le pertenecen a otras leyendas, pero no a la casa donde vivimos nosotros. Todo eso hace parte del folclor popular”, explica.
             </p>
        <a href="{{route('Felipe')}}"><img id="flecha" src="{{ asset('local_storage/img/izquierda.png') }}"  alt=""></a>
    
</div>
<div class="ojo">
    <img src="{{ asset('local_storage/img/ojo.gif') }}" >
</div>
<div class="audiolibro">
    <h2>Audiolibro</h2>
<audio  controls  >
    <source src="{{ asset('local_storage/img/musicafondo.mp3') }}"  type="audio/mpeg">
    
</audio></div>


